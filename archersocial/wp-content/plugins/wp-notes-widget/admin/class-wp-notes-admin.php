<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @since      0.1.0
 *
 * @package    WP_Notes
 * @subpackage WP_Notes/includes
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    WP_Notes
 * @subpackage WP_Notes/admin
 */
class WP_Notes_Admin {

  /**
   * The ID of this plugin.
   *
   * @since    0.1.0
   * @access   private
   * @var      string    $name    The ID of this plugin.
   */
  private $name;

  /**
   * The version of this plugin.
   *
   * @since    0.1.0
   * @access   private
   * @var      string    $version    The current version of this plugin.
   */
  private $version;

  /**
   * Initialize the class and set its properties.
   *
   * @since    0.1.0
   * @var      string    $name       The name of this plugin.
   * @var      string    $version    The version of this plugin.
   */
  public function __construct( $name, $version ) {

    $this->name = $name;
    $this->version = $version;

  }


  /**
   * Create the Notes post type
   * 
   * @since 0.1.0
   */
    function notes_post_type_init() {

      $labels = array(
      'name'               => _x( 'Notes', 'post type general name', 'wp-notes-widget' ),
      'singular_name'      => _x( 'Note', 'post type singular name', 'wp-notes-widget' ),
      'menu_name'          => _x( 'Notes', 'admin menu', 'wp-notes-widget' ),
      'name_admin_bar'     => _x( 'Note', 'add new on admin bar', 'wp-notes-widget' ),
      'add_new'            => _x( 'Add New', 'nw-item', 'wp-notes-widget' ),
      'add_new_item'       => __( 'Add New Note', 'wp-notes-widget' ),
      'new_item'           => __( 'New Note', 'wp-notes-widget' ),
      'edit_item'          => __( 'Edit Note', 'wp-notes-widget' ),
      'view_item'          => __( 'View Note', 'wp-notes-widget' ),
      'all_items'          => __( 'All Notes', 'wp-notes-widget' ),
      'search_items'       => __( 'Search Notes', 'wp-notes-widget' ),
      'parent_item_colon'  => __( 'Parent Notes:', 'wp-notes-widget' ),
      'not_found'          => __( 'No notes found.', 'wp-notes-widget' ),
      'not_found_in_trash' => __( 'No notes found in Trash.', 'wp-notes-widget' )
    );

    $args = array(
      'labels'               => $labels,
      'public'               => false,
      'publicly_queryable'   => false,
      'exclude_from_search' => true,
      'show_ui'             => true, 
      'show_in_menu'         => true, 
      'query_var'           => true,
      'rewrite'             => false,
      'capability_type'     => 'post',
      'has_archive'         => false, 
      'hierarchical'         => false,
      'menu_position'       => null,
      'supports'             => array('title','page-attributes')
    ); 

    register_post_type('nw-item',$args);

  } // end notes_post_type_init



  /**
   * Create new image size for image displayed in note
   * 
   * @since    0.1.3
   */
  function add_notes_image_size() {
    add_image_size( 'wp-notes-widget-image', 400 );
  }


  /**
   * Notes admin update messages.
   *
   * See /wp-admin/edit-form-advanced.php
   * @since    0.1.3
   * @param array $messages Existing post update messages.
   * @return array Amended post update messages with new Note update messages.
   */
  function notes_post_updated_messages( $messages ) {

    $post             = get_post();
    $post_type        = get_post_type( $post );
    $post_type_object = get_post_type_object( $post_type );
    
    $messages['nw-item'] = array(
      0  => '', // Unused. Messages start at index 1.
      1  => __( 'Note updated.' ),
      2  => __( 'Note details updated.' ),
      3  => __( 'Note details deleted.'),
      4  => __( 'Note updated.' ),
      /* translators: %s: date and time of the revision */
      5  => isset( $_GET['revision'] ) ? sprintf( __( 'Note restored to revision from %s.' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
      6  => __( 'Note published.' ),
      7  => __( 'Note saved.' ),
      8  => __( 'Note submitted.' ),
      9  => sprintf(
        __( 'Note scheduled for: <strong>%1$s</strong>.' ),
        // translators: Publish box date format, see http://php.net/date
        date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) )
      ),
      10 => __( 'Note draft updated.' )
    );
   
    return $messages;
  } // end notes_post_updated_messages



  /*============================================================================
    DISPLAY NOTE META BOXES
  ==============================================================================*/

  /**
  * Adds the meta box below the post content editor on the post edit dashboard.
  * 
  * @since    0.1.0
  */
  function add_note_metabox() {

    add_meta_box(
      'WP_Notes_item_content',
      __( 'Note Content', 'wp-notes-widget' ),
      array( $this, 'WP_Notes_meta_display' ),
      'nw-item',
      'normal',
      'high'
    );

    add_meta_box(
      'WP_Notes_item_twitter',
      __( 'Auto Twitter Post', 'wp-notes-widget' ),
      array( $this, 'WP_Notes_twitter_post_display' ),
      'nw-item',
      'side',
      'high'
    );

  }


  /**
   * meta_box for Tweet related fields.
   *
   * @since    0.2.0
   */
  function WP_Notes_twitter_post_display( $post ) {
    
    $twitter_credentials = get_option( 'wp_notes_widget_twitter_credentials' );  

    if (!empty($twitter_credentials['api_key']) && 
      !empty($twitter_credentials['api_secret']) && 
      !empty($twitter_credentials['token']) && 
      !empty($twitter_credentials['token_secret']) ) { 
      //if Twitter API credentials are set

      if ( get_transient('twit_url_short') && get_transient('twit_url_short_s') ) {
        //check to see if cached copy of url lengths are still valid

        $twitter_url_short_length       = get_transient('twit_url_short');
        $twitter_url_short_length_https = get_transient('twit_url_short_s');  
      
      } else {
        //if cached copy of url lengths are too old, we need to contact twitter and get these values again


        /*==========  LOAD AND SET UP TWITTER API LIBRARY  ==========*/

        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/codebird/src/codebird.php';
        
        $twitter_credentials['api_key'] = trim($twitter_credentials['api_key']);
        $twitter_credentials['api_secret'] =  trim($twitter_credentials['api_secret']);
        $twitter_credentials['token'] = trim($twitter_credentials['token']); 
        $twitter_credentials['token_secret'] = trim($twitter_credentials['token_secret']);

        WP_Notes_Widget_Codebird::setConsumerKey($twitter_credentials['api_key'], $twitter_credentials['api_secret']); // static, see 'Using multiple Codebird instances'
        $cb = WP_Notes_Widget_Codebird::getInstance();
        $cb->setToken($twitter_credentials['token'], $twitter_credentials['token_secret']);

        $reply = $cb->help_configuration();
        
        $twitter_url_short_length       = !empty($reply->short_url_length) ? $reply->short_url_length : 22;
        $twitter_url_short_length_https = !empty($reply->short_url_length_https) ? $reply->short_url_length_https : 23;        

        set_transient( 'twit_url_short', $twitter_url_short_length,  (60 * 60 * 24) );
        set_transient( 'twit_url_short_s', $twitter_url_short_length_https,  (60 * 60 * 24) );

      }

      include( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/wp-notes-post-data.php' );
      
      $wp_notes_twitter_data   = getNotePostTwitterData( $post->ID);
      $wp_notes_tweet_history = getNotePostTweetHistory( $post->ID);
      
      ob_start();
      include( plugin_dir_path( dirname( __FILE__ ) ) . 'admin/admin-post-twitter-view.php' );
      $html = ob_get_clean();
      echo $html;

    } else {

      include( plugin_dir_path( dirname( __FILE__ ) ) . 'admin/admin-post-twitter-no-credentials-view.php' );

    }
  }


  /**
   * Renders the nonce, textarea, and text inputs for the note.
   *
   * @since   0.1.0
   * @param    $post   current post object 
   */
  function WP_Notes_meta_display( $post ) {
    
    include( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/wp-notes-post-data.php' );
    
    $wp_notes_data = getNotePostData( $post->ID);

    function WP_Notes_get_hidden_class_output($action_link_type,  $link_type ) {
      
      switch ($link_type) {
        case 'plain':
          if ( $action_link_type == 'download') {
            echo 'wp-notes-hidden';
          }
           break;
          case 'download':
            if ( (!(bool)$action_link_type) || $action_link_type == 'plain') {
              echo 'wp-notes-hidden';
          }
          break;
      }
    }

    function WP_Notes_get_selected_output($action_link_type, $link_type ) {
      switch ($link_type) {
        case 'plain':
          if ( (!(bool)$action_link_type) || $action_link_type == 'plain') {
            echo 'checked';
          }
             break;
          case 'download':
            if ( $action_link_type == 'download') {
              echo 'checked';
          }
            break;
      }
    }

    wp_nonce_field( plugin_basename( __FILE__ ), 'WP_Notes_nonce' );
    ob_start();
    include( plugin_dir_path( dirname( __FILE__ ) ) . 'admin/admin-post-view.php' );
    $html = ob_get_clean();
    echo $html;

  } // end WP_Notes_meta_display



  /*============================================================================
    SAVE NOTE ACTIONS
  ==============================================================================*/

   /**
   * Saves the note for the given post.
   *
   * @since    0.1.0
   * @param  $post_id  The ID of the post that we're serializing
   */
  function save_note( $post_id ) {

    if( isset( $_POST['WP_Notes_nonce'] ) && isset( $_POST['post_type'] ) ) {

      // Don't save if the user hasn't submitted the changes
      if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
      } 

      // Verify that the input is coming from the proper form
      if( ! wp_verify_nonce( $_POST['WP_Notes_nonce'], plugin_basename( __FILE__ ) ) ) {
        return;
      } 

      // Make sure the user has permissions to post
      if( 'nw-item' == $_POST['post_type']) {
        if( ! current_user_can( 'edit_post', $post_id ) ) {
          return;
        } 
      } 

    
      /*==========  SAVE NOTE META DATA  ==========*/

      //sanitize all of the POST data and place it into an array. 
      $wp_notes_data = array();
      $wp_notes_data['text']                 = isset( $_POST['WP_Notes_text'] ) ?  implode( "\n", array_map( 'sanitize_text_field', explode( "\n", $_POST['WP_Notes_text'] ) ))  : '';
      //the filter for this text only allows for newline characters as well as regular characters

      $wp_notes_data['action_text']         = isset( $_POST['WP_Notes_action_text'] )           ? sanitize_text_field($_POST['WP_Notes_action_text']) : '';
      $wp_notes_data['action_link']         = isset( $_POST['WP_Notes_action_link'])            ? wpnw_addhttp( sanitize_text_field($_POST['WP_Notes_action_link'])) : '';
      $wp_notes_data['image_id']            = isset( $_POST['WP_Notes_image_id'] )              ? sanitize_text_field($_POST['WP_Notes_image_id']) : '';
      $wp_notes_data['download_id']         = isset( $_POST['WP_Notes_download_id'] )           ? sanitize_text_field($_POST['WP_Notes_download_id']) : '';
      $wp_notes_data['plain_link_new_tab']  = isset( $_POST['WP_Notes_plain_link_new_tab'] )    ? sanitize_text_field($_POST['WP_Notes_plain_link_new_tab']) : '';
      $wp_notes_data['action_link_type']    = isset( $_POST['WP_Notes_action_link_type'] )      ? sanitize_text_field($_POST['WP_Notes_action_link_type']) : '';
      
      //Wordpress automatically serializes the data and updates database with the new values.
      update_post_meta( $post_id, 'WP_Notes_data', $wp_notes_data );
      


      /*==========  PARSE AND SAVE TWITTER RELATED DATA  ==========*/
      
      $push_tweet = 0;
      if (isset($_POST['WP_Notes_push_tweet'])) {
        $push_tweet = 1;
      }

      $wp_notes_twitter_data['push_tweet']       = null; //set this value to null so user will have to manually check the checkbox again if they want to send another tweet
      $wp_notes_twitter_data['tweet_body']       = isset( $_POST['WP_Notes_tweet_body'] )     ? sanitize_text_field($_POST['WP_Notes_tweet_body']) : '';
      
      //Wordpress automatically serializes the data and updates database with the new values.
      update_post_meta( $post_id, 'WP_Notes_twitter_data', $wp_notes_twitter_data );



      /*==========  TWITTER POSTING  ==========*/
      
      if ($push_tweet) {
        
        $twitter_credentials = get_option( 'wp_notes_widget_twitter_credentials' );  
        if (!empty($twitter_credentials['api_key']) && 
          !empty($twitter_credentials['api_secret']) && 
          !empty($twitter_credentials['token']) && 
          !empty($twitter_credentials['token_secret']) ) { 
          //if Twitter credentials are set

          //clean up potential whitespace. 
          $twitter_credentials['api_key']       = trim($twitter_credentials['api_key']);
          $twitter_credentials['api_secret']    = trim($twitter_credentials['api_secret']);
          $twitter_credentials['token']         = trim($twitter_credentials['token']);
          $twitter_credentials['token_secret']  = trim($twitter_credentials['token_secret']);

          require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/codebird/src/codebird.php';
          
          WP_Notes_Widget_Codebird::setConsumerKey($twitter_credentials['api_key'], $twitter_credentials['api_secret']); // static, see 'Using multiple Codebird instances'
          $cb = WP_Notes_Widget_Codebird::getInstance();
          $cb->setToken($twitter_credentials['token'], $twitter_credentials['token_secret']);

          //parse status content and embed link, if needed
          switch ($wp_notes_data['action_link_type']) {
            case "plain":
              $embed_link = $wp_notes_data['action_link'];

              break;
            case "download":

              if ((bool)$wp_notes_data['download_id']) {
                $embed_link = wp_get_attachment_url( $wp_notes_data['download_id'] );
              } else {
                $embed_link = '';  
              }

              break;
            default:
              $embed_link = '';

              break;
            
          }

          $tweet_text =str_replace("*url*", $embed_link, $wp_notes_twitter_data['tweet_body']);
           
          //send the tweet to twitter
          if (empty($wp_notes_data['image_id'] )) {
            $reply = $cb->statuses_update('status=' . $tweet_text);
          
          } else {
            
            $file = wp_get_attachment_image_src( $wp_notes_data['image_id'], array(600,600) );
            $file = $file[0];
            $reply = $cb->media_upload(array(
                'media' => $file
            ));

            $media_id = $reply->media_id_string;
            $reply = $cb->statuses_update(array(
                'status' => $tweet_text,
                'media_ids' => $media_id
            ));

          }

          //set up appropriate notice based on twitter response
          $status_class = substr($reply->httpstatus,0, 1); 
          switch ($status_class) {
            case "2":

              $wp_notes_tweet_history = get_post_meta( $post_id, 'WP_Notes_tweet_history', true );
              
              //if tweet is sent successfully, we add a timestamp to the tweet history
              if (empty($wp_notes_tweet_history)) {
                $wp_notes_tweet_history = array();
              }
              array_push($wp_notes_tweet_history, current_time('timestamp') );
              update_post_meta( $post_id, 'WP_Notes_tweet_history', $wp_notes_tweet_history );

              add_filter( 'redirect_post_location', array( $this, 'add_notice_twitter_success' ), 99 );
              break;
            case "4":
              add_filter( 'redirect_post_location', array( $this, 'add_notice_twitter_error' ), 99 );
              break;
            case "5":
              add_filter( 'redirect_post_location', array( $this, 'add_notice_twitter_down' ), 99 );
              break;
            
          }
        }
      }
    } // end if

  } // end save_note



  /*============================================================================
    ADMIN NOTICES FROM TWITTER POST RESPONSE
  ==============================================================================*/

  public function add_notice_twitter_success( $location ) {
     remove_filter( 'redirect_post_location', array( $this, 'add_notice_twitter_success' ), 99 );
     return add_query_arg( array( 'twitter_update_status' => '2' ), $location );
  }

  public function add_notice_twitter_error( $location ) {
     remove_filter( 'redirect_post_location', array( $this, 'add_notice_twitter_error' ), 99 );
     return add_query_arg( array( 'twitter_update_status' => '4' ), $location );
  }

  public function add_notice_twitter_down( $location ) {
     remove_filter( 'redirect_post_location', array( $this, 'add_notice_twitter_down' ), 99 );
     return add_query_arg( array( 'twitter_update_status' => '5' ), $location );
  }

  public function twitter_admin_notices() {
     if ( ! isset( $_GET['twitter_update_status'] ) ) {
       return;
     } else {

       switch ($_GET['twitter_update_status']) {
        case "2":
          ?>
           <div class="updated">
            <p><?php _e('Tweet successfully posted.', 'wp-notes-widget') ?></p>
           </div>

          <?php
          break;
        case "4":
          ?>
           <div class="error">
            <p><?php _e('There was an error posting your Tweet. Check your configuration and ensure your Tweet is not a recent duplicate, and does not exceed 140 characters.', 'wp-notes-widget') ?></p>
           </div>

          <?php
          break;
        case "5":
           ?>
           <div class="error">
            <p><?php _e('Twitter is currently experiencing technical difficulties and your Tweet cannot be sent right now. Please try again later.', 'wp-notes-widget') ?></p>
           </div>

           <?php
          break;
        
      }
     }
  }



  /*============================================================================
    SETTINGS PAGE
  ==============================================================================*/

  function wp_notes_add_settings_page() {
 
    add_submenu_page(
      'options-general.php',
      'WP Notes Widget Settings',                          // The title to be displayed in the browser window for this page.
      'WP Notes Widget Settings',                          // The text to be displayed for this menu item
      'manage_options',                                    // Which type of users can see this menu item
      'wp-notes-widget-settings',                         // The unique ID - that is, the slug - for this menu item
       array( $this, 'wp_notes_widget_settings_display')  // The name of the function to call when rendering this menu's page
    );
   
  } 
 
  //render page for our Twitter API credentials
  function wp_notes_widget_settings_display() {
  ?>
    <!-- Create a header in the default WordPress 'wrap' container -->
    <div class="wrap">
     
      <div id="icon-themes" class="icon32"></div>
      <h2><?php _e('WP Notes Widget Settings','wp-notes-widget'); ?></h2>
      
      <form method="post" action="options.php">
        <?php settings_fields( 'wp_notes_widget_twitter_credentials_page' ); ?>
        <?php do_settings_sections( 'wp_notes_widget_twitter_credentials_page' ); ?>         
        <?php submit_button(); ?>
      </form>
         
    </div><!-- /.wrap -->
  <?php
  } 
 
  function wp_notes_initialize_settings() {
   
    function wp_notes_widget_twitter_credentials_callback(  ) { 
      ?>
      
      <p class="wp-notes-widget-limit-width" >
        <?php _e( 'Enter the credentials from the Twitter application you have set up. You can set up a new application on the 
          <a href="https://apps.twitter.com" target="_blank" >Twitter Application Management</a> 
          page. You will need these credentials in order to automatically post your Notes to your Twitter account. 
          Be sure to allow for read <strong>and write</strong> privileges. 
          ', 'wp-notes-widget' ); ?>
      </p>

      <?php
    }
   
    function wp_notes_widget_twitter_key_callback(  ) { 

      $options = get_option( 'wp_notes_widget_twitter_credentials' );  
      if (!isset($options['api_key'])){
        $options['api_key'] = '';
      }
      ?>
        <input type='text' name='wp_notes_widget_twitter_credentials[api_key]' value='<?php echo $options['api_key']; ?>' class="wp-notes-widget-long" >
      <?php
    }

    function wp_notes_widget_twitter_secret_callback(  ) { 

      $options = get_option( 'wp_notes_widget_twitter_credentials' );
      if (!isset($options['api_secret'])){
        $options['api_secret'] = '';
      }
      ?>
        <input type='text' name='wp_notes_widget_twitter_credentials[api_secret]' value='<?php echo $options['api_secret']; ?>' class="wp-notes-widget-long" >
      <?php
    }


    function wp_notes_widget_twitter_token_callback(  ) { 

      $options = get_option( 'wp_notes_widget_twitter_credentials' );
      if (!isset($options['token'])){
        $options['token'] = '';
      }
      ?>
        <input type='text' name='wp_notes_widget_twitter_credentials[token]' value='<?php echo $options['token']; ?>' class="wp-notes-widget-long" >
      <?php
    }

    function wp_notes_widget_twitter_token_secret_callback(  ) { 

      $options = get_option( 'wp_notes_widget_twitter_credentials' );
      if (!isset($options['token_secret'])){
        $options['token_secret'] = '';
      }
      ?>
        <input type='text' name='wp_notes_widget_twitter_credentials[token_secret]' value='<?php echo $options['token_secret']; ?>' class="wp-notes-widget-long" >
      <?php
    }


    // If the credential options don't exist, create them.
    if( false == get_option( 'wp_notes_widget_twitter_credentials' ) ) {  
      add_option( 'wp_notes_widget_twitter_credentials' );
    } // end if


    // First, we register a section. 
    add_settings_section(
      'wp_notes_widget_twitter_credentials',             // ID used to identify this section and with which to register options
      'Twitter API Credentials',                        // Title to be displayed on the administration page
      'wp_notes_widget_twitter_credentials_callback',   // Callback used to render the description of the section
      'wp_notes_widget_twitter_credentials_page'         // Page on which to add this section of options
    );
    

    // Add fields to our section
    add_settings_field( 
      'wp_notes_widget_twitter_key',                // ID used to identify the field throughout the theme
      'API Key',                                     // The label to the left of the option interface element
      'wp_notes_widget_twitter_key_callback',       // The name of the function responsible for rendering the option interface
      'wp_notes_widget_twitter_credentials_page',   // The page on which this option will be displayed
      'wp_notes_widget_twitter_credentials'         // The name of the section to which this field belongs      
    );
    
    add_settings_field( 
      'wp_notes_widget_twitter_secret',                     
      'API Secret',              
      'wp_notes_widget_twitter_secret_callback',  
      'wp_notes_widget_twitter_credentials_page',                    
      'wp_notes_widget_twitter_credentials'               
    );

    add_settings_field( 
      'wp_notes_widget_twitter_token',                     
      'Access Token',              
      'wp_notes_widget_twitter_token_callback',  
      'wp_notes_widget_twitter_credentials_page',                    
      'wp_notes_widget_twitter_credentials'               
    );

    add_settings_field( 
      'wp_notes_widget_twitter_token_secret',                     
      'Token Secret',              
      'wp_notes_widget_twitter_token_secret_callback',  
      'wp_notes_widget_twitter_credentials_page',                    
      'wp_notes_widget_twitter_credentials'               
    );   
     
    // Finally, we register the fields with WordPress
    register_setting(
      'wp_notes_widget_twitter_credentials_page',
      'wp_notes_widget_twitter_credentials'
    );
       
  } //end wp_notes_initialize_settings


 
  /*============================================================================
    FEEDBACK ADMIN NOTICE
  ==============================================================================*/

  /**
  * Create the notice that will ask users for feedback. 
  * 
  * @since 0.1.4
  */
  function add_feedback_notice() {
    global $current_user;
    $userid = $current_user->ID;

    if ( !get_user_meta( $userid, 'dismiss_wp_notes_widget_notice' )  ) {
      echo '
        <div class="updated">
          <p>Thanks for downloading/updating WP Notes Widget!
          What features would you like to see? 
          Let us know on the <a href="https://wordpress.org/support/plugin/wp-notes-widget" target="_blank" >support forums</a> or <a href="https://twitter.com/webrockstar_net" target="_blank" >Twitter</a>. <a href="?dismiss_wp_notes_widget_notice=yes" class="button-primary" >Dismiss</a></p>
        </div>';
    } 

  } // end add_feedback_notice


  /**
  * To ensure the notice is not displayed after it is dismissed, a flag is set in the metadata for the user.
  * 
  * @since 0.1.4
  */
  function dismiss_feedback_notice() {
    
    global $current_user;
    $userid = $current_user->ID;
    
    // If "Dismiss" link has been clicked, user meta field is added
    if ( isset( $_GET['dismiss_wp_notes_widget_notice'] ) && 'yes' == $_GET['dismiss_wp_notes_widget_notice'] ) {
      add_user_meta( $userid, 'dismiss_wp_notes_widget_notice', 'yes', true );
    }

  } // end dismiss_feedback_notice


  /**
   * Register the stylesheets for the Dashboard.
   *
   * @since    0.1.0
   */
  public function enqueue_styles() {

    /**
     *
     * An instance of this class should be passed to the run() function
     * defined in WP_Notes_Admin_Loader as all of the hooks are defined
     * in that particular class.
     *
     * The WP_Notes_Admin_Loader will then create the relationship
     * between the defined hooks and the functions defined in this
     * class.
     */

    wp_enqueue_style( $this->name, plugin_dir_url( __FILE__ ) . 'css/wp-notes-admin.css', array(), $this->version, 'all' );
  }


  /**
   * Register the JavaScript for the dashboard.
   *
   * @since    0.1.0
   */
  public function enqueue_scripts() {

    /**
     *
     * An instance of this class should be passed to the run() function
     * defined in WP_Notes_Admin_Loader as all of the hooks are defined
     * in that particular class.
     *
     * The WP_Notes_Admin_Loader will then create the relationship
     * between the defined hooks and the functions defined in this
     * class.
     *
     * Need to evaluate best approach for enqueing js/css files needed to select media.
     * wp_enqueue_media() works, but it breaks the consistency of how hooks are queued in the plugin. 
     */
    
    wp_enqueue_media();  
    wp_enqueue_script( $this->name, plugin_dir_url( __FILE__ ) . 'js/wp-notes-admin.js', array( 'jquery' ), $this->version, false );

  }
}

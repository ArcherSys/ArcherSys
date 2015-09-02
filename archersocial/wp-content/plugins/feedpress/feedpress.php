<?php
/*
Plugin Name: FeedPress
Plugin URI: http://feedpress.it
Description: Redirects all feeds to a FeedPress feed and enables realtime feed updates.
Author: FeedPress
Author URI: https://feedpress.it
Version: 1.6.2
*/

define('FEEDPRESS_TEXTDOMAIN', 'feedpress');

if (function_exists('load_plugin_textdomain')) {
	load_plugin_textdomain(FEEDPRESS_TEXTDOMAIN, false, dirname(plugin_basename(__FILE__)).'/languages' );
}

add_action('admin_menu', 'feedpress_config_page');

function feedpress_config_page() {

	if (function_exists('add_submenu_page')) {

        add_submenu_page('options-general.php',
            __('FeedPress', FEEDPRESS_TEXTDOMAIN),
            __('FeedPress', FEEDPRESS_TEXTDOMAIN),
            'manage_options', __FILE__, 'feedpress_conf');

    }

}

function feedpress_urlcompliant($nompage, $lowercase=true) {

    $a = array('À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú','Û','Ü','Ý','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ý','ÿ','A','a','A','a','A','a','C','c','C','c','C','c','C','c','D','d','Ð','d','E','e','E','e','E','e','E','e','E','e','G','g','G','g','G','g','G','g','H','h','H','h','I','i','I','i','I','i','I','i','I','i','','','J','j','K','k','L','l','L','l','L','l','','','L','l','N','n','N','n','N','n','','O','o','O','o','O','o','Œ','œ','R','r','R','r','R','r','S','s','S','s','S','s','Š','š','T','t','T','t','T','t','U','u','U','u','U','u','U','u','U','u','U','u','W','w','Y','y','Ÿ','Z','z','Z','z','Ž','ž','','ƒ','O','o','U','u','A','a','I','i','O','o','U','u','U','u','U','u','U','u','U','u','','','','','','','€','@','Š','¡');

    $b = array('A','A','A','A','A','A','AE','C','E','E','E','E','I','I','I','I','D','N','O','O','O','O','O','O','U','U','U','U','Y','s','a','a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','u','y','y','A','a','A','a','A','a','C','c','C','c','C','c','C','c','D','d','D','d','E','e','E','e','E','e','E','e','E','e','G','g','G','g','G','g','G','g','H','h','H','h','I','i','I','i','I','i','I','i','I','i','IJ','ij','J','j','K','k','L','l','L','l','L','l','L','l','l','l','N','n','N','n','N','n','n','O','o','O','o','O','o','OE','oe','R','r','R','r','R','r','S','s','S','s','S','s','S','s','T','t','T','t','T','t','U','u','U','u','U','u','U','u','U','u','U','u','W','w','Y','y','Y','Z','z','Z','z','Z','z','s','f','O','o','U','u','A','a','I','i','O','o','U','u','U','u','U','u','U','u','U','u','A','a','AE','ae','O','o','e','a','s','i');

    $string = preg_replace(array('/[^a-zA-Z0-9 -]/','/[ -]+/','/^-|-$/'),array('','-',''),str_replace($a,$b,$nompage));

    if ($lowercase) {
        $string = strtolower($string);
    }

    return $string;

}

function feedpress_locale() {

    $langs = explode(';', $_SERVER['HTTP_ACCEPT_LANGUAGE']);

    $locale = 'en';

    foreach ($langs as $lang) {

        if (preg_match('/fr/', $lang)) {

            $locale = 'fr';
            break;

        }

    }

    return $locale;

}

function feedpress_api_call($url, $params = array(), $type='GET') {

    $options = get_option('feedpress');
    $json = array();

    $url .= '.json';

    $params['key'] = '50d45a6bef51d';
    $params['token'] = $options['feedpress_token'];

    $request = new WP_Http;

    if ($type == 'GET') {

        $qs = http_build_query($params, '', '&');

        $result = $request->request('http://api.feedpress.it/'.$url.'?'.$qs);

        if (is_array($result) && isset($result['response']['code']) && $result['response']['code'] == 200) {

            $json = json_decode($result['body']);

        }

    } elseif ($type == 'POST') {

        $result = $request->request('http://api.feedpress.it/'.$url, array(
                'method' => 'POST',
                'body' => $params
            )
        );

        if (is_array($result) && isset($result['response']['code']) && $result['response']['code'] == 200) {

            $json = json_decode($result['body']);

        }

    }

    return $json;

}

function feedpress_conf() {

    $options = feedpress_get_options();

	$updated = false;

    if (isset($_GET['token'])) {

        $options['feedpress_token'] = ($_GET['token'] == 'reset') ? null : $_GET['token'];

        if ($_GET['token'] == 'reset') {

            $options['feedpress_token'] = null;
            $options['feedpress_feed_id'] = null;
            $options['feedpress_feed_url'] = null;
            $options['feedpress_comment_id'] = null;
            $options['feedpress_comment_url'] = null;
            $options['feedpress_no_redirect'] = 0;
            $options['feedpress_no_cats'] = 0;
            $options['feedpress_no_search'] = 0;
            $options['feedpress_no_author'] = 0;
            $options['feedpress_no_ping'] = 0;
            $options['feedpress_transparent'] = 0;
            $options['feedpress_debug'] = 0;

        }

        update_option('feedpress', $options);

        $updated = true;

    }

    if (isset($_GET['delete']) && (isset($_GET['slug']) || isset($_GET['path']))) {

        if ($_GET['delete'] == 'cat') {

            unset($options['feedpress_cat'][$_GET['slug']]);

        } elseif ($_GET['delete'] == 'tag') {

            unset($options['feedpress_tag'][$_GET['slug']]);

        } elseif ($_GET['delete'] == 'url') {

            unset($options['feedpress_url'][$_GET['path']]);

        }

        update_option('feedpress', $options);

        $updated = true;

    }

	if (isset($_POST['submit'])) {

		check_admin_referer('feedpress', 'feedpress-admin');

		if (isset($_POST['feedpress_feed_url'])) {
			$feedpress_feed_url = $_POST['feedpress_feed_url'];
			$feedpress_id = $options['feedpress_feeds'][$_POST['feedpress_feed_url']];
		} else {
            $feedpress_feed_url = null;
            $feedpress_id = null;
		}

		if (isset($_POST['feedpress_comment_url'])) {
			$feedpress_comment_url = $_POST['feedpress_comment_url'];
            $feedpress_comment_id = $options['feedpress_feeds'][$_POST['feedpress_comment_url']];
		} else {
            $feedpress_comment_url = null;
            $feedpress_comment_id = null;
		}

        if (isset($_POST['feedpress_no_redirect'])) {
            $feedpress_no_redirect = $_POST['feedpress_no_redirect'];
        } else {
            $feedpress_no_redirect = 0;
        }

		if (isset($_POST['feedpress_no_cats'])) {
            $feedpress_no_cats = $_POST['feedpress_no_cats'];
		} else {
            $feedpress_no_cats = 0;
		}

		if (isset($_POST['feedpress_no_search'])) {
            $feedpress_no_search = $_POST['feedpress_no_search'];
		} else {
            $feedpress_no_search = 0;
		}

		if (isset($_POST['feedpress_no_author'])) {
            $feedpress_no_author = $_POST['feedpress_no_author'];
		} else {
            $feedpress_no_author = 0;
		}

        if (isset($_POST['feedpress_debug'])) {
            $feedpress_debug = $_POST['feedpress_debug'];
        } else {
            $feedpress_debug = 0;
        }

        if (isset($_POST['feedpress_transparent'])) {
            $feedpress_transparent = $_POST['feedpress_transparent'];
        } else {
            $feedpress_transparent = 0;
        }

        if (isset($_POST['feedpress_cat_slug'])) {

            $feedpress_cat = array();

            foreach ($_POST['feedpress_cat_slug'] as $i => $slug) {

                if (!empty($_POST['feedpress_cat_url'][$i])) {
                    $feedpress_cat[$slug] = $_POST['feedpress_cat_url'][$i];
                }

            }

        } else {
            $feedpress_cat = array();
        }

        if (isset($_POST['feedpress_tag_slug'])) {

            $feedpress_tag = array();

            foreach ($_POST['feedpress_tag_slug'] as $i => $slug) {

                if (!empty($_POST['feedpress_tag_url'][$i])) {
                    $feedpress_tag[$slug] = $_POST['feedpress_tag_url'][$i];
                }

            }

        } else {
            $feedpress_tag = array();
        }

        if (isset($_POST['feedpress_url_path'])) {

            $feedpress_url = array();

            foreach ($_POST['feedpress_url_path'] as $i => $path) {

                if (!empty($_POST['feedpress_url_url'][$i])) {
                    $feedpress_url[strtolower($path)] = $_POST['feedpress_url_url'][$i];
                }

            }

        } else {
            $feedpress_url = array();
        }

		$options['feedpress_feed_url'] = $feedpress_feed_url;
        $options['feedpress_feed_id'] = $feedpress_id;
		$options['feedpress_comment_url'] = $feedpress_comment_url;
        $options['feedpress_comment_id'] = $feedpress_comment_id;
		$options['feedpress_append_cats'] = 0;
        $options['feedpress_no_redirect'] = $feedpress_no_redirect;
		$options['feedpress_no_cats'] = $feedpress_no_cats;
		$options['feedpress_no_search'] = $feedpress_no_search;
		$options['feedpress_no_author'] = $feedpress_no_author;
        $options['feedpress_debug'] = $feedpress_debug;
        $options['feedpress_transparent'] = $feedpress_transparent;
        $options['feedpress_cat'] = $feedpress_cat;
        $options['feedpress_tag'] = $feedpress_tag;
        $options['feedpress_url'] = $feedpress_url;

		update_option('feedpress', $options);

		$updated = true;

	} elseif (isset($_POST['create'])) {

        $json = feedpress_api_call('feeds/create', array('url' => $_POST['feedpress_url'], 'alias' => $_POST['feedpress_alias'], 'locale' => feedpress_locale()), 'POST');

        if (is_array($json->errors) && count($json->errors)) {

            echo '<div id="message" class="error"><p>';
            _e('There was something wrong with the feed creation:', FEEDPRESS_TEXTDOMAIN);
            echo ' '.$json->errors[0];
            echo "</p></div>";

        } else {

            $options['feedpress_feed_id'] = $_POST['feedpress_alias'];
            $options['feedpress_feed_url'] = 'http://feedpress.me/'.$_POST['feedpress_alias'];

            update_option('feedpress', $options);

            $updated = true;

        }

    }

    echo '<div class="wrap">';

    if ($updated) {

        echo '<div id="message" class="updated fade"><p>';
        _e('Configuration updated.', FEEDPRESS_TEXTDOMAIN);
        echo '</p></div>';

    }

    if ($options['feedpress_token']) {

        $json = feedpress_api_call('account');

        if (isset($json->errors) && is_array($json->errors) && count($json->errors)) {

            echo '<div id="message" class="error"><p>';
            _e('There was something wrong with your FeedPress authentication. Please retry.', FEEDPRESS_TEXTDOMAIN);
            echo "</p></div>";

            $options['feedpress_token'] = null;
            $options['feedpress_feed_url'] = null;
            $options['feedpress_feed_id'] = null;
            $options['feedpress_comment_url'] = null;
            $options['feedpress_comment_id'] = null;

            update_option('feedpress', $options);

        }

    }

    echo '<div id="form-conf"';

    if ((is_array($json->feeds) && count($json->feeds) == 0)) {
        echo ' style="display: none;"';
    }

    echo '>';

    echo '<h2>'.__('FeedPress Configuration', FEEDPRESS_TEXTDOMAIN).'</h2>';

    echo '<div style="float: right; width: 350px">';

    echo '<h3>'.__('How does this work?', FEEDPRESS_TEXTDOMAIN).'</h3>';
    echo '<p>'.__('This plugin automatically redirects all or parts of your existing feeds to FeedPress.', FEEDPRESS_TEXTDOMAIN).'</p>';
    echo '<p>'.__('You just have to connect to FeedPress on this page. You will now be able to create and select the feeds you want to redirect to. You may optionally redirect your comments feed using the same procedure.', FEEDPRESS_TEXTDOMAIN).'</p>';
    echo '<p>'.__('Once you enter URLs your feeds will be redirected automatically and you do not need to take any further action.', FEEDPRESS_TEXTDOMAIN).'</p>';
    echo '<p>'.__('Additionally, when you publish a new article on your blog, FeedPress will be pinged by the plugin and your feed will be updated in realtime.', FEEDPRESS_TEXTDOMAIN).'</p>';

    echo '</div>';

    if (empty($options['feedpress_token'])) {

        echo '<p><a href="http://api.feedpress.it/login.json?key=50d45a6bef51d&callback='.admin_url('options-general.php?page=feedpress/feedpress.php').'">'.__('Connect to FeedPress', FEEDPRESS_TEXTDOMAIN).'</a></p>';

    } else {

        echo '<p>'.__('You are authenticated on FeedPress with the username:', FEEDPRESS_TEXTDOMAIN).' '.$json->login.'</p>';
        echo '<p><a href="'.admin_url('options-general.php?page=feedpress/feedpress.php').'&token=reset">'.__('Disconnect from FeedPress', FEEDPRESS_TEXTDOMAIN).'</a></p>';

        echo '<h2>'.__('Main feeds', FEEDPRESS_TEXTDOMAIN).'</h2>';

        echo '<form action="'.admin_url('options-general.php?page=feedpress/feedpress.php').'" method="post" id="feedpress-conf">';

        echo '<h3><label for="feedpress_feed_url">'.__('Redirect my feeds here:', FEEDPRESS_TEXTDOMAIN).'</label></h3>';
        echo '<p><select id="feedpress_feed_url" name="feedpress_feed_url" style="width: 400px;" />';

        echo '<option value=""';
        if (empty($options['feedpress_token'])) echo ' SELECTED';
        echo '>'.__('None', FEEDPRESS_TEXTDOMAIN).'</option>';

	    $feedsData = array();

        if (is_array($json->feeds)) {

            foreach ($json->feeds as $feed) {

                echo '<option value="'.$feed->url.'"';
                if ($options['feedpress_feed_id'] == $feed->name) echo ' SELECTED';
                echo '>'.$feed->url.'</option>';

	            $feedsData[$feed->url] = $feed->name;

            }

        }

        echo '</select></p>';

        echo '<p><a href="javascript:;" onclick="document.getElementById(\'form-create\').style.display=\'block\';document.getElementById(\'form-conf\').style.display=\'none\';">'.__('Create a new feed on FeedPress', FEEDPRESS_TEXTDOMAIN).' &raquo;</a></p>';

        echo '<h3><label for="feedpress_comment_url">'.__('Redirect my comments feed here:', FEEDPRESS_TEXTDOMAIN).'</label></h3>';
        echo '<p><select id="feedpress_comment_url" name="feedpress_comment_url" style="width: 400px;" />';

        echo '<option value=""';
        if (empty($options['feedpress_token'])) echo ' SELECTED';
        echo '>'.__('None', FEEDPRESS_TEXTDOMAIN).'</option>';

        if (is_array($json->feeds)) {

            foreach ($json->feeds as $feed) {

                echo '<option value="'.$feed->url.'"';
                if ($options['feedpress_comment_id'] == $feed->name) echo ' SELECTED';
                echo '>'.$feed->url.'</option>';

            }

        }

        echo '</select></p>';

        echo '<p><a href="javascript:;" onclick="document.getElementById(\'form-create\').style.display=\'block\';document.getElementById(\'form-conf\').style.display=\'none\';">'.__('Create a new feed on FeedPress', FEEDPRESS_TEXTDOMAIN).' &raquo;</a></p>';

        echo '<h2>'.__('Category feeds', FEEDPRESS_TEXTDOMAIN).'</h2>';

        foreach ($options['feedpress_cat'] as $slug => $url) {

            echo '<h3>'.__('Category:', FEEDPRESS_TEXTDOMAIN).' '.$slug.'</h3>';
            echo '<p>&rarr; '.$url.' — <a href="'.admin_url('options-general.php?page=feedpress/feedpress.php').'&delete=cat&slug='.$slug.'">'.__('Delete', FEEDPRESS_TEXTDOMAIN).'</a></p>';

            echo '<input type="hidden" name="feedpress_cat_slug[]" value="'.$slug.'">';
            echo '<input type="hidden" name="feedpress_cat_url[]" value="'.$url.'">';

        }

        echo '<div id="feedpress_cat_form" style="display: none;"><h3>'.__('Redirect a category', FEEDPRESS_TEXTDOMAIN).'</h3>';

        $categories = get_categories();

        echo '<p>'.__('Category:', FEEDPRESS_TEXTDOMAIN).' <select name="feedpress_cat_slug[]">';

        foreach ($categories as $category) {

            if (!isset($options['feedpress_cat'][$category->slug])) {

                echo '<option value="'.$category->slug.'">'.$category->name.' ('.$category->slug.')</option>';

            }

        }

        echo '</select></p>';

        echo '<p><select name="feedpress_cat_url[]" style="width: 400px;" />';

        echo '<option value="">'.__('None', FEEDPRESS_TEXTDOMAIN).'</option>';

        if (is_array($json->feeds)) {

            foreach ($json->feeds as $feed) {

                echo '<option value="'.$feed->url.'">'.$feed->url.'</option>';

            }

        }

        echo '</select></p></div>';

        if (count($categories) > count($options['feedpress_cat'])) {

            echo '<p><input type="button" name="add" onclick="this.parentNode.parentNode.removeChild(this.parentNode);document.getElementById(\'feedpress_cat_form\').style.display=\'block\';" value="'.__('Redirect a category', FEEDPRESS_TEXTDOMAIN).' &raquo;" /></p>';

        }

        echo '<h2>'.__('Tag feeds', FEEDPRESS_TEXTDOMAIN).'</h2>';

        foreach ($options['feedpress_tag'] as $slug => $url) {

            echo '<h3>'.__('Tag:', FEEDPRESS_TEXTDOMAIN).' '.$slug.'</h3>';
            echo '<p>&rarr; '.$url.' — <a href="'.admin_url('options-general.php?page=feedpress/feedpress.php').'&delete=tag&slug='.$slug.'">'.__('Delete', FEEDPRESS_TEXTDOMAIN).'</a></p>';

            echo '<input type="hidden" name="feedpress_tag_slug[]" value="'.$slug.'">';
            echo '<input type="hidden" name="feedpress_tag_url[]" value="'.$url.'">';

        }

        echo '<div id="feedpress_tag_form" style="display: none;"><h3>'.__('Redirect a tag', FEEDPRESS_TEXTDOMAIN).'</h3>';

        $tags = get_tags();

        echo '<p>'.__('Tag:', FEEDPRESS_TEXTDOMAIN).' <select name="feedpress_tag_slug[]">';

        foreach ($tags as $tag) {

            if (!isset($options['feedpress_tag'][$tag->slug])) {

                echo '<option value="'.$tag->slug.'">'.$tag->name.' ('.$tag->slug.')</option>';

            }

        }

        echo '</select></p>';

        echo '<p><select name="feedpress_tag_url[]" style="width: 400px;" />';

        echo '<option value="">'.__('None', FEEDPRESS_TEXTDOMAIN).'</option>';

        if (is_array($json->feeds)) {

            foreach ($json->feeds as $feed) {

                echo '<option value="'.$feed->url.'">'.$feed->url.'</option>';

            }

        }

        echo '</select></p></div>';

        if (count($tags) > count($options['feedpress_tag'])) {

            echo '<p><input type="button" name="add" onclick="this.parentNode.parentNode.removeChild(this.parentNode);document.getElementById(\'feedpress_tag_form\').style.display=\'block\';" value="'.__('Redirect a tag', FEEDPRESS_TEXTDOMAIN).' &raquo;" /></p>';

        }

        echo '<h2>'.__('Custom URL redirection', FEEDPRESS_TEXTDOMAIN).'</h2>';

        foreach ($options['feedpress_url'] as $path => $url) {

            echo '<h3>'.__('Path:', FEEDPRESS_TEXTDOMAIN).' '.$path.'</h3>';
            echo '<p>&rarr; '.$url.' — <a href="'.admin_url('options-general.php?page=feedpress/feedpress.php').'&delete=url&path='.$path.'">'.__('Delete', FEEDPRESS_TEXTDOMAIN).'</a></p>';

            echo '<input type="hidden" name="feedpress_url_path[]" value="'.$path.'">';
            echo '<input type="hidden" name="feedpress_url_url[]" value="'.$url.'">';

        }

        echo '<div id="feedpress_url_form" style="display: none;"><h3>'.__('Redirect a URL', FEEDPRESS_TEXTDOMAIN).'</h3>';

        echo '<p>'.__('If you want to redirect a specific path, fill this simple form.', FEEDPRESS_TEXTDOMAIN).'</p>';

        echo '<p>'.__('Path:', FEEDPRESS_TEXTDOMAIN).' <input type="text" placeholder="'.__('Example: /feed/podcast', FEEDPRESS_TEXTDOMAIN).'" name="feedpress_url_path[]"></p>';

        echo '<p><select name="feedpress_url_url[]" style="width: 400px;" />';

        echo '<option value="">'.__('None', FEEDPRESS_TEXTDOMAIN).'</option>';

        if (is_array($json->feeds)) {

            foreach ($json->feeds as $feed) {

                echo '<option value="'.$feed->url.'">'.$feed->url.'</option>';

            }

        }

        echo '</select></p></div>';

        echo '<p><input type="button" name="add" onclick="this.parentNode.parentNode.removeChild(this.parentNode);document.getElementById(\'feedpress_url_form\').style.display=\'block\';" value="'.__('Redirect a URL', FEEDPRESS_TEXTDOMAIN).' &raquo;" /></p>';

        echo '<h2>'.__('Advanced Options', FEEDPRESS_TEXTDOMAIN).'</h2>';

        echo '<p><input id="feedpress_no_cats" name="feedpress_no_cats" type="checkbox" value="1"';
        if ($options['feedpress_no_cats'] == 1) echo ' checked';
        echo '/> <label for="feedpress_no_cats">'.__('Do not redirect not configured category or tag feeds.', FEEDPRESS_TEXTDOMAIN).'</label></p>';

        echo '<p><input id="feedpress_no_search" name="feedpress_no_search" type="checkbox" value="1"';
        if ($options['feedpress_no_search'] == 1) echo ' checked';
        echo '/> <label for="feedpress_no_search">'.__('Do not redirect search result feeds.', FEEDPRESS_TEXTDOMAIN).'</label></p>';

        echo '<p><input id="feedpress_no_author" name="feedpress_no_author" type="checkbox" value="1"';
        if ($options['feedpress_no_author'] == 1) echo ' checked';
        echo '/> <label for="feedpress_no_author">'.__('Do not redirect author feeds.', FEEDPRESS_TEXTDOMAIN).'</label></p>';

        echo '<p><input id="feedpress_no_redirect" name="feedpress_no_redirect" type="checkbox" value="1"';
        if ($options['feedpress_no_redirect'] == 1) echo ' checked';
        echo '/> <label for="feedpress_no_redirect">'.__('Do not redirect any feeds (useful if you just want FeedPress to refresh your feed when you publish something).', FEEDPRESS_TEXTDOMAIN).'</label></p>';

        if ($json->premium) {

            echo '<p><input id="feedpress_transparent" name="feedpress_transparent" type="checkbox" value="1"';
            if ($options['feedpress_transparent'] == 1) echo ' checked';
            echo '/> <label for="feedpress_transparent">'.__('Activate transparent mode: The feed is not redirected to FeedPress but requests are still reported.', FEEDPRESS_TEXTDOMAIN).'</label></p>';

        } else {

            echo '<p><input id="feedpress_transparent" name="feedpress_transparent" type="checkbox" value="1" disabled/> <label for="feedpress_transparent" style="opacity: 0.5;">'.__('Activate transparent mode: The feed is not redirected to FeedPress but requests are still reported.', FEEDPRESS_TEXTDOMAIN).'</label>';
            echo '<br><em style="margin-left: 14px;">'.__('This feature is only available to', FEEDPRESS_TEXTDOMAIN) . ' <a href="http://feedpress.it/features" target="_blank">'.__('Premium Members', FEEDPRESS_TEXTDOMAIN).'</a> — '.__('starting at $2.50 per month', FEEDPRESS_TEXTDOMAIN).'.</em></p>';

        }

        echo '<p><input id="feedpress_no_ping" name="feedpress_no_ping" type="checkbox" value="1"';
        if ($options['feedpress_no_ping'] == 1) echo ' checked';
        echo '/> <label for="feedpress_no_ping">'.__('Do not ping FeedPress when a new article is published.', FEEDPRESS_TEXTDOMAIN).'</label></p>';

        echo '<p><input id="feedpress_debug" name="feedpress_debug" type="checkbox" value="1"';
        if ($options['feedpress_debug'] == 1) echo ' checked';
        echo '/> <label for="feedpress_debug">'.__('Activate debug mode.', FEEDPRESS_TEXTDOMAIN).'</label></p>';

        echo '<p class="submit" style="text-align: left">';
        wp_nonce_field('feedpress', 'feedpress-admin');
        echo '<input type="submit" name="submit" value="'.__('Save', FEEDPRESS_TEXTDOMAIN).' &raquo;" /></p></form>';

        echo '</div>';

        echo '<div id="form-create"';

        if ((is_array($json->feeds) && count($json->feeds) > 0) || !is_array($json->feeds)) {
            echo ' style="display: none;"';
        }

        echo '>';

        echo '<h2>'.__('Create a new FeedPress feed', FEEDPRESS_TEXTDOMAIN).'</h2>';

        echo '<p>'.__('Fill the form below to create your feed on FeedPress.', FEEDPRESS_TEXTDOMAIN).'</p>';

        echo '<form action="'.admin_url('options-general.php?page=feedpress/feedpress.php').'" method="post" id="feedpress-create">';

        echo '<h3><label for="feedpress_url">'.__('Original feed URL:', FEEDPRESS_TEXTDOMAIN).'</label></h3>';
        echo '<p><input type="text" id="feedpress_url" name="feedpress_url" value="'.get_bloginfo('rss2_url').'" style="width: 400px;" /></p>';

        echo '<h3><label for="feedpress_alias">'.__('Alias name for the feed:', FEEDPRESS_TEXTDOMAIN).'</label></h3>';
        echo '<p>http://feedpress.me/ <input type="text" id="feedpress_alias" name="feedpress_alias" value="'.feedpress_urlcompliant(get_bloginfo('name')).'" style="width: 150px;" /></p>';

        echo '<p class="submit" style="text-align: left">';
        wp_nonce_field('feedpress', 'feedpress-admin');
        echo '<input type="submit" name="create" value="'.__('Create', FEEDPRESS_TEXTDOMAIN).' &raquo;" /></p></form>';

        echo '</div>';

        echo '</div>';

	    $options['feedpress_feeds'] = $feedsData;
	    update_option('feedpress', $options);

    }

}

// Feed redirection
function feedpress_redirect() {

	global $feed, $withcomments, $wp, $wpdb, $wp_version, $wp_db_version;

    // Do nothing if not configured
    $options = feedpress_get_options();

    // Custom URL redirects
    if (isset($options['feedpress_url'][strtolower($_SERVER['REQUEST_URI'])])) {

        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        wp_redirect($options['feedpress_url'][strtolower($_SERVER['REQUEST_URI'])], 307);
		
		exit;

    }

    // Do nothing if not a feed
    if (!is_feed()) return;

    if ($options['feedpress_debug'] == '1' && isset($_GET['debug'])) {

        var_dump($_SERVER);

        if (isset($_GET['disable'])) {

            $options['feedpress_debug'] = '0';
            update_option('feedpress', $options);

        }

        die;

    }

    $feed_url = null;
    $comment_url = null;
    $feed_id = null;

	if (!empty($options['feedpress_feed_url'])) {
        $feed_url = $options['feedpress_feed_url'];
        $feed_id = $options['feedpress_feed_id'];
    }

    if (!empty($options['feedpress_comment_url'])) {
        $comment_url = $options['feedpress_comment_url'];
    }

    if (($options['feedpress_no_redirect'] == 1 && $options['feedpress_transparent'] == 0) || ($feed_url == null && $comment_url == null)) return;

	// Get category

    $cat = null;

	if (isset($wp->query_vars['category_name']) && $wp->query_vars['category_name'] != null) {
		$cat = $wp->query_vars['category_name'];
	}

	if (isset($wp->query_vars['cat']) && $wp->query_vars['cat'] != null) {
		if ($wp_db_version >= 6124) {
			// 6124 = WP 2.3
			$cat = $wpdb->get_var("SELECT slug FROM $wpdb->terms WHERE term_id = '".$wp->query_vars['cat']."' LIMIT 1");
		} else {
			$cat = $wpdb->get_var("SELECT category_nicename FROM $wpdb->categories WHERE cat_ID = '".$wp->query_vars['cat']."' LIMIT 1");
		}
	}
	
	// Get tag
	$tag = null;
	if (isset($wp->query_vars['tag']) && $wp->query_vars['tag'] != null) {
		$tag = $wp->query_vars['tag'];
	}

	// Get search terms
	$search = null;
	if (isset($wp->query_vars['s']) && $wp->query_vars['s'] != null) {
		$search = $wp->query_vars['s'];
	}

	// Get author name
	$author_name = null;
	if (isset($wp->query_vars['author_name']) && $wp->query_vars['author_name'] != null) {
		$author_name = $wp->query_vars['author_name'];
	}

	// Redirect comment feed
	if ($feed == 'comments-rss2' || is_single() || $withcomments) {
		if ($comment_url != null) {
            if ($options['feedpress_transparent'] == 1) {
                feedpress_api_call('feeds/hit', array(
                        'feed' => $options['feedpress_comment_id'],
                        'ua' => $_SERVER['HTTP_USER_AGENT'],
                        'ip' => $_SERVER['REMOTE_ADDR']
                    )
                );
            } else {
                header('Cache-Control: no-cache, must-revalidate');
                header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
                wp_redirect($comment_url, 307);
                exit;
            }
		}
	} else {
		// Other feeds
		switch($feed) {
			case 'feed':
			case 'rdf':
			case 'rss':
			case 'rss2':
			case 'atom':
				if ($cat && isset($options['feedpress_cat'][$cat])) {
                    header('Cache-Control: no-cache, must-revalidate');
                    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
                    wp_redirect($options['feedpress_cat'][$cat], 307);
                    exit;
                } else if ($tag && isset($options['feedpress_tag'][$tag])) {
                    header('Cache-Control: no-cache, must-revalidate');
                    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
                    wp_redirect($options['feedpress_tag'][$tag], 307);
                    exit;
                } else if (($cat || $tag) && $options['feedpress_no_cats'] == 1) {
                    // If this is a category/tag feed and redirect is disabled, do nothing
				} else if ($search && $options['feedpress_no_search'] == 1) {
					// If this is a search result feed and redirect is disabled, do nothing
				} else if ($author_name && $options['feedpress_no_author'] == 1) {
					// If this is an author feed and redirect is disabled, do nothing
				} else {
					if ($feed_url != null) {
                        if ($options['feedpress_transparent'] == 1) {
                            feedpress_api_call('feeds/hit', array(
                                    'feed' => $feed_id,
                                    'ua' => $_SERVER['HTTP_USER_AGENT'],
                                    'ip' => $_SERVER['REMOTE_ADDR']
                                )
                            );
                        } else {
                            // Redirect the feed
                            header('Cache-Control: no-cache, must-revalidate');
                            header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
                            wp_redirect($feed_url, 307);
                            exit;
                        }
					}
				}
		}
	}

}

// Handle feed redirections

if (isset($_SERVER['HTTP_USER_AGENT']) &&
    !preg_match('/feedpress/i', $_SERVER['HTTP_USER_AGENT']) &&
    !preg_match('/uri\.lv/i', $_SERVER['HTTP_USER_AGENT']) &&
    !preg_match('/feedvalidator/i', $_SERVER['HTTP_USER_AGENT']) &&
    !preg_match('/googlebot/i', $_SERVER['HTTP_USER_AGENT']) &&
    (!isset($_GET['redirect']) || $_GET['redirect'] != 'false')) {

    add_action('template_redirect', 'feedpress_redirect', 1);

}

// Ping FeedPress when there is a new post
function feedpress_publish_post() {

    $options = get_option('feedpress');

    if ($options['feedpress_no_ping'] == 0) {

        feedpress_api_call('feeds/ping', array('feed' => $options['feedpress_feed_id']));

    }

}

// Action when a post is published
add_action('publish_post', 'feedpress_publish_post');

function feedpress_admin_notice() {

    $options = get_option('feedpress');

    if (current_user_can('manage_options')) {

        if ((!empty($options['feedpress_feed_url']) && !preg_match('/^http/', $options['feedpress_feed_url'])) ||
            (!empty($options['feedpress_comment_url']) && !preg_match('/^http/', $options['feedpress_comment_url']))) {

            var_dump($options);

            echo '<div class="error"><p>'.__('Warning: The options have changed. You have to update your FeedPress settings.', FEEDPRESS_TEXTDOMAIN).' <a href="'.admin_url('options-general.php?page=feedpress/feedpress.php').'">'.__('Update settings', FEEDPRESS_TEXTDOMAIN).' &rarr;</a></p></div>';

        } elseif ($options['feedpress_append_cats'] == '1') {

            echo '<div class="error"><p>'.__('Warning: You have enabled the Append category option in FeedPress. This option doesn\'t exist anymore, please update your FeedPress settings.', FEEDPRESS_TEXTDOMAIN).' <a href="'.admin_url('options-general.php?page=feedpress/feedpress.php').'">'.__('Update settings', FEEDPRESS_TEXTDOMAIN).' &rarr;</a></p></div>';

        }

    }

}

// Admin notice
add_action('admin_notices', 'feedpress_admin_notice');

function feedpress_register_plugin_links($links, $file) {
	$base = plugin_basename(__FILE__);
	if ($file == $base) {
		$links[] = '<a href="' . admin_url('options-general.php?page=feedpress/feedpress.php') . '">' . __('Update settings', FEEDPRESS_TEXTDOMAIN) . '</a>';
	}
	return $links;
}

//Additional links on the plugin page
add_filter('plugin_row_meta', 'feedpress_register_plugin_links', 10, 2);

function feedpress_get_options() {

    $options = get_option('feedpress');
    if (!isset($options['feedpress_token'])) $options['feedpress_token'] = null;
    if (!isset($options['feedpress_feed_url'])) $options['feedpress_feed_url'] = null;
    if (!isset($options['feedpress_feed_id'])) $options['feedpress_feed_id'] = null;
    if (!isset($options['feedpress_comment_url'])) $options['feedpress_comment_url'] = null;
    if (!isset($options['feedpress_comment_id'])) $options['feedpress_comment_id'] = null;
    if (!isset($options['feedpress_no_redirect'])) $options['feedpress_no_redirect'] = 0;
    if (!isset($options['feedpress_no_cats'])) $options['feedpress_no_cats'] = 0;
    if (!isset($options['feedpress_no_search'])) $options['feedpress_no_search'] = 0;
    if (!isset($options['feedpress_no_author'])) $options['feedpress_no_author'] = 0;
    if (!isset($options['feedpress_no_ping'])) $options['feedpress_no_ping'] = 0;
    if (!isset($options['feedpress_transparent'])) $options['feedpress_transparent'] = 0;
    if (!isset($options['feedpress_debug'])) $options['feedpress_debug'] = 0;
    if (!isset($options['feedpress_cat'])) $options['feedpress_cat'] = array();
    if (!isset($options['feedpress_tag'])) $options['feedpress_tag'] = array();
    if (!isset($options['feedpress_url'])) $options['feedpress_url'] = array();

    return $options;

}
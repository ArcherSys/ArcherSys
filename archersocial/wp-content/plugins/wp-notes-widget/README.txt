=== Plugin Name ===
Contributors: _silver
Tags: widget, notes, sidebar, notification, news, events, tweet, twitter
Requires at least: 3.5
Tested up to: 4.1
Stable tag: 0.2.1
License: GPLv2 or later

Display important, short, time sensitive text and media in a 'sticky note' style. Auto Tweet your notes.

== Description ==

**If you like WP Notes Widget be sure to check out [Notes Widget Wrapper]('https://wordpress.org/plugins/notes-widget-wrapper') as well.**  

**New in version 0.2.0: Automatically post notes to your Twitter account.**

Posts and pages have their own characteristics and uses, but sometimes there is a need to display important, very short, time sensitive information which don't really fit into a post or page. WP Notes Widget fills this gap. The visual design is similar to real sticky notes which adds to the effective communication of the message.    

To further enhance the functionality of WP Notes Widget you can install these great plugins:

[Post Expirator](https://wordpress.org/plugins/post-expirator/) by Aaron Axelsen
  
[Post Types Order](https://wordpress.org/plugins/post-types-order/) by Nsp Code

You can also take advantage of some built in Wordpress functionality which you may not have explored yet:

* 'post dating' notes so that they only appear once a certain date and time has been reached

WP Notes Widget has also been designed to work with [WPML](http://wpml.org/). 
  

== Installation ==

1. Download plugin from Wordpress plugin repository
2. Activate the plugin through the 'Plugins' menu in WordPress (upon activiation some sample notes will be created)
3. On the main Wordpress admin menu, go to 'Notes'
4. You can either leave the sample notes published or move them to the trash.
5. Create/replace/adjust the available notes to your needs (similar to creating pages or posts).
3. Go to 'Appearance > Widgets' in the Wordpress Admin (after logging in)
4. Select 'WP Notes Widget' from the selection of available widgets. Drag it to your desired widget area.
5. Configure the look of the WP Notes Widget to your needs. 
6. The plugin is now set to display all of the published notes, ordered by their 'order' field and then by date. 

The following points explains the settings available on the widget administration page:

**Display date when note was published** 

Displays the date when the note was published. If desired, this date can be changed even after the note is published.


**I will use my own CSS styles for WP Notes Widget** 

If you intend to use your own CSS styles, choose this option (for advanced users).


**Use my theme's widget wrapper for WP Notes Widget** 

Select this option if you would like to use the generic wrapper your theme uses for all widgets, in a given widget area. Depending on what the widget wrapper does (adds padding, margins, borders, etc) WP Notes Widget may or may not look better with this option checked. Experiment and see what looks best with your theme. Be sure to test at different screen widths.


**Hide WP Notes Widget if there are no published notes available**

This option prevents WP Notes Widget from displaying entirely if there are no notes to display. Alternatively, a generic note with the text "There are no notes to display right now." will be displayed when this option is not activated.


**Use individual "sticky notes" for each note**

This option separates out each note into it's own individual "sticky note". Take a look at the screen shots for a visual example.    


**Enable social sharing of notes**

This option creates a "tweet" link below the note. It allows users to easily share the content of your note on their Twitter account.


= Setting up Automatic Posting to Twitter =

In order to set up automatic posting your Twitter account, you will need to set up a couple things:

* A Twitter account that has been authenticated with your mobile phone number
* A new Twitter application with read and write permissions

For more information on setting up a Twitter App check out [apps.twitter.com](https://apps.twitter.com/).

Once you have the appropriate credentials, you can follow the instructions on any Note page in your Wordpress admin.


== Frequently Asked Questions ==

= What is the best way to customize the look (CSS) of WP Notes Widget? =

Select the "I will use my own CSS styles for WP Notes Widget" option on the widget configuration page. This will disable all built in WP Notes Widget styles. You can take a look at public/less/wp-notes-public.less to view the LESS file used to generate the CSS file used on the front end of the website. This may be helpful when creating your own styles. You can add your own styles to the style.css file in your active theme folder, or another file if your theme does not use style.css for theme styles.  

= How can I get my images to have a transparent background like in the screenshots? =

The images used in the screenshots are a PNG file and have been created with a transparent background. Only this file type and GIFs allow transparent backgrounds. JPGs are not capable of having transparent backgrounds. 

= What type of download attachments can I use? =

You can attach any download that Wordpress supports. In many cases it would make sense to have .PDF file as an attachment but any file type in your media library will work. This includes .mp3s, images, even video files. 

= I can't get my tweets to post to my Twitter account =

There are a few possible reasons why you are experiencing difficulties:

* You did not check the "send tweet on publish or update" checkbox
* Your tweet is over the 140 character limit
* You did not enter the proper authentication credentials 
* You are trying to tweet an exact duplicate of a tweet you recently posted 

== Screenshots ==

1. These are the fields and options are available when editing a single note. Similar to a posts.
2. You have the option to add an image or download file to your note. This uses Wordpress's built in media manager. 
3. This shows the listing of all of the notes in the system. Similar to posts. 
4. This shows the widget controls on the widget admin page.
5. The show what the front end of the website looks like using the configuration specified. The layout will naturally differ depending on what theme is being used. 
6. This is the same configuration as screenshot number 5, but in this example we are using the 'Use individual "sticky notes" for each note' option
7. This is the same configuration as screenshot number 5, but in this example we are using different style settings
8. Using screen shot 1 as an example, this is what the tweet looks like once posted to Twitter


== Changelog ==

= 0.2.1 =
* removed namespacing to be compatible with PHP 5.2.x
* trimmed potential whitespace from Twitter credentials
* cleaned up inconsistent tabs/spaces in code indentation

= 0.2.0 =
* added automatic posting of notes to Twitter
* cleaned up code and code commenting

= 0.1.4 =
* optimized and simplified LESS code
* added font size controls
* added optional, automatic, Twitter tweet link

= 0.1.3 =
* cleaned up code to be more consistent and reuseable
* added image option for note
* added download option for note
* added option to open link in new tab
* cleaned up semantics of code
* cleaned up code commenting
* added option to include date or not
* fixed note updated/published messages (changed wording and removed unnecessary link)
* added option to separate each note into individual "sticky notes"

= 0.1.1.2 =
* Minor adjustments to default CSS

= 0.1.1 =
* Added option to include theme's widget wrapper (before_widget and after_widget)
* Cleaned up efficiency of code in widget class

= 0.1 =
* Initial version




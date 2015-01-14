=== WP Cloud ===
Contributors: Milmor
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=F2JK36SCXKTE2
Tags: 
Requires at least: 3.3
Tested up to: 3.6
Version: 0.2.3
Stable tag: 0.2.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Give all users their personal space with WP Cloud, the most advanced plugin to add a cloud platform for WordPress!

== Description ==

> **Warning**: this plugin is still in beta

WP Cloud is a brand new plugin that allows you to make WordPress a cloud platform. With this plugin your users will have their personal space for hosting images or documents, and can access them with easy when they want.

This plugin practically generates a folder under your second-level domain (ex. website.com/**cloud**) in which there will be one folder for each user (ex. mywebsite.com/**cloud/$user_id/***). Every user can store the file there via a front-end mask displayed using shortcodes, back-end dashboard or the exciting cloud panel found in website.com/cloud.

= What is the cloud panel? =
The Cloud Panel of WP Cloud can be accessed from website.com**/cloud** and give users the opportunity to log-in and manage their file via a friendly mask. For un-logged users, the log-in for will be shown and users can authenticate themselves with their WordPress credentials.

Directly via the cloud panel, logged-in users can:

* see files uploaded, and eventually delete
* see cloud space assigned
* see cloud space used (with percentage too)
* upload a new file

= Users quota =
WP Cloud offers a standard user-quota of 10MB, that is applied by default to every member. You can change this value to give all the users the space you want.
The quota for each user is stored in a meta-field for each profile with the following criteria:

* null = default quota (the meta-field doesn't exist)
* 0 = hosting not allowed
* any other number = n MB hosting

Please note that the user-quota only applies when the user uploads a file. If a user has 90 of 100MB used and you downgrade it to 10MB, files are kept but won't be able to upload files.
There is also an **overload-quota** (default 10%) in percentage that can be set in the settings panel. It works as follows:

* 9 of 10 MB used. Overload 10%. File to upload: 2MB. -> YES
* 9 of 10 MB used. Overload 0%. File to upload: 2MB. -> NO
* 10 of 10MB used. Overload 10%. File to upload: 1MB. -> NO
* 9.99 of 10MB used. Overload 10%. File to upload: 1MB. -> YES

= Shortcodes =
In addition you can create custom pages in your website using the following shortcodes:

* **[cloud]** prints a list of files for the current user
* **[cloud_upload]** prints a simple upload form that allows the current user to upload a file in his/her directory.

= Translations =
The plugin is in English and actually doesn't have support for translations. In some days it will, with italian translation included.

= Roadmap =
The plugin is new, and there are some ideas that need some other work:

* Assign quota based on user role
* Assign different quota for each user
* Share files with other members

= Ideas? =
If you think that this plugin could be improved, please let me know.
http://wordpress.org/support/plugin/cloud

> = thank you = 

== Installation ==
1. Upload the entire folder to the '/wp-content/plugins/' directory or install direcly via the WordPress plugin screen
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Enjoy!

== Screenshots ==

1. Shortcode

2. Back-end dashboard

== Changelog ==

= 0.2.3 18/07/2014 =
* **Fixed** error 404 for file links
* **Added** wp admin bar in */cloud
* **Removed** wp footer in */cloud

= 0.2.2 16/07/2014 =
* Readme.txt changes

= 0.2.1 16/07/2014 =
* **Fixed** some bugs

= 0.2 16/07/2014 =
* First commit
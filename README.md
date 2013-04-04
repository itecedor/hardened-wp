This repo is what I use for every new WordPress job I start. You are welcome to use it for your own WP projects. 

If you have any questions please put in an issue and I'll get back to you as soon as I can.

Ivete
http://ivetetecedor.com
@ivetetecedor

----
INTRODUCTION

This is a Hardened WordPress installation following the principles outlined in http://codex.wordpress.org/Giving_WordPress_Its_Own_Directory and http://codex.wordpress.org/Hardening_WordPress

How to install:
1 - check out the repo into the www or html directory on your server, so that index.php is in that directory
2 - choose a new name for the WordPress directory (the directory currently named wp-directory). 
	**SECURITY TIP** don't name it 'wp' or 'wordpress', the idea is to make it hard for hackers to guess where the core files are!
	Change this name in two places:
	a - change the name of the directory itself
	b - change it in the last line of index.php
3 - in your browser, go to NEW_DIRECTORY_NAME/index.php and follow the WordPress install (where NEW_DIRECTORY_NAME is whatever you renamed the directory to) 
	**SECURITY TIPS** 
		- don't create a user called 'admin'!
		- choose a different table prefix than the default 'wp_'

4 - after install finishes, log into the WordPress admin panel and go to Settings > General
5 - remove the NEW_DIRECTORY_NAME directory from the field "Site Address" and click save changes.

Make sure everything looks good from the front end (ie the site loads correctly from the root directory and not from NEW_DIRECTORY_NAME)

----
HTTP USERNAME AND PASSWORD LOCK

When I'm working on a WP site and it's not ready for the public/Google, I lock the install with basic HTTP username/password authentication. This repo comes with that code commented-out.

To turn on HTTP authentication, uncoment lines 12-21 of index.php. Make sure to change USERNAME and PASSWORD to real things!

----
This repo currently installs WP version 3.5.1

WordPress is GPLv2 licensed. http://wordpress.org/about/license/

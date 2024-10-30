=== Simplest comment spam catcher ===
Contributors: markhowellsmead
Donate link: https://www.paypal.me/mhmli
Tags: comment spam, spam, form, comment_form_after_fields, preprocess_comment, honeypot
Requires at least: 4.0
Tested up to: 6.1
Stable tag: trunk
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Add a hidden “honeypot” field to comment forms, to help combat comment spam.

== Description ==

Adds a hidden field to comment forms, which will subsequently be auto-filled by spam-submitting robots. If the form
submission contains a value, the comment will not be saved, because only robots will see the field and fill it out.

Simple!

Any form which is processed using the hook `comment_form_after_fields` (building the form HTML) and `preprocess_comment`
(for processing the form submission) will be extended with this functionality.

This plugin doesn't block or catch any form submissions which have been filled manually in a browser, so you may still
receive the occasional advertising or sales message as a post or page comment. However, blocking automatically-generated
spam messages will reduce the number of unwanted messages greatly.

== Installation ==

1. Upload the plugin folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. That's it.

== Changelog ==

= 1.0.5 =
* Add plugin image assets for repository
* Confirms compatibility with WordPress 5.6.

= 1.0.4 =
* Confirms compatibility with WordPress 5.2.0.
* Switches to the use of PHP array short syntax.
* Changes the author name to Say Hello GmbH.

= 1.0.3.1 =
* Changes the name of the plugin which is displayed in WordPress admin area. No technical changes.
* Minor changes to README.

= 1.0.3 =
* Confirms compatibility with WordPress 4.6.

= 1.0.2.1 =
* Fixes version number. Sorry!

= 1.0.2 =
* Confirms compatibility with WordPress 4.5.
* Updates README.

= 1.0.1 =
* Minor changes to README.

= 1.0 =
* Initialises public version.

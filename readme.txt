=== Restrict Lite ===
Author http://shaunewest.com
Contributors: shaune
Tags: admin, restrict, roles, members only, restricted area, capability
Requires at least: 3.0.1
Tested up to: 3.5.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Stable tag: trunk

An easy way to limit what data is shown to users with a simple a shortcode.

== Description ==

An easy way to limit what data is shown to users with a simple a shortcode. Any content placed inside the shortcode will be restricted to logged in users only with the correct capabilities.

== Installation ==

1. Manual Installation: Upload `restrict-lite` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

To restrict just a section of content within a post or page, you may use shortcodes like this:

[restrict capability="editor"] restricted content goes here [/restrict]

== Frequently Asked Questions ==

= Where can i get a list of capabilities? =

View what roles are specific to what user here: http://codex.wordpress.org/Roles_and_Capabilities

== Screenshots ==

1. Using a shortcode with multiple roles in the WYSIWYG editor.

== Upgrade Notice ==
= 1.102 =
Important, change shortcode from "role" to "capability". Role has been depreciated and will be removed in future builds.


== Changelog ==

= 1.102 =
* Upgrade notice included

= 1.102 =
* Fixed Syntax error introduced in 1.1

= 1.1 =
* Important change, role is now capability to better reflect is true name. 
* role will be removed in future builds. Please make changes to your shortcodes!
* Removed default "read".

= 1.0 =
* Initial release
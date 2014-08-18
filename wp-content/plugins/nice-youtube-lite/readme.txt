=== Nice YouTube Lite ===
Contributors: mjetpax
Donate link: http://trinitronic.com/wordpress/wordpress-nice-youtube
Tags: youtube, shortcode, embed, video, video embed, youtube embed, youtube player, video player

Requires at least: 3.0
Tested up to: 3.5.2
Stable tag: trunk

Nice YouTube Lite gives you the power to embed YouTube video players wherever you choose, by simply adding shortcodes to your posts, pages or sidebar widgets.

== Description ==

[Upgrade to the full version of the Nice YouTube plugin.](http://trinitronic.com/wordpress/wordpress-nice-youtube "Nice YouTube Plugin Full Version")

Get the easiest and most convenient way to add a YouTube video player to posts, pages and sidebar widgets with Nice YouTube Lite plugin!

Whether you want to display one YouTube video or many YouTube videos, the Nice Youtube Lite plugin makes it easy to turn any WordPress post, page or sidebar widget into a video experience. No need to horse around with complicated embed codes, the Nice Youtube Lite's implementation is quick, flexible and easy to use. Simply enter the Nice Youtube Lite shortcode where you want your YouTube video player to appear and you're all set!

Example:

[niceyoutubelite id="UXtjrb0WBhc"]

Some cool features:

* Easily add YouTube videos anywhere in a  post, page or sidebar widget.
* Supports multiple YouTube videos per post, page or sidebar widget.
* Set the default YouTube video player width.
* Set the default YouTube video player aspect ration.
* Automatically calculates YouTube video player height based on width setting.
* Supports an optional per YouTube video player width setting.
* Supports optional per YouTube video player aspect ratio customization.
* Includes convenient admin settings page for easy configuration.
* Includes powerful shortcode Youtube player placement.

== Installation ==

1. Log in and navigate to WP-Admin>>Plugins
1. Click the "Add New" button next to the Plugins title.
1. Click the "Upload" link on the Install Plugin page.
1. Click the "Choose File" button.
1. Locate and select the Nice YouTube Lite .zip file on your local computer
1. Click the Ok button on the pop-up window.
1. Click the install button on the Install Plugin page.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Go to Settings>>Nice Youtube Lite
1. Configure the Nice Youtube Lite options.
1. Click the "Update Settings" button
1. Insert Nice Youtube Lite shortcodes in any post or page.
1. That's it! You're all ready to start showing off your videos!!

Alternative installation

1. Unzip the Nice PayPal Lite plugin download
1. Upload the entire niceYouTubeLite folder to your wp-content/plugins directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Go to Settings>>Nice Youtube Lite
1. Configure the Nice Youtube Lite options, i.e. PayPal seller's email address, currency, country code, etc.
1. Click the "Update Settings" button
1. Insert Nice Youtube Lite shortcodes in any post or page.
1. That's it! You're all ready to start showing off your videos!!

== Frequently Asked Questions ==

How many YouTube videos can I place in a post, page or sidebar widget?

This is unlimited. You may place as many YouTube videos as you would like in a post, page or sidebar widget.

Where can I get technical support?

You can get support through our support forum [http://trinitronic.com/community](http://trinitronic.com/community "Nice Youtube Lite Support Forum").

Where can I find the Nice Youtube Lite documentation page?

You can find the Nice Youtube Lite Documentation here. [http://trinitronic.com/wordpress-plugin-documentation/wordpress-nice-youtube-lite-documentation](http://trinitronic.com/wordpress-plugin-documentation/wordpress-nice-youtube-lite-documentation "Nice Youtube Lite Documentation")

How do I set a height for the YouTube video player?

The height for the video player is conveniently set automatically. The automatic height calculation is based on the width and the aspect ratio settings. So, there is never any need to monkey around with complicated math calculations to ensure the proper width to height settings. The Nice YouTube plugin handles this for you.

How can I center or right justify the YouTube video player?

Please see the full version of [http://trinitronic.com/wordpress/wordpress-nice-youtube](http://trinitronic.com/wordpress/wordpress-nice-youtube "Nice YouTube plugin") for extended features.

How can I set autoplay and other YouTube player settings with the Nice YouTube Lite plugin?

Please see the full version of [http://trinitronic.com/wordpress/wordpress-nice-youtube](http://trinitronic.com/wordpress/wordpress-nice-youtube "Nice YouTube plugin") for extended features.

== Changelog ==
= 1.0 =
* First release of the plugin

== Upgrade Notice ==

== Screenshots ==

== Documentation ==

**Basic Usage**

Usage is simple. Create a new post, page or text widget add your content to it. Wherever you want a YouTube video to appear include a Nice YouTube shortcode, like the following example. When you view your published post, page or widget the shortcode will be automatically replaced with a corresponding YouTube video.

*Shortcode Example*

`[niceyoutubelite id="UXtjrb0WBhc"]`

Note, id is the YouTube video id of your video.

*Shortcode Syntax*

[niceyoutubelite attribute_name="attribute_value"]

**Shortcode Attributes**

The Nice Youtube Lite plugin provides options through the inclusion of 3 shortcode attributes. These attributes are as follows.

* id
* width
* aspect_ratio

Each attribute can be set in the shortcode by including the attribute name followed by an equals sign and the attribute value in quotes. You can set a default value for all of the attribute, excluding the video "id", on the admin settings page.

*Attribute Example*

`[niceyoutubelite id="UXtjrb0WBhc" width="320"]`

**Shortcode Attribute Definitions**

*id*

[niceyoutubelite id="YouTube_Video_Id"]

Sets the video id for the YouTube video you wish to display. The YouTube video id is displayed in your browsers address bar when you are watching a video on YouTube. To obtain the video id, go to your video manager on YouTube and simply play your video. Look at your browser's address bar. You will see a web address that looks like the following.

`http://www.youtube.com/watch?v=UXtjrb0WBhc`

The portion of the address after the "v=" is the video id.

Example

`[niceyoutubelite id="UXtjrb0WBhc"]`

Notice that the id value is the same as the value that comes after the "v=" portion of the YouTube video URI.

*width*

[niceyoutubelite width="640"]

Use width to set the YouTube video player width.

*aspect_ratio*

[niceyoutubelite aspect_ratio="16:9"]

Set the YouTube video player's aspect ratio with the aspect_ratio attribute. The default YouTube video aspect ratio is 16:9. Older videos probably have an aspect ratio of 4:3. The aspect ratio and width settings are used to automatically calculate the appropriate height for the YouTube video player.

**Plugin Settings**

The Nice Youtube Lite plugin allows you to configure the plugin's global default settings. Configuration of the plugin is made quick and easy through the use of it's admin settings page. You can find the settings page at WP-Admin>>Settings>>Nice Youtube Lite. The global default settings that are made available to you are as follows.

*Default video width*

Enter the default YouTube video embed width in pixels. This will be used for all videos that do not have a width set in their respective shortcodes.

*Default video aspect ratio*

Enter the YouTube player aspect ratio. This will be used to determine the height of the video player. YouTubes standard aspect ratio is 16:9. Older videos may have an aspect ratio of 4:3.

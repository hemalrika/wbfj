=== Display During Conditional Shortcode ===
Contributors: gserafini
Donate link: http://bit.ly/display_during_plugin_donation
Tags: shortcode, conditional, display, strtotime
Requires at least: 2.7
Tested up to: 4.9.1
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Provides ability to use a shortcode to show or hide content depending on time of day, expiration of a certain date, or on a recurring schedule.

== Description ==

Specify the start and end date / times you'd like content enclosed by the shortcode to be displayed during.  Optionally include a message or different content to display once that time period has passed.

= Shortcodes: =

Insert `[display_during end_day_time="June 27, 2018 10:00 am" message="Sorry, this content no longer available."]CONTENT_TO_DISPLAY[/display_during]` into any post or page to conditionally display whatever is inside of the shortcode.  The `message` parameter you specify will display if the start and end time parameters are not currently valid.

All shortcode parameters:

`[display_during start_day_time="Sun 8:00 am" end_day_time="Mon 8:00 pm" timezone_location="America/Denver" message="Sorry, this content is not currently available."]CONTENT_TO_DISPLAY[/display_during]`

* `start_day_time` - OPTIONAL - What day/time or time of day should the contents start being displayed?
* `end_day_time` - REQUIRED - What day/time or time of day should the content of the shortcode stop being displayed?
* `timezone_location` - OPTIONAL - The timezone uses by default whatever is set for the site in Settings > General.  You can use this optional parameter to specify a different timezone location.  Uses the standard [PHP timezones](http://www.php.net/manual/en/timezones.php)


== Installation ==

= Install via Plugins > Install New =
1. Search for "Display During Conditional Shortcode"
2. Click the "Install Now" link
3. Click "Activate Plugin"

= Via ZIP / FTP =
1. Unzip the ZIP file and drop the folder straight into your wp-content/plugins directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

= Use as a shortcode =

1.  Insert your `[display_during end_day_time="June 27, 2018 10:00 am" message="Sorry, this content no longer available."]CONTENT_TO_DISPLAY[/display_during]` shortcode and insert the content you want to display where CONTENT_TO_DISPLAY is and put the message to display if the time isn't valid in the message parameter.
2. Publish and  view post or page to see output.

== Frequently Asked Questions ==

= What about showing something on a recurring schedule? =

It???s easy to display content based on a recurring time.

Example: display content every day at a set time, from 9:00 AM to 5:00 PM:
`[display_during start_day_time=???Today 9:00 am" end_day_time=???Today 5:00 pm" message=""]CONTENT_TO_DISPLAY[/display_during]`

Example: Display content during a 24 hour period each week, starting Sunday night and ending Monday night:
`[display_during start_day_time=???Sun 8:00 am" end_day_time=???Mon 8:00 am" message=""]CONTENT_TO_DISPLAY[/display_during]`

= What are valid time settings for start_day_time and end_day_time?  =

The plugin uses PHP's [strtotime()](http://php.net/manual/en/function.strtotime.php) function to decipher start and end times.  You can specify either a specific start and end date (i.e. June 27, 2018 10:00 am) or you can also specify a start and end time as days of the week (i.e. start_day_time="Sun 8:00 am" and end_day_time="Mon 8:00 pm".  This second method will display content starting Sunday at 8:00 am and stop displaying it the day after (Monday) at 8:00 pm.  You can also use Today in place of a day if that makes sense for your application.

Only `end_day_time` is required.  If `start_day_time` is omitted, now is used for the `start_day_time`, and `end_day_time` will determine when to stop displaying the content.

= Can I use either Visual or Text mode? =

Yes.  Both are supported, although if you're entering HTML / CSS as the content, you may want to edit the page using Text mode.

= Is support available? =

Yes, use the contact form on the ShareThePractice.org [website](http://sharethepractice.org/contact/).

== Screenshots ==

1. Edit screen - add your shortcode either using Visual or Text
2. Content shown during valid dates
3. Content not available message being shown

== Changelog ==

= 1.2 =
* 07 Dec 2017 - Bug fix to reset timezone back to whatever it was before the shortcode runs (use requested timezone only for the date calculations, then put it back like we found it).  This fixes an issue where code following the execution of the shortcode would then inherit the timezone set by the plugin.

= 1.1 =
* Public release of plugin to WordPress repository.  Hello World! :)

= 1.0 =
* Initial version of plugin, internal release only

== Upgrade Notice ==

= 1.1 =
Added additional code to manage timezone default better


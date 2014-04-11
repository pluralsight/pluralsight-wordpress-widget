# Pluralsight WordPress Widget

A simple widget (and shortcode) that displays [Pluralsight](http://pluralsight.com) courses by author.

## Description

This plugin adds a list of Pluralsight courses by author (by tag coming soon) as either a widget or a shortcode. The widget includes controls to determine what fields to include (first name, last name and date published), where to display the Pluralsight logo (above or below the course list) and how many courses to list.

The shortcode allows you to control all the same options with shortcode parameters.

**Note:** When using *either* the shortcode or the widget, you *must* specify an author name.

### Shortcode usage

This shortcode will display no courses at all:

`[ps-course-list]`

**Author**

This shortcode will display *all* courses by Chris Reynolds:

`[ps-course-list author=chris-reynolds]`

**Note:** Author name *must* match the author ID on Pluralsight.com.

**Fields**

If no `fields` value is passed to the shortcode, only the course titles will display. However, if you'd like to display first name, last name and release date, you could do this:

`[ps-course-list author=chris-reynolds fields="FirstName,LastName,ReleaseDate"]`

**Note:** When using multiple field values, values must be separated by commas with *no spaces*.

**Limit**

If you only wanted to list a few courses, you could do that like this:

`[ps-course-list author=chris-reynolds limit=3]`

This parameter accepts any numeric value.

**Logo Position**

You can display the Pluralsight Logo above or below the course list like this:

`[ps-course-list author=chris-reynolds logo=below]`

The default logo position is above. Using `logo=below` will override this to display the logo below the list of courses.

 Coming soon! =

Planned features are:

* Logo style -- for blogs with a dark background, the logo will display in a light color
* Course list by tags -- a comma-separated list of tags to display all courses by any number of different tags. Can be used *in place of* the author.

## Installation

1. Install the plugin via the WordPress Add New Plugin screen or upload the zip file from WordPress.org (or [GitHub](https://github.com/pluralsight/pluralsight-wordpress-widget/archive/master.zip)).
2. Activate the plugin.
3. Either drag the Pluralsight Widget to a widgetized area on your Widgets page or use the shortcode.

## Screenshots
![Pluralsight Widget](https://github.com/pluralsight/pluralsight-wordpress-widget/blob/master/assets/screenshot-1.png?raw=true)  
1. The Pluralsight Widget on the Widgets page
![Live widget](https://github.com/pluralsight/pluralsight-wordpress-widget/blob/master/assets/screenshot-2.png?raw=true)  
2. The widget in action!
![Example shortcode](https://github.com/pluralsight/pluralsight-wordpress-widget/blob/master/assets/screenshot-3.png?raw=true)  
3. An example shortcode usage  
![Live shortcode](https://github.com/pluralsight/pluralsight-wordpress-widget/blob/master/assets/screenshot-4.png?raw=true)  
4. That shortcode in use

== Changelog ==

= 1.0.0 =
* Initial release
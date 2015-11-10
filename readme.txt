=== Clear Floats Button ===
Contributors: Graffino
Tags: wysiwyg, formatting, tinymce, edit, float, clear, editor
Requires at least: 2.9
Tested up to: 4.3.1
Stable tag: 1.0.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds clear float button to TinyMCE Editor.

== Description ==

This plugin adds 1 button to [TinyMCE](http://tinymce.moxiecode.com/) to clear floating elements. It also adds divs to valid tags so they won't be deleted if empty.

Originally by [Miguel Ibero](https://wordpress.org/plugins/tinymce-clear-buttons/).

== Installation ==

1. Download.
2. Unzip.
3. Upload to the plugins directory (wp-content/plugins).
4. Activate the plugin.

== Frequently Asked Questions ==

1. Why do you need to clear the floats?
Well, sometimes you want to add two floating images but don't want them to overlap. Or you want to add an image floated to the left and text on the right, and then add a new block. You can add a clear in
the middle to achieve the desired effect.
2. How do I report an issue with this plugin?
Just head over to GitHub and [open a new issue](https://github.com/Graffino/Clear-Floats-Button/issues/new)

== Screenshots ==

1. Visual Editor Bar Button
2. Visual Editor Sample

== Changelog ==

= 1.0.5 =
- Fixed stripping of IDs on DIVs - Extended valid elements fix for cases in which extended elements are not defined [Issue #1](https://github.com/Graffino/Clear-Floats-Button/issues/1)

= 1.0.4 =
- Fixes not loading CSS when user is not logged-in [Issue #2](https://github.com/Graffino/Clear-Floats-Button/issues/1)

= 1.0.3 =
- Updated assets for WP Plugin Directory (2)

= 1.0.2 =
- Updated assets for WP Plugin Directory

= 1.0.1 =
- Fixed stripping of IDs on DIVs [Issue #1](https://github.com/Graffino/Clear-Floats-Button/issues/1)

= 1.0.0 =
- Created new version from [stale plugin](https://wordpress.org/plugins/tinymce-clear-buttons/)
- Revamped graphic assets
- Removed clear:left and clear:right buttons
- Changed plugin so we don't have inline styles.

== Upgrade Notice ==

= 1.0.5 =
Fixes issues for users that use DIV IDs in their editor.

=== Clear Floats Button ===
Contributors: graffino, zenopopovici, miguelibero
Tags: wysiwyg, formatting, tinymce, edit, float, clear, editor
Requires at least: 2.9
Tested up to: 6.0
Stable tag: 1.2.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Donate link: https://www.paypal.me/zenopopovici/

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

= Why do you need to clear the floats? =
Well, sometimes you want to add two floating images but don't want them to overlap. Or you want to add an image floated to the left and text on the right, and then add a new block. You can add a clear in
the middle to achieve the desired effect.

= Where do I get support? =
Ask your question in the [Support Forums](http://wordpress.org/support/plugin/clear-floats-button). Please note that due to restricted time availability we're not actively answering questions, unless a real bug is reported. See: "What should I try before reporting a bug" section.

= What should I try before reporting a bug? =
1. Disable all your plugins except "Custom Post Type Maker".
2. See if the plugin behaves normally with the default Wordpress theme.
3. Try to run the plugin on a clean Wordpress install.

If all of this fails, see: "How should I report bugs?" section.

= How should I report bugs? =
Please report your bug on [GitHub](https://github.com/Graffino/Clear-Floats-Button/issues). Issues will not be handled elsewhere.

Make sure you attach to the report:
1. Your Wordpress version
2. Your plugin version
3. Screenshots
4. Steps to reproduce the problem
5. Anything else you think would be useful to pinpoint the problem

= How do I request a feature? =
We're supporting this plugin but not actively developing it. If you're interested to contribute you can submit a PR on [GitHub](https://github.com/Graffino/Clear-Floats-Button/pulls).

= How do I get the plugin in my own language? =
You'll have to do it yourself. Help [translate this plugin](https://translate.wordpress.org/projects/wp-plugins/clear-floats-button).

== Screenshots ==

1. Plugin in action

== Changelog ==

= 1.2.5 =
- Compatibility with current WP version.

= 1.2.4 =
- Compatibility with future WP version.

= 1.2.3 =
- Update assets.

= 1.2.2 =
- Compatibility with future WP version.

= 1.2.1 =
- Remove unneeded translation strings. Fixes [Issue #12](https://github.com/Graffino/Clear-Floats-Button/issues/12)
- Compatibility with future WP version.

= 1.2.0 =
- OOP rewrite by @jaredyork

= 1.1.6 =
- Compatibility with future WP version.

= 1.1.5 =
- Compatibility with future WP version.

= 1.1.4 =
- Fix for undefined variable.

= 1.1.3 =
- Cleanup & improved documentation. Added translation tags.

= 1.1.2 =
- Correctly named variable. Fixes [Issue #10](https://github.com/Graffino/Clear-Floats-Button/issues/10)

= 1.1.1 =
- Editor not loading due to SVN processing error. Bumping version & correcting documentation. Sorry for that! Fixes [Issue #8](https://github.com/Graffino/Clear-Floats-Button/issues/8), [Issue #9](https://github.com/Graffino/Clear-Floats-Button/issues/9)

= 1.1.0 =
- Changed to inline styling. Fixes [Issue #7](https://github.com/Graffino/Clear-Floats-Button/issues/7), [Issue #5](https://github.com/Graffino/Clear-Floats-Button/issues/5)
- Uses `br` instead of `div`. Fixes [Issue #6](https://github.com/Graffino/Clear-Floats-Button/issues/6)
- New icon to better represent clearing of floats.
- Minified assets for performance.
- Add 'ctrl + option/alt + f' shortcut
- Removed deprecated functions
- Updated assets, icons, background, screenshot

= 1.0.10 =
- Compatibility with future version of WP

= 1.0.9 =
- This ensures that such themes will not make the divider appear
taller than intended.[Issue #3](https://github.com/Graffino/Clear-Floats-Button/pull/4)

= 1.0.8 =
- Compatibility with future version of WP

= 1.0.7 =
- Fixed miss interpretation of TinyMCE api regarding custom_elements. This prevented the plugin from working in IE [Issue #3](https://github.com/Graffino/Clear-Floats-Button/issues/3)

= 1.0.6 =
- Compatibility with future version of WP

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

= 1.1.2 =
- Fixes an error with the Editor not saving when used with photo galleries.

= 1.1.1 =
- Fixes an error with the Editor not loading due to a SVN processing error. Sorry for that!

= 1.1.0 =
Fixes conflicts with certain themes.

= 1.0.7 =
Fixes an issue that prevented the plugin from working in Internet Explorer.

= 1.0.5 =
Fixes issues for users that use DIV IDs in their editor.

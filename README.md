# Clear Floats Button

![Clear Floats Button](https://github.com/Graffino/Clear-Floats-Button/blob/master/assets/banner-1544x500.png)

Adds clear float button to TinyMCE Editor. Originally by [Miguel Ibero](https://wordpress.org/plugins/tinymce-clear-buttons/).

## Description

This plugin adds 1 button to [TinyMCE](http://tinymce.moxiecode.com/) to clear floating elements. It also adds divs to valid tags so they won't be deleted if empty.

## Installation

1. Download.
2. Unzip.
3. Upload to the plugins directory (wp-content/plugins).
4. Activate the plugin.

## Changelog

### 1.2.3

- Update assets.

### 1.2.2

- Compatibility with future WP version.

### 1.2.1

- Remove unneeded translation strings. Fixes [Issue #12](https://github.com/Graffino/Clear-Floats-Button/issues/12)
- Compatibility with future WP version.

### 1.2.0

- OOP rewrite by @jaredyork

### 1.1.6

- Compatibility with future version of WP

### 1.1.5

- Compatibility with future version of WP

### 1.1.4

- Fix for undefined variable.

### 1.1.3

- Cleanup & improved documentation. Added translation tags.

### 1.1.2

- Correctly named variable. Fixes [Issue #10](https://github.com/Graffino/Clear-Floats-Button/issues/10)

### 1.1.1

- Editor not loading due to SVN processing error. Bumping version & correcting documentation. Sorry for that! Fixes [Issue #8](https://github.com/Graffino/Clear-Floats-Button/issues/8), [Issue #9](https://github.com/Graffino/Clear-Floats-Button/issues/9)

### 1.1.0

- Changed to inline styling. Fixes [Issue #7](https://github.com/Graffino/Clear-Floats-Button/issues/7), [Issue #5](https://github.com/Graffino/Clear-Floats-Button/issues/5)
- Uses `br` instead of `div`. Fixes [Issue #6](https://github.com/Graffino/Clear-Floats-Button/issues/6)
- New icon to better represent clearing of floats.
- Minified assets for performance.
- Add 'ctrl + option/alt + f' shortcut
- Removed deprecated functions
- Updated assets, icons, background, screenshot

### 1.0.10

- Compatibility with future version of WP

### 1.0.9

- This ensures that such themes will not make the divider appear
taller than intended.[Issue #4](https://github.com/Graffino/Clear-Floats-Button/pull/4)

### 1.0.8

- Compatibility with future version of WP

### 1.0.7

- Fixed miss interpretation of TinyMCE api regarding custom_elements. This prevented the plugin from working in IE [Issue #3](https://github.com/Graffino/Clear-Floats-Button/issues/3)

### 1.0.6

- Compatibility with future version of WP

### 1.0.5

- Fixed stripping of IDs on DIVs - Extended valid elements fix for cases in which extended elements are not defined [Issue #1](https://github.com/Graffino/Clear-Floats-Button/issues/1)

### 1.0.4

- Fixes not loading CSS when user is not logged-in [Issue #2](https://github.com/Graffino/Clear-Floats-Button/issues/1)

### 1.0.3

- Updated assets for WP Plugin Directory (2)

### 1.0.2

- Updated assets for WP Plugin Directory

### 1.0.1

- Fixed stripping of IDs on DIVs - Extended valid elements fix [Issue #1](https://github.com/Graffino/Clear-Floats-Button/issues/1)

### 1.0.0

- Created new version from [stale plugin](https://wordpress.org/plugins/tinymce-clear-buttons/)
- Revamped graphic assets
- Removed clear:left and clear:right buttons
- Changed plugin so we don't have inline styles.

## Frequently Asked Questions

1. Why do you need to clear the floats?
Well, sometimes you want to add two floating images but don't want them to overlap. Or you want to add an image floated to the left and text on the right, and then add a new block. You can add a clear in
the middle to achieve the desired effect.

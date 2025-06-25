# Postbox

This is a Friendica add-on that adds a stylesheet to the HEAD element to support showing Postbox styling.

It does not add any interface for creating Postboxes, but users can still create them with BBcode.

_**NOTE:** Support for Postbox is built into Bookface 1.6+. This adddon adds support to Friendica regardless of what theme/scheme is being used._

## Getting started

1. Place the "postbox" folder in your _friendica/addons_ subfolder.
2. Go to the Main _Menu > Admin > Addons_ and enable "Postbox"
3. Any posts using Postbox will now display the colorful backgrounds.

## Using Postbox

1. Open the message Compose modal or Page
2. Type `[class=postbox-red]Wrapped text goes here[/class]` (substitute "-red" with any of the available styles)
3. Press the "Preview" tab to see what it will look like.

There is a visual reference of available styles at: _/addon/postbox/view/sampler.htm_

While Postbox allows more content than the Facebook version (which is text only), there are limitations due to how Friendica parses BBcode.  

**It is STRONGLY recommended you only use Postboxes with text and emoji.**

BBcodes you CANNOT put inside a Postbox:

* [class] (which means you can’t nest Postboxes)
* [hr]
* [h1],[h2],[h3], etc…
* [table],[tr],[th],[td]
* [list],[ul],[ol]
* [abstract]
* [spoiler]
* [map]
* [code]

BBcodes that do not work as intended inside a Postbox:

* [pre]
* [noparse]
* [nobb]

The text will show but will be styled and centered.

BBcodes that **CAN BE INSIDE** a Postbox:
* [i], [b], [u], [o], [s] _(bold has no visible effect)_
* [url]
* [img]
* [audio]
* [video]

And any plain text, including emoji

If you are using Markdown formatting what you can and can’t put in a Postbox is similar, with the exception that (because of how Markdown is parsed into BBcode) you can’t have both a URL and an image in the same Postbox. You *can* however put inline `code` in a Postbox with Markdown where BBcode cannot.



### Available Postbox styles

Old names are in parenthesis next to the new names to which they've been mapped.

**Solid Color Backgrounds:**

- .postbox-black
- .postbox-cornflowerblue (.postbox-blue)
- .postbox-darkblue (.postbox-ocean)
- .postbox-darkgray
- .postbox-darkorange (.postbox-orange)
- .postbox-darkred
- .postbox-darkslateblue
- .postbox-forestgreen (.postbox-forest)
- .postbox-gold
- .postbox-goldenrod
- .postbox-honeydew
- .postbox-hotpink
- .postbox-lavender
- .postbox-lightpink
- .postbox-lightyellow
- .postbox-limegreen (.postbox-green)
- .postbox-lightsalmon (.postbox-salmon)
- .postbox-mediumaquamarine
- .postbox-mediumslateblue
- .postbox-mediumvioletred
- .postbox-mintcream
- .postbox-olivedrab
- .postbox-palegreen
- .postbox-peachpuff
- .postbox-pink
- .postbox-purple
- .postbox-red
- .postbox-seagreen
- .postbox-sienna
- .postbox-skyblue
- .postbox-thistle
- .postbox-violet
- .postbox-whitesmoke
- .postbox-yellowgreen


**Gradient Backgrounds:**

- .postbox-aurora
- .postbox-bluegray
- .postbox-graygrey (.postbox-darkgray)
- .postbox-grayblack
- .postbox-greengray
- .postbox-lavendergray
- .postbox-minty
- .postbox-mintgray
- .postbox-rainbow
- .postbox-redblue
- .postbox-sherbet (.postbox-sherbert)
- .postbox-spectrum
- .postbox-strawberrycream
- .postbox-sunset
- .postbox-tealblue
- .postbox-tealgray
- .postbox-violets
- .postbox-violetblue

**Pattern Backgrounds:**

- .postbox-blueprint
- .postbox-birds
- .postbox-checkered
- .postbox-cubes
- .postbox-lemonlime
- .postbox-gingham
- .postbox-grid
- .postbox-hearts
- .postbox-honeycomb
- .postbox-notebook
- .postbox-plaid
- .postbox-polkadots
- .postbox-shadedots
- .postbox-shadowbox
- .postbox-stars
- .postbox-warpgrid
- .postbox-wavy

**Animated Backgrounds:**
These are ONLY available on servers with the _Postbox_ or _Zen Postbox_ add-on installed.

- .postbox-anigradient
- .postbox-blob
- .postbox-colorfade
- .postbox-gridrunner
- .postbox-heartbeat
- .postbox-moonrise
- .postbox-rainy
- .postbox-rocket
- .postbox-snowy
- .postbox-sunrise
- .postbox-waves


## Known Issues

- Postboxes are not shown on other platforms when your post is shared.
- Postboxes are not shown in third-party apps (at least none do yet)
- Some of the animated backgrounds have glitches in older WebKit browsers
- Currently Postbox BBcode is not parsed correctly by either Diaspora or Hubzilla

## Changelog
1.2 (24 June 2025)
* Changed stylesheet URL so it no longer appends Friendica version but addon version. This also makes the addon compatible with the 2025 dev version of Friendica.

1.1 (28 April 2025)
* Changed names of solid colors to match HTML named colors
* Added 24 new solid colors.
* Added 5 new gradient backgrounds.
* Added 17 new pattern and 11 animated backgrounds.
* Fixed conflict between Postbox and Zen Postbox add-ons [Issue #1]
* Fixed load-order for main stylesheet [Issue #2]

1.0 (25 March 2025)
* Initial Release for Friendica 'Interrupted Fern' 2024.12

## Authors and acknowledgment
Random Penguin <https://gitlab.com/randompenguin>

## License
AGPL

## Project status
Unsupported by Friendica devs.
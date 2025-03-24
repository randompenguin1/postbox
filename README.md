# Postbox

This is a Friendica add-on that adds a stylesheet to the HEAD element to support showing Postbox styling.

It does not add any interface for creating Postboxes, but users can still create them with BBcode.

_**NOTE:** Support for Postbox is built into Bookface 1.6+. This adddon adds support to Friendica regardless of what theme/scheme is being used._

## Getting started

1. Place the "postbox" folder in your _friendica/addons_ subfolder.
2. Go to the Main _Menu > Admin > Addons_ and enable "Postbox"
3. Any posts using Postbox will now display the colorful backgrounds.

## Using Zen Postbox

1. Open the message Compose modal or Page
2. Type `[class=postbox-red]Wrapped text goes here[/class]` (substitute "-red" with any of the available styles)
3. Press the "Preview" tab to see what it will look like.

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

**Solid Color Backgrounds:**

- .postbox-black
- .postbox-red
- .postbox-green
- .postbox-blue
- .postbox-orange
- .postbox-purple
- .postbox-forest
- .postbox-ocean
- .postbox-pink
- .postbox-salmon


**Gradient Backgrounds:**

- .postbox-darkgray
- .postbox-minty
- .postbox-mintgray
- .postbox-redblue
- .postbox-violets
- .postbox-grayblack
- .postbox-tealblue
- .postbox-greengray
- .postbox-tealgray
- .postbox-bluegray
- .postbox-lavendergray
- .postbox-sunset
- .postbox-sherbert



## Known Issues

- Postboxes are not shown on other platforms when your post is shared.
- Postboxes are not shown in third-party apps (at least none do yet)

## Changelog
1.0 (24 March 2025)
* Initial Release for Friendica 'Interrupted Fern' 2024.12

## Authors and acknowledgment
Random Penguin <https://gitlab.com/randompenguin>

## License
AGPL

## Project status
Unsupported by Friendica devs.
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
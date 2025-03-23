# Postbox

This is a Friendica add-on that adds a stylesheet to the HEAD element to support showing Postbox styling.

It does not add any interface for creating Postboxes, but users can still create them with BBcode:

```[class=postbox-red]Wrapped text goes here[/class]

## Getting started

1. Place the "postbox" folder in your _friendica/addons_ subfolder.
2. Go to the Main _Menu > Admin > Addons_ and enable "Postbox"
3. Any posts using Postbox will now display the colorful backgrounds.

## Using Zen Postbox

1. Open the message Compose modal or Page
2. Type [class=postbox-red]Wrapped text goes here[/class] (substitute "-red" with any of the available styles)
3. Press the "Preview" tab to see what it will look like.

## Known Issues

- Postboxes are not shown on other platforms when your post is shared.
- Postboxes are not shown in third-party apps (at least none do yet)

## Changelog
1.0 (23 March 2025)
* Initial Release for Friendica 'Interrupted Fern' 2024.12

## Authors and acknowledgment
Random Penguin <https://gitlab.com/randompenguin>

## License
Assuming AGPL for add-ons since that's the license Friendica is under

## Project status
Unsupported by Friendica devs.
<?php
/**
 * Name: Postbox
 * Description: Adds support for showing Postbox backgrounds but does NOT add an interface for making them (but users can still make them with BBcode)
 * Version: 1.0
 * Author: Random Penguin <https://gitlab.com/randompenguin>
 */

use Friendica\Core\Hook;
use Friendica\DI;

function postbox_install()
{
	Hook::register('head', __FILE__, 'postbox_head');
}
function postbox_head(string &$b)
{	
	// Add Postbox Styling to Header
	$box_styles = __DIR__ . '/postbox.min.css';
	DI::page()->registerStylesheet($box_styles);
}
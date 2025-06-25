<?php
/**
 * Name: Postbox
 * Description: Adds support for showing Postbox backgrounds but does NOT add an interface for making them (but users can still make them with BBcode)
 * Version: 1.2
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
	/* Check if zen_postbox is active first, only do this if it is not */
	if (!function_exists('zen_postbox_install')){	
		/* Add Postbox Styling to Header
		   DI::page()->registerStylesheet($path) might load before theme
		   so we will append to $b to make it load much much later
		*/
		$path = __DIR__ . '/view/postbox.min.css?v=1.2';	
		if (mb_strpos($path, DI::basePath() . DIRECTORY_SEPARATOR) === 0) {
			$path = mb_substr($path, mb_strlen(DI::basePath() . DIRECTORY_SEPARATOR));
		}
		$b .= '<link rel="stylesheet" href="'.$path.'" media="screen"/>';
	}
}
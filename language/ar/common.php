<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package.
 * Arabic translation by yasseron (https://tajribaty.com/phpbb)
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ADBLOCKER_TITLE'	=> 'تم اكتشاف ماع إعلانات',
	'ADBLOCKER_MESSAGE'	=> 'نحن ندفع تكاليف موقعنا من عائدات الإعلانات. من فضلك قم بدعمنا بتعطيل مانع الإعلانات في موقعنا.',

	'ADVERTISEMENT'		=> 'إعلان',
	'HIDE_AD'			=> 'إخفاء الإعلان',
));

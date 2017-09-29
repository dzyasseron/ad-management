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
	'ACP_PHPBB_ADS_TITLE'	=> 'إدارة الإعلانات',
	'ACP_MANAGE_ADS_TITLE'		=> 'إدارة الإعلان',
	'ACP_ADS_SETTINGS_TITLE'	=> 'إعدادات',

	'ACP_PHPBB_ADS_ADD_LOG'		=> '<strong>أُضيف الإعلان</strong><br />» %s',
	'ACP_PHPBB_ADS_EDIT_LOG'		=> '<strong>عُدّل الإعلان</strong><br />» %s',
	'ACP_PHPBB_ADS_DELETE_LOG'	=> '<strong>حُذف الإعلان</strong><br />» %s',
));

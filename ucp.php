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
	'AD_NAME'	=> 'إسم',
	'AD_VIEWS'	=> 'مشاهدات',
	'AD_CLICKS'	=> 'نقرات',
	'NO_ADS'	=> '<strong>لا توجد إعلانات للعرضها. الأعضاء الذين لديهم إعلانات في هذا المنتدى يمكنهم مشاهدة الإحصائيات هنا.</strong>',
));

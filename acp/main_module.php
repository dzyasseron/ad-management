<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbb\admanagement\acp;

/**
 * Advertisement management ACP module.
 */
class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $phpbb_container;

		/** @var \phpbb\admanagement\controller\admin_controller $admin_controller */
		$admin_controller = $phpbb_container->get('phpbb.admanagement.admin.controller');

		// Make the $u_action url available in the admin controller
		$admin_controller->set_page_url($this->u_action);

		// Load a template from adm/style for our ACP page
		$this->tpl_name = 'manage_ads';

		// Set the page title for our ACP page
		$this->page_title = $admin_controller->get_page_title();

		switch ($admin_controller->get_action())
		{
		}

		$admin_controller->list_ads();
	}
}

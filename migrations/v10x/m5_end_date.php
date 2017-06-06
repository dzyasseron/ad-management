<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbb\admanagement\migrations\v10x;

/**
* Migration stage 1: Initial schema
*/
class m5_end_date extends \phpbb\db\migration\migration
{
	/**
	* {@inheritDoc}
	*/
	public function effectively_installed()
	{
		return $this->db_tools->sql_column_exists($this->table_prefix . 'ads', 'end_date');
	}

	/**
	* {@inheritDoc}
	*/
	static public function depends_on()
	{
		return array('\phpbb\admanagement\migrations\v10x\m4_indexes');
	}

	/**
	* Add the end date to ads table
	*
	* @return array Array of table schema
	* @access public
	*/
	public function update_schema()
	{
		return array(
			'add_columns' => array(
				$this->table_prefix . 'ads' => array(
					'end_date' => array('TIMESTAMP', 0),
				),
			),
		);
	}

	/**
	* Drop the end date from ads table
	*
	* @return array Array of table schema
	* @access public
	*/
	public function revert_schema()
	{
		return array(
			'drop_columns' => array(
				$this->table_prefix . 'ads' => array(
					'end_date',
				),
			),
		);
	}
}

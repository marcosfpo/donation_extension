<?php
/**
*
* @package phpBB Extension - phpBB Paypal Donation
* @copyright (c) 2015 marcosfpo
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace marcosfpo\donation\migrations;

class donation_module extends \phpbb\db\migration\migration
{

	public function update_data()
	{
		return array(
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_DONATION_MOD')),
			array('module.add', array(
			'acp', 'ACP_DONATION_MOD', array(
				'module_basename' => '\marcosfpo\donation\acp\donation_module', 
				'modes' => array('configuration', 'donations'),
				),
			)),
		);
	}
}
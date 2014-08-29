<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * @package		Vkgroup
 * @category            Widgets
 * @author		P.Masyukov
 */
class Model_Widget_Vkgroup extends Model_Widget_Decorator {

	public function fetch_data()
	{
		$plugin = Plugins::get_registered('vkgroup');
		
		return array(
			'plugin' => $plugin
		);
	}
}
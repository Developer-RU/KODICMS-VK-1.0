<?php

/**
 * @Описание класса "vkgroup"
 * 
 * -------
 * 
 * @Разработчик Павел
 * @Дата создания 29.08.2014
 * 
 * 
 */
class Model_Widget_Vkgroup extends Model_Widget_Decorator{

	public function fetch_data()
	{
		$plugin = Plugins::get_registered('vkgroup');
		
		return array(
			'plugin' => $plugin
		);
	}

}

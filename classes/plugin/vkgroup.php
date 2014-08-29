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
class Plugin_Vkgroup extends Plugin_Decorator {

 
    public function rules()
    {
        return array(
            'vkgroup_id' => array(
                array('not_empty'),
                array('min_length', array(':value', 3)),
                array('max_length', array(':value', 20)),
                array('alpha_dash', array(':value', 'vkgroup_id')),
            ),
            'vkgroup_width' => array(
                array('not_empty'),
                array('numeric'),
                
            ),
            
            'vkgroup_height' => array(
                array('not_empty'),
                array('numeric'),
            ),
            
            'vkgroup_bgcolor' => array(
                array('not_empty'),
                array('exact_length', array(':value', 7)),
                array('color',  array(':value', 'vkgroup_bgcolor')),
            ),
            'vkgroup_textcolor' => array(
                array('not_empty'),
                array('exact_length', array(':value', 7)),
                array('color',  array(':value', 'vkgroup_textcolor')),
            ),
            'vkgroup_btncolor' => array(
                array('not_empty'),
                array('exact_length', array(':value', 7)),
                array('color',  array(':value', 'vkgroup_btncolor')),
            ),
        );
    }
}

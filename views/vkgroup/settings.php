<?php

/**
 * @Описание файла: "vkgroup"
 * 
 * -------
 * 
 * Виджет Вконтакте - KodiCms
 * 
 * -------
 * @Разработчик Масюков Павел
 * @Дата создания 29.08.2014
 * @Email p.masyukov@yandex.ru
 * @URL https://github.com/Developer-RU
 * 
 */

?>

<link href="/cms/plugins/vkgroup/vendor/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<div class="widget-header">
    <h3><?php echo __('Settings'); ?></h3>
</div>    

<div class="row-fluid">
    
    <div class="span5">	
        <div class="control-group">
            
            <br>            
            <div class="controls">
                <?php echo Form::input('setting[group]', $plugin->get('group'), array('id' => 'setting_group')); ?>
                <?php echo Arr::get($plugin->labels(), 'group'); ?>
            </div> 

            <hr class="divider">

            <div class="controls">
                <?php echo Form::radio('setting[type]', 0, (($plugin->get('type') == 0) ? TRUE : FALSE), array( 'id' => 'setting_type' )) . "&#160;&#160;&#160;"; ?>
                <?php echo Arr::get($plugin->labels(), 'users'); ?>                               
                <?php echo Form::radio('setting[type]', 1, (($plugin->get('type') == 1) ? TRUE : FALSE), array( 'id' => 'setting_type' )) . "&#160;&#160;&#160;"; ?>
                <?php echo Arr::get($plugin->labels(), 'news'); ?>                    
            </div>

            <hr class="divider">
             
            <div class="controls">
                <?php echo Form::input('setting[width]', $plugin->get('width'), array( 'id' => 'setting_width' )); ?>
                <?php echo Arr::get($plugin->labels(), 'width'); ?>
            </div><br>
            
            <div class="controls">
                <?php echo Form::input('setting[height]', $plugin->get('height'), array('id' => 'setting_height')); ?>
                <?php echo Arr::get($plugin->labels(), 'height'); ?>
            </div>
            
            <hr class="divider">
            
            <div class="controls">
                <?php echo Form::input('setting[bgcolor]', $plugin->get('bgcolor'), array('id' => 'setting_bgcolor')); ?>
                <?php echo Arr::get($plugin->labels(), 'bgcolor'); ?>
            </div><br>
            
            <div class="controls">
                <?php echo Form::input('setting[textcolor]', $plugin->get('textcolor'), array('id' => 'setting_textcolor')); ?>
                <?php echo Arr::get($plugin->labels(), 'textcolor'); ?>
            </div><br>
            
            <div class="controls">
                <?php echo Form::input('setting[btncolor]', $plugin->get('btncolor'), array('id' => 'setting_btncolor')); ?>
                <?php echo Arr::get($plugin->labels(), 'btncolor'); ?>
            </div>

        </div>
    </div> 
    <div class="span7">	
        <br>
        
        <script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>
        <!-- VK Widget -->
        <div id="vk_groups"></div>
        <script type="text/javascript">
        VK.Widgets.Group("vk_groups", {
                mode: <?php echo $plugin->get('type'); ?>,
                width: "<?php echo $plugin->get('width'); ?>",
                height: "<?php echo $plugin->get('height'); ?>", 
                color1: "<?php echo $plugin->get('bgcolor'); ?>", 
                color2: "<?php echo $plugin->get('textcolor'); ?>", 
                color3: "<?php echo $plugin->get('btncolor'); ?>"
            }, <?php echo $plugin->get('group'); ?>);
        </script>
        <noscript>Please enable JavaScript to view the widget Vkgroup.</a></noscript><br>

        <p><b>Написать разработчику:  </b>   <a href="mailto:p.masyukov@yandex.ru" class="dsq-brlink">p.masyukov@yandex.ru</a></p>
        <p><b>Последняя версия с GitHub: </b>   <code>https://github.com/Developer-RU/Kodicms-plugin-vkgroup.git</code></p>
        
        <br>
    </div>
</div>

<script>
    $(function() {
        $('#setting_bgcolor').colorpicker();
        $('#setting_textcolor').colorpicker();
        $('#setting_btncolor').colorpicker();
    });
</script>
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/cms/plugins/vkgroup/vendor/colorpicker/js/bootstrap-colorpicker.js"></script>
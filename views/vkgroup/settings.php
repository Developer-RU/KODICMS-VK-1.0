<link href="/cms/plugins/vkgroup/vendor/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

<div class="widget-header">
    <h3><?php echo __('Settings widget Vkontakte Group'); ?></h3>
</div>    
<div class="row-fluid">
    <div class="span4">	
        <div class="control-group">
            <br>
            <?php echo Form::label('setting_vkgroup_id', __('Vkgroup ID'), array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo Form::input('setting[vkgroup_id]', $plugin->get('vkgroup_id'), array(
                    'id' => 'setting_vkgroup_id', 'class' => ''
                ));
                ?>
            </div> 

            <hr class="divider">

            <div class="controls">
                <?php
                echo Form::radio('setting[type_widget]', 0, (($plugin->get('type_widget') == 0) ? TRUE : FALSE), 
                        array(
                            'id' => 'setting_type_widget', 'class' => ''
                        )) . "&#160;&#160;&#160;";
                echo Form::label('setting_type_widget', __('Участники'), array('class' => 'label')) . "&#160;&#160;&#160;";

       
                                
                echo Form::radio('setting[type_widget]', 1, (($plugin->get('type_widget') == 1) ? TRUE : FALSE), array(
                    'id' => 'setting_type_widget', 'class' => ''
                )) . "&#160;&#160;&#160;";
                echo Form::label('setting_type_widget', __('Новости'), array('class' => 'label')) . "&#160;&#160;&#160;";
                ?> 
            </div>

            <hr class="divider">

            <?php echo Form::label('setting_vkgroup_width', __('Width Widget VK'), array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo Form::input('setting[vkgroup_width]', $plugin->get('vkgroup_width'), array(
                    'id' => 'setting_vkgroup_width', 'class' => '', 'value' => '600'
                ));
                ?>
            </div>

            <br>

            <?php echo Form::label('setting_vkgroup_height', __('Height Widget VK'), array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo Form::input('setting[vkgroup_height]', $plugin->get('vkgroup_height'), array(
                    'id' => 'setting_vkgroup_height', 'class' => '', 'value' => '400'
                ));
                ?>
            </div>

            <hr class="divider">

            <?php echo Form::label('setting_vkgroup_bgcolor', __('Background color VK'), array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo Form::input('setting[vkgroup_bgcolor]', $plugin->get('vkgroup_bgcolor'), array(
                    'id' => 'setting_vkgroup_bgcolor', 'class' => 'vkgroup_bgcolor', 'value' => '#262626'
                ));
                ?>
            </div>

            <br>

            <?php echo Form::label('setting_vkgroup_textcolor', __('Text Color VK'), array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo Form::input('setting[vkgroup_textcolor]', $plugin->get('vkgroup_textcolor'), array(
                    'id' => 'setting_vkgroup_textcolor', 'class' => 'vkgroup_textcolor', 'value' => '#ffffff'
                ));
                ?>
            </div>

            <br>

            <?php echo Form::label('setting_vkgroup_btncolor', __('Color buttons VK'), array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo Form::input('setting[vkgroup_btncolor]', $plugin->get('vkgroup_btncolor'), array(
                    'id' => 'setting_vkgroup_btncolor', 'class' => 'vkgroup_btncolor', 'value' => '#ff0000'
                ));
                ?>
            </div>

        </div>
    </div> 

    <div class="span8">	
        <br>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>
<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {
        mode: <?php echo $plugin->get('type_widget'); ?>,
        width: "<?php echo $plugin->get('vkgroup_width'); ?>",
        height: "<?php echo $plugin->get('vkgroup_height'); ?>", 
        color1: "<?php echo $plugin->get('vkgroup_bgcolor'); ?>", 
        color2: "<?php echo $plugin->get('vkgroup_textcolor'); ?>", 
        color3: "<?php echo $plugin->get('vkgroup_btncolor'); ?>"
    }, <?php echo $plugin->get('vkgroup_id'); ?>);
</script>
<noscript>Please enable JavaScript to view the widget Vkgroup.</a></noscript><br>
<p><b>Написать разработчику:  </b>   <a href="mailto:p.masyukov@yandex.ru" class="dsq-brlink">p.masyukov@yandex.ru</a></p>
<p><b>Последняя версия с GitHub: </b>   <code>https://github.com/Developer-RU/Kodicms-plugin-vkgroup.git</code></p>
        <br>
    </div>
</div>
<script>
    $(function() {
        $('.vkgroup_bgcolor').colorpicker();
    });
    $(function() {
        $('.vkgroup_textcolor').colorpicker();
    });
    $(function() {
        $('.vkgroup_btncolor').colorpicker();
    });
</script>

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/cms/plugins/vkgroup/vendor/colorpicker/js/bootstrap-colorpicker.js"></script>
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
<b>Developer:</b> <a href="mailto:p.masyukov@yandex.ru" class="dsq-brlink">p.masyukov@yandex.ru</a><br>
<br>
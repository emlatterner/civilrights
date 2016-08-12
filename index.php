<?php echo head(array('bodyid'=>'home')); ?>

<?php fire_plugin_hook('public_append_to_home', array('view' => $this)); ?>

<?php echo foot(); ?>

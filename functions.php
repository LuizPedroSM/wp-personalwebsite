<?php 

// Include
require get_template_directory().'/include/setup.php';

// Hooks
add_action("wp_enqueue_scripts", "lpw_theme_styles");
add_action("after_setup_theme", "lpw_after_setup");
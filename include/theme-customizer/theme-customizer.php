<?php 

require get_template_directory().'/include/theme-customizer/social.php';
require get_template_directory().'/include/theme-customizer/info.php';
require get_template_directory().'/include/theme-customizer/color.php';

function lpw_customize_register($wp_customize)
{
    lpw_social_customizer($wp_customize);
    lpw_info_customizer($wp_customize);
    lpw_color_customizer($wp_customize);
}
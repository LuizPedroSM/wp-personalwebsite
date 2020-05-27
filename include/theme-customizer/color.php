<?php 

function lpw_color_customizer($wp_customize)
{
    // Settings
    $wp_customize->add_setting('lpw_color', array('default' => '#ccc'));

    // Sections
    $wp_customize->add_section('lpw_color_section', array(
        'title' => 'Cor Padrão',
        'priority' => '3'
    ));

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'lpw_color',
            array(
                'label' => 'Cor padrão do tema',
                'section' => 'lpw_color_section',
                'settings' => 'lpw_color'
            )
        )
    );
}
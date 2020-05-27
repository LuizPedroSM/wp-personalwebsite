<?php 

function lpw_social_customizer($wp_customize)
{
    // Settings
    $wp_customize->add_setting('lpw_facebook', array('default' => ''));
    $wp_customize->add_setting('lpw_twitter', array('default' => ''));
    $wp_customize->add_setting('lpw_gplus', array('default' => ''));
    $wp_customize->add_setting('lpw_blog', array('default' => ''));

    // Sections
    $wp_customize->add_section('lpw_social_section', array(
        'title' => 'Redes Sociais',
        'priority' => '1'
    ));
    
    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lpw_facebook',
            array(
                'label' => 'Link do Facebook',
                'section' => 'lpw_social_section',
                'settings' => 'lpw_facebook',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lpw_twitter',
            array(
                'label' => 'Link do Twitter',
                'section' => 'lpw_social_section',
                'settings' => 'lpw_twitter',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lpw_gplus',
            array(
                'label' => 'Link do Google Plus',
                'section' => 'lpw_social_section',
                'settings' => 'lpw_gplus',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lpw_blog',
            array(
                'label' => 'Link do Blog',
                'section' => 'lpw_social_section',
                'settings' => 'lpw_blog',
                'type' => 'text'
            )
        )
    );
}
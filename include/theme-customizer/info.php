<?php 

function lpw_info_customizer($wp_customize)
{
    // Settings
    $wp_customize->add_setting('lpw_idade', array('default' => ''));
    $wp_customize->add_setting('lpw_endereco', array('default' => ''));
    $wp_customize->add_setting('lpw_email', array('default' => ''));
    $wp_customize->add_setting('lpw_telefone', array('default' => ''));
    $wp_customize->add_setting('lpw_site', array('default' => ''));

    // Sections
    $wp_customize->add_section('lpw_info_section', array(
        'title' => 'Informações Pessoais',
        'priority' => '2'
    ));

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lpw_idade',
            array(
                'label' => 'Idade',
                'section' => 'lpw_info_section',
                'settings' => 'lpw_idade',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lpw_endereco',
            array(
                'label' => 'Endereço',
                'section' => 'lpw_info_section',
                'settings' => 'lpw_endereco',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lpw_email',
            array(
                'label' => 'Email',
                'section' => 'lpw_info_section',
                'settings' => 'lpw_email',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lpw_telefone',
            array(
                'label' => 'Telefone',
                'section' => 'lpw_info_section',
                'settings' => 'lpw_telefone',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lpw_site',
            array(
                'label' => 'Site',
                'section' => 'lpw_info_section',
                'settings' => 'lpw_site',
                'type' => 'text'
            )
        )
    );
}
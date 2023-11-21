<?php

/** Customize CTA */
function cta_customize_register($wp_customize) {
    /**
     * Section Hero
     */
    $wp_customize->add_section('section_cta', array(
        'title' => __('CTA', 'theminded'),
        'priority' => 30,
    ));

    /**
     * Hero Display Text
     */
    $wp_customize->add_setting('cta_display_setting', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('cta_display_control', array(
        'label' => __('Heading CTA', 'theminded'),
        'section' => 'section_cta',
        'settings' => 'cta_display_setting',
        'type' => 'code',
        'input_attrs' => array(
            'style' => 'width: 100%;',
        ),
    ));

    /**
     * CTA Paragraph
     */
    $wp_customize->add_setting('cta_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cta_control', array(
        'label' => __('CTA Paragraph', 'theminded'),
        'section' => 'section_cta',
        'settings' => 'cta_setting',
        'type' => 'text',
    ));

    /**
     * CTA Image
     */
    $wp_customize->add_setting('cta_image_setting', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image_control', array(
        'label' => __('CTA Image', 'theminded'),
        'section' => 'section_cta',
        'settings' => 'cta_image_setting',
    )));

    /**
     * Hero Button Title
     */
    $wp_customize->add_setting('cta_title_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cta_title_control', array(
        'label' => __('Button', 'theminded'),
        'section' => 'section_cta',
        'settings' => 'cta_title_setting',
        'type' => 'text',
    ));

    /**
     * Hero Button Link
     */
    $wp_customize->add_setting('cta_button_setting', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('hero_button_control', array(
        'label' => __('Button Link', 'theminded'),
        'section' => 'section_cta',
        'settings' => 'cta_button_setting',
        'type' => 'url',
    ));

    
}

?>
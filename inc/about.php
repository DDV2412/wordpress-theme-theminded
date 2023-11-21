<?php


/** Customize About Page Dynamic Data */
function about_customize_register($wp_customize) {
    /**
     * Section Hero
     */
    $wp_customize->add_section('section_hero-about', array(
        'title' => __('About Page', 'theminded'),
        'priority' => 30,
    ));

    /**
     * Hero Display Text
     */
    $wp_customize->add_setting('heading_display_setting', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('heading_display_control', array(
        'label' => __('Heading Display', 'theminded'),
        'section' => 'section_hero-about',
        'settings' => 'heading_display_setting',
        'type' => 'code',
        'input_attrs' => array(
            'style' => 'width: 100%;',
        ),
    ));

    /**
     * Hero Paragraph
     */
    $wp_customize->add_setting('paragraph_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('paragraph_control', array(
        'label' => __('Hero Paragraph', 'theminded'),
        'section' => 'section_hero-about',
        'settings' => 'paragraph_setting',
        'type' => 'text',
    ));

    /**
     * Hero Image
     */
    $wp_customize->add_setting('hero_bg_setting', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_bg_control', array(
        'label' => __('Hero BG', 'theminded'),
        'section' => 'section_hero-about',
        'settings' => 'hero_bg_setting',
    )));

}

?>
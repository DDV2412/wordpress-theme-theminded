
<?php
include get_template_directory() . '/inc/the-minded.php';

add_action('admin_menu', 'add_therapist_menu');

function custom_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'custom_theme_support');

function custom_customize_register($wp_customize) {
    /**
     * Section Hero
     */
    $wp_customize->add_section('section_header', array(
        'title' => __('Hero', 'theminded'),
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
        'section' => 'section_header',
        'settings' => 'heading_display_setting',
        'type' => 'code',
        'input_attrs' => array(
            'style' => 'width: 100%;',
        ),
    ));

    /**
     * Hero Tagline
     */
    $wp_customize->add_setting('tagline_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('tagline_control', array(
        'label' => __('Hero Tagline', 'theminded'),
        'section' => 'section_header',
        'settings' => 'tagline_setting',
        'type' => 'text',
    ));

    /**
     * Hero Image
     */
    $wp_customize->add_setting('hero_image_setting', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image_control', array(
        'label' => __('Hero Image', 'theminded'),
        'section' => 'section_header',
        'settings' => 'hero_image_setting',
    )));

    /**
     * Hero Button Title
     */
    $wp_customize->add_setting('hero_title_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title_control', array(
        'label' => __('Button', 'theminded'),
        'section' => 'section_header',
        'settings' => 'hero_title_setting',
        'type' => 'text',
    ));

    /**
     * Hero Button Link
     */
    $wp_customize->add_setting('hero_button_setting', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('hero_button_control', array(
        'label' => __('Button Link', 'theminded'),
        'section' => 'section_header',
        'settings' => 'hero_button_setting',
        'type' => 'url',
    ));

    /**
     * Section Journey
     */
    $wp_customize->add_section('section_journey', array(
        'title' => __('Mental Health Journey', 'theminded'),
        'priority' => 30,
    ));

    /**
     * Hero Display Text
     */
    $wp_customize->add_setting('section_title_setting', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('section_title_control', array(
        'label' => __('Section Title', 'theminded'),
        'section' => 'section_journey',
        'settings' => 'section_title_setting',
        'type' => 'code',
        'input_attrs' => array(
            'style' => 'width: 100%;',
        ),
    ));

    /**
     * Add 3 Step Journey
     */
    $wp_customize->add_setting('services_setting', array(
        'default' => array(),
        'sanitize_callback' => 'your_custom_sanitization_function',
        'type' => 'option', 
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'services_control', array(
        'label' => __('3 Step to Start', 'theminded'),
        'section' => 'section_journey',
        'settings' => 'services_setting',
        'type' => 'textarea', 
    )));

    /**
     * Section Button Title Journey
     */
    $wp_customize->add_setting('section_title_journey', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_title_journey', array(
        'label' => __('Button', 'theminded'),
        'section' => 'section_journey',
        'settings' => 'section_title_journey',
        'type' => 'text',
    ));

    /**
     * Section Button Link Journey
     */
    $wp_customize->add_setting('section_button_journey', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('section_button_journey', array(
        'label' => __('Button Link', 'theminded'),
        'section' => 'section_journey',
        'settings' => 'section_button_journey',
        'type' => 'url',
    ));
}

function your_custom_sanitization_function($input) {
    return json_decode($input, true);
}

add_action('customize_register', 'custom_customize_register');


function custom_sanitize_services($input) {
    $sanitized_input = array();

    if (is_array($input)) {
        foreach ($input as $key => $value) {
            $sanitized_input[$key]['icon'] = sanitize_text_field($value['icon']);
            $sanitized_input[$key]['title'] = sanitize_text_field($value['title']);
            $sanitized_input[$key]['paragraph'] = sanitize_text_field($value['paragraph']);
        }
    }

    return $sanitized_input;
}

add_action('customize_register', 'custom_customize_register');



function theme_enqueue_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.4', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . "/assets/javascripts/main.js", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

// functions.php

function custom_about_page_template($template) {
    global $wp_query;

    if (is_page('about')) {
        $new_template = locate_template(array('templates/about.php'));

        if (!empty($new_template)) {
            return $new_template;
        }
    }

    return $template;
}

add_filter('template_include', 'custom_about_page_template');

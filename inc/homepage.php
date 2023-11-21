<?php


/** Customize Home Page Dynamic Data */
function homepage_customize_register($wp_customize) {
    /**
     * Section Hero
     */
    $wp_customize->add_section('section_header', array(
        'title' => __('Home Page Hero', 'theminded'),
        'priority' => 30,
    ));

    /**
     * Hero Display Text
     */
    $wp_customize->add_setting('heading_hero_display_setting', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('heading_hero_display_control', array(
        'label' => __('Heading Display', 'theminded'),
        'section' => 'section_header',
        'settings' => 'heading_hero_display_setting',
        'type' => 'code',
        'input_attrs' => array(
            'style' => 'width: 100%;height: 2rem',
        ),
    ));

    /**
     * Hero Tagline
     */
    $wp_customize->add_setting('heading_hero_tagline_setting', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('heading_hero_tagline_control', array(
        'label' => __('Hero Tagline', 'theminded'),
        'section' => 'section_header',
        'settings' => 'heading_hero_tagline_setting',
        'type' => 'code',
        'input_attrs' => array(
            'style' => 'width: 100%;height: 2rem',
        ),
    ));

    /**
     * Hero Image
     */
    $wp_customize->add_setting('heading_hero_image_setting', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'heading_hero_image_control', array(
        'label' => __('Hero Image', 'theminded'),
        'section' => 'section_header',
        'settings' => 'heading_hero_image_setting',
    )));

    /**
     * Hero Button Title
     */
    $wp_customize->add_setting('heading_hero_button_title_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('heading_hero_button_title_control', array(
        'label' => __('Home CTA', 'theminded'),
        'section' => 'section_header',
        'settings' => 'heading_hero_button_title_setting',
        'type' => 'text',
    ));

    /**
     * Hero Button Link
     */
    $wp_customize->add_setting('heading_hero_link_setting', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('heading_hero_link_control', array(
        'label' => __('CTA Link', 'theminded'),
        'section' => 'section_header',
        'settings' => 'heading_hero_link_setting',
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
    $wp_customize->add_setting('section_journey_title_setting', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('section_journey_title_control', array(
        'label' => __('Journey Heading', 'theminded'),
        'section' => 'section_journey',
        'settings' => 'section_journey_title_setting',
        'type' => 'code',
        'input_attrs' => array(
             'style' => 'width: 100%;height: 2rem',
        ),
    ));

    /**
     * Add 3 Step Journey
     */
    $wp_customize->add_setting('section_journey_services_setting', array(
        'default' => array(),
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_journey_services_control', array(
        'label' => __('3 Step to Start', 'theminded'),
        'section' => 'section_journey',
        'settings' => 'section_journey_services_setting',
        'type' => 'textarea',
    )));

    /**
     * Section Button Title Journey
     */
    $wp_customize->add_setting('section_journey_button_journey_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_journey_button_journey_control', array(
        'label' => __('Button', 'theminded'),
        'section' => 'section_journey',
        'settings' => 'section_journey_button_journey_setting',
        'type' => 'text',
    ));

    /**
     * Section Button Link Journey
     */
    $wp_customize->add_setting('section_journey_button_link_journey_setting', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('section_journey_button_link_journey_control', array(
        'label' => __('Button Link', 'theminded'),
        'section' => 'section_journey',
        'settings' => 'section_journey_button_link_journey_setting',
        'type' => 'url',
    ));


     /**
     * Section Choose
     */
    $wp_customize->add_section('section_choose', array(
        'title' => __('Why Choose us', 'theminded'),
        'priority' => 30,
    ));

    /**
     * Choose Heading
     */
    $wp_customize->add_setting('section_choose_setting', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('section_choose_control', array(
        'label' => __('Choose Heading', 'theminded'),
        'section' => 'section_choose',
        'settings' => 'section_choose_setting',
        'type' => 'code',
        'input_attrs' => array(
             'style' => 'width: 100%;height: 2rem',
        ),
    ));

    /**
     * Choose Card
     */
    $wp_customize->add_setting('section_choose_services_setting', array(
        'default' => array(),
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_choose_services_control', array(
        'label' => __('Choose Services', 'theminded'),
        'section' => 'section_choose',
        'settings' => 'section_choose_services_setting',
        'type' => 'textarea',
    )));

    /**
     * Section Button Title Choose
     */
    $wp_customize->add_setting('section_title_journey', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_title_journey', array(
        'label' => __('Button', 'theminded'),
        'section' => 'section_choose',
        'settings' => 'section_title_journey',
        'type' => 'text',
    ));

    /**
     * Section Button Link Choose
     */
    $wp_customize->add_setting('section_button_journey', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('section_button_journey', array(
        'label' => __('Button Link', 'theminded'),
        'section' => 'section_choose',
        'settings' => 'section_button_journey',
        'type' => 'url',
    ));

    /**
     * Section Directory
     */
    $wp_customize->add_section('section_directory', array(
        'title' => __('Discover your Therapist', 'theminded'),
        'priority' => 30,
    ));

    /**
     * Directory Heading
     */
    $wp_customize->add_setting('section_directory_title_setting', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('section_directory_title_control', array(
        'label' => __('Directory Heading', 'theminded'),
        'section' => 'section_directory',
        'settings' => 'section_directory_title_setting',
        'type' => 'code',
        'input_attrs' => array(
             'style' => 'width: 100%;height: 2rem',
        ),
    ));

      /**
     * Directory Paragraph
     */
    $wp_customize->add_setting('section_directory_tagline_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_directory_tagline_control', array(
        'label' => __('Directory Paragraph', 'theminded'),
        'section' => 'section_directory',
        'settings' => 'section_directory_tagline_setting',
        'type' => 'text',
    ));

    /**
     * Directory Button Title
     */
    $wp_customize->add_setting('section_directory_button_title_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_directory_button_title_control', array(
        'label' => __('Button', 'theminded'),
        'section' => 'section_directory',
        'settings' => 'section_directory_button_title_setting',
        'type' => 'text',
    ));

    /**
     * Directory Button Link
     */
    $wp_customize->add_setting('section_directory_button_link_setting', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('section_directory_button_link_control', array(
        'label' => __('Button Link', 'theminded'),
        'section' => 'section_directory',
        'settings' => 'section_directory_button_link_setting',
        'type' => 'url',
    ));

  
     /**
     * Section Our Story
     */
    $wp_customize->add_section('section_story', array(
        'title' => __('Our Story', 'theminded'),
        'priority' => 30,
    ));

     /**
     * Our Story Heading
     */
    $wp_customize->add_setting('section_story_setting', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('section_story_control', array(
        'label' => __('Our Story Heading', 'theminded'),
        'section' => 'section_story',
        'settings' => 'section_story_setting',
        'type' => 'code',
        'input_attrs' => array(
             'style' => 'width: 100%;height: 2rem',
        ),
    ));

      /**
     * Our Story Paragraph
     */
    $wp_customize->add_setting('section_story_tagline_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_story_tagline_control', array(
        'label' => __('Our Story Paragraph', 'theminded'),
        'section' => 'section_story',
        'settings' => 'section_story_tagline_setting',
        'type' => 'text',
    ));

     /**
     * Our Story Image
     */
    $wp_customize->add_setting('section_story_image_setting', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_story_image_control', array(
        'label' => __('Our Story Image', 'theminded'),
        'section' => 'section_story',
        'settings' => 'section_story_image_setting',
    )));

    /**
     * Our Story Button Title
     */
    $wp_customize->add_setting('section_story_title_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title_control', array(
        'label' => __('Button', 'theminded'),
        'section' => 'section_story',
        'settings' => 'section_story_title_setting',
        'type' => 'text',
    ));

    /**
     * Our Story Button Link
     */
    $wp_customize->add_setting('hero_button_setting', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('hero_button_control', array(
        'label' => __('Button Link', 'theminded'),
        'section' => 'section_story',
        'settings' => 'hero_button_setting',
        'type' => 'url',
    ));


     /**
     * Section Testimonial
     */
    $wp_customize->add_section('section_testimonial', array(
        'title' => __('Testimonial', 'theminded'),
        'priority' => 30,
    ));

    /**
     * Testimonial Heading
     */
    $wp_customize->add_setting('section_title_setting', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('section_title_control', array(
        'label' => __('Testimonial Heading', 'theminded'),
        'section' => 'section_testimonial',
        'settings' => 'section_title_setting',
        'type' => 'code',
        'input_attrs' => array(
             'style' => 'width: 100%;height: 2rem',
        ),
    ));


     
}
?>
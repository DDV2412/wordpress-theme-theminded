
<?php
include get_template_directory() . '/inc/the-minded.php';
include get_template_directory() . '/inc/cta.php';
include get_template_directory() . '/inc/about.php';
include get_template_directory() . '/inc/homepage.php';
include get_template_directory() . '/inc/create_pages.php';
include get_template_directory() . '/inc/create_menus.php';

add_action('admin_menu', 'add_therapist_menu');
add_action('customize_register', 'homepage_customize_register');
add_action('customize_register', 'cta_customize_register');
add_action('customize_register', 'about_customize_register');
add_action('init', 'create_pages');
add_action('init', 'register_custom_menus');
add_action('after_setup_theme', 'create_custom_menus');


/** Add Logo For Navbar */
function custom_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'custom_theme_support');

/** Theme Style and Script */
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

function custom_about_page_template($template) {
    global $wp_query;

    $page_templates = array(
        'about'    => 'templates/about.php',
        'contact'  => 'templates/contact.php',
        'therapist' => 'templates/directory.php',
        'log-in' => 'templates/login.php',
        'sign-up' => 'templates/sign-up.php',
        'privacy-police' => 'templates/privacy_police.php',
        'terms-condition' => 'templates/terms_condition.php',
        'booking' => 'templates/booking.php',
        'booking-success' => 'templates/booking_success.php',
        'payment' => 'templates/payment.php',
        'payment Method' => 'templates/payment_method.php',
        'profile' => 'templates/profile.php',
        'setting' => 'templates/setting.php',
        'appoitment' => 'templates/upcoming_appointment.php',
    );

    $current_page = get_queried_object_id();

    foreach ($page_templates as $page => $template_file) {
        if (is_page($page) && $current_page === get_page_by_path($page)->ID) {
            $new_template = locate_template(array($template_file));

            if (!empty($new_template)) {
                return $new_template;
            }
        }
    }

    return $template;
}

add_filter('template_include', 'custom_about_page_template');

?>
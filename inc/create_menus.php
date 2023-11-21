<?php
function register_custom_menus() {
    register_nav_menus(array(
        'primary-menu' => 'Primary Menu',
        'footer-menu' => 'Footer Menu',
        'sidebar-menu' => 'Sidebar Menu',
    ));
}

function create_custom_menus() {
    /**
     * Primary Menu
     */
    $primary_menu_name = 'Primary';
    $primary_menu_exists = wp_get_nav_menu_object($primary_menu_name);

    if (!$primary_menu_exists) {
        $primary_menu_id = wp_create_nav_menu($primary_menu_name);
        $primary_menu_location = 'primary-menu';
        $locations = get_theme_mod('nav_menu_locations');
        $locations[$primary_menu_location] = $primary_menu_id;
        set_theme_mod('nav_menu_locations', $locations);

        wp_update_nav_menu_item($primary_menu_id, 0, array(
            'menu-item-title' => 'Home',
            'menu-item-url' => home_url('/'),
            'menu-item-status' => 'publish',
        ));

        wp_update_nav_menu_item($primary_menu_id, 0, array(
            'menu-item-title' => 'About Us',
            'menu-item-url' => home_url('/about'),
            'menu-item-status' => 'publish',
        ));

        wp_update_nav_menu_item($primary_menu_id, 0, array(
            'menu-item-title' => 'Contact Us',
            'menu-item-url' => home_url('/contact'),
            'menu-item-status' => 'publish',
        ));

        wp_update_nav_menu_item($primary_menu_id, 0, array(
            'menu-item-title' => 'Therapist Directory',
            'menu-item-url' => home_url('/therapist'),
            'menu-item-status' => 'publish',
        ));
    }

    /**
     * Footer Menu
     */
    $footer_menu_name = 'Footer';
    $footer_menu_exists = wp_get_nav_menu_object($footer_menu_name);

    if (!$footer_menu_exists) {
        $footer_menu_id = wp_create_nav_menu($footer_menu_name);
        $footer_menu_location = 'footer-menu';
        $locations = get_theme_mod('nav_menu_locations');
        $locations[$footer_menu_location] = $footer_menu_id;
        set_theme_mod('nav_menu_locations', $locations);

        wp_update_nav_menu_item($footer_menu_id, 0, array(
            'menu-item-title' => 'Home',
            'menu-item-url' => home_url('/'),
            'menu-item-status' => 'publish',
        ));

        wp_update_nav_menu_item($footer_menu_id, 0, array(
            'menu-item-title' => 'About Us',
            'menu-item-url' => home_url('/about'),
            'menu-item-status' => 'publish',
        ));

        wp_update_nav_menu_item($footer_menu_id, 0, array(
            'menu-item-title' => 'Contact Us',
            'menu-item-url' => home_url('/contact'),
            'menu-item-status' => 'publish',
        ));

        wp_update_nav_menu_item($footer_menu_id, 0, array(
            'menu-item-title' => 'Therapist Directory',
            'menu-item-url' => home_url('/therapist'),
            'menu-item-status' => 'publish',
        ));

         wp_update_nav_menu_item($footer_menu_id, 0, array(
            'menu-item-title' => 'Privacy Police',
            'menu-item-url' => home_url('/privacy-police'),
            'menu-item-status' => 'publish',
        ));

         wp_update_nav_menu_item($footer_menu_id, 0, array(
            'menu-item-title' => 'Terms and Conditions',
            'menu-item-url' => home_url('/terms-conditions'),
            'menu-item-status' => 'publish',
        ));
    }


     /**
     * Sidebar Menu
     */
    $sidebar_menu_name = 'Sidebar Menu';
    $sidebar_menu_exists = wp_get_nav_menu_object($sidebar_menu_name);

    if (!$sidebar_menu_exists) {
        $sidebar_menu_id = wp_create_nav_menu($sidebar_menu_name);
        $sidebar_menu_location = 'sidebar-menu';
        $locations = get_theme_mod('nav_menu_locations');
        $locations[$sidebar_menu_location] = $sidebar_menu_id;
        set_theme_mod('nav_menu_locations', $locations);

        wp_update_nav_menu_item($sidebar_menu_id, 0, array(
            'menu-item-title' => 'Setting',
            'menu-item-url' => home_url('/setting'),
            'menu-item-status' => 'publish',
        ));

        wp_update_nav_menu_item($sidebar_menu_id, 0, array(
            'menu-item-title' => 'Upcoming Appointment',
            'menu-item-url' => home_url('/appoitment'),
            'menu-item-status' => 'publish',
        ));

        wp_update_nav_menu_item($sidebar_menu_id, 0, array(
            'menu-item-title' => 'Profile',
            'menu-item-url' => home_url('/profile'),
            'menu-item-status' => 'publish',
        ));

        wp_update_nav_menu_item($sidebar_menu_id, 0, array(
            'menu-item-title' => 'Booking History',
            'menu-item-url' => home_url('/booking-history'),
            'menu-item-status' => 'publish',
        ));

        wp_update_nav_menu_item($sidebar_menu_id, 0, array(
            'menu-item-title' => 'Payment Method',
            'menu-item-url' => home_url('/payment-method'),
            'menu-item-status' => 'publish',
        ));

    }

   
}


?>

<?php
function register_menus() {
    register_nav_menus(array(
        'primary-menu' => 'Primary Menu',
        'footer-menu' => 'Footer Menu',
        'sidebar-menu' => 'Sidebar Menu',
    ));
}

function create_custom_menus() {
    $menus = array(
        array(
            'name' => 'Primary Menu',
            'location' => 'primary-menu',
            'items' => array(
                array(
                    'title' => 'Home',
                    'object_id' => get_option('page_on_front'),
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
                array(
                    'title' => 'About',
                    'object_id' => get_page_by_path('about')->ID,
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
                array(
                    'title' => 'Contact',
                    'object_id' => get_page_by_path('contact')->ID,
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
                array(
                    'title' => 'Therapist Directory',
                    'object_id' => get_page_by_path('therapist-directory')->ID,
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
                array(
                    'title' => 'Login',
                    'object_id' => get_page_by_path('login')->ID,
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
                array(
                    'title' => 'Sign Up',
                    'object_id' => get_page_by_path('sign-up')->ID,
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
            ),
        ),
        array(
            'name' => 'Footer Menu',
            'location' => 'footer-menu',
            'items' => array(
                array(
                    'title' => 'Home',
                    'object_id' => get_option('page_on_front'),
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
                array(
                    'title' => 'About Us',
                    'object_id' => get_page_by_path('about-us')->ID,
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
                array(
                    'title' => 'Therapist Directory',
                    'object_id' => get_page_by_path('therapist-directory')->ID,
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
                array(
                    'title' => 'Privacy Policy',
                    'object_id' => get_page_by_path('privacy-policy')->ID,
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
                array(
                    'title' => 'Terms and Conditions',
                    'object_id' => get_page_by_path('terms-and-conditions')->ID,
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
            ),
        ),
        array(
            'name' => 'Sidebar Menu',
            'location' => 'sidebar-menu',
            'items' => array(
                array(
                    'title' => 'Profile',
                    'object_id' => get_page_by_path('profile')->ID,
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
                array(
                    'title' => 'Upcoming Appointment',
                    'object_id' => get_page_by_path('upcoming-appointment')->ID,
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
                array(
                    'title' => 'Booking History',
                    'object_id' => get_page_by_path('booking-history')->ID,
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
                array(
                    'title' => 'Payment Method',
                    'object_id' => get_page_by_path('payment-method')->ID,
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
                array(
                    'title' => 'Setting',
                    'object_id' => get_page_by_path('setting')->ID,
                    'object' => 'page',
                    'type' => 'post_type',
                    'status' => 'publish',
                ),
            ),
        ),
    );

    foreach ($menus as $menu) {
        $menu_name = $menu['name'];
        $menu_location = $menu['location'];
        $menu_id = wp_create_nav_menu($menu_name);

        if ($menu_id && !empty($menu_location)) {
            $locations = get_theme_mod('nav_menu_locations');
            $locations[$menu_location] = $menu_id;
            set_theme_mod('nav_menu_locations', $locations);
        }

        foreach ($menu['items'] as $item) {
            wp_update_nav_menu_item($menu_id, 0, $item);
        }
    }
}
?>

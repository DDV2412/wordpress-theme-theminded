<?php
function create_pages() {
    $page_data = array(
        'about'    => 'About Us',
        'contact'  => 'Contact Us',
        'therapist' => 'Therapist Directory',
        'log-in' => 'Login', 
        'sign-up' => 'Sign Up', 
        'privacy-police' => 'Privacy Police', 
        'terms-conditions' => 'Terms and Conditions', 
        'booking' => 'Booking', 
        'booking-success' => 'Booking Success', 
        'booking-history' => 'Booking History', 
        'payment' => 'Payment', 
        'payment-method' => 'Payment Method', 
        'profile' => 'Profile', 
        'setting' => 'Setting', 
        'appoitment' => 'Upcoming Appointment', 
    );

    foreach ($page_data as $slug => $title) {
        if (!get_page_by_path($slug)) {
            $page = array(
                'post_title'   => $title,
                'post_name'    => $slug,
                'post_content' => '',
                'post_status'  => 'publish',
                'post_type'    => 'page',
            );
            $page_id = wp_insert_post($page);

            if ($slug === 'therapist' && $page_id) {
                update_post_meta($page_id, '_wp_page_template', 'templates/single_therapist.php');
            }
        }
    }
}


?>
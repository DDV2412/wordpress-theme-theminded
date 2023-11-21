<?php
function add_therapist_menu() {
    if (current_user_can('manage_options')) {
        add_menu_page(
            'The Minded',        // Menu Title
            'The Minded',        // Menu Label In Sidebar
            'manage_options',   // Permission
            'therapist',        // Slug Menu
            'therapist_page',   // Function Menu Page
            'dashicons-heart',  // Icon menu (Opsional)
            30                  // Menu Order
        );
        add_submenu_page(
            'therapist',        // Slug Primary Menu
            'All Therapists',   // Submenu Title
            'All Therapists',   // Menu Label In Sidebar
            'manage_options',   // Permission
            'therapist_list',   // Slug submenu
            'therapist_list_page' //Function Sub Menu Page
        );
        add_submenu_page(
            null,
            'Therapist Detail',
            'Therapist Detail',
            'manage_options',
            'therapist_detail',
            'therapist_detail_page'
        );
    }
}


function therapist_page() {
    echo '<div class="wrap">';
    echo '<h1>Therapist</h1>';
    echo '<p>Isi konten halaman admin therapist di sini.</p>';
    echo '</div>';
}


function therapist_detail_page() {
    echo '<div class="wrap">';
    echo '<h1>Therapist Detail</h1>';

    $therapist_slug = isset($_GET['therapist']) ? sanitize_text_field($_GET['therapist']) : '';
    if ($therapist_slug) {
        echo '<p>Show details for therapist with slug: ' . esc_html($therapist_slug) . '</p>';
    } else {
        echo '<p>Therapist slug not provided.</p>';
    }

    echo '</div>';
}


?>
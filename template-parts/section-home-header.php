<section class="section_header">
        <div class="container">
            <div class="hero-wrapper">
                <div class="hero-details">
                    <?php
                    $display_header = get_theme_mod('heading_hero_display_setting', 'From Doubt to Clarity: Find Your Therapist with <span class="text-color-primary">The
                                Minded</span>');
                    $tagline_header = get_theme_mod('heading_hero_tagline_setting', 'The Minded offers a user-friendly platform that connects you to therapists tailored to your
                            specific needs. We are here
                            to empower you to start your mental health journey with ease and confidence.');
                    $cta_title = get_theme_mod('heading_hero_button_title_setting', 'Start your Journey');
                    $cta_link = get_theme_mod('heading_hero_link_setting', '/');
                    ?>
                   <h1><?php echo wp_kses_post($display_header) ?></h1>
                    <p><?php echo wp_kses_post($tagline_header) ?></p>
                    <div class="margin-top-small">
                        <a href="<?php echo esc_url_raw($cta_link) ?>" class="button-primary "><?php echo sanitize_text_field($cta_title) ?></a>
                    </div>
                </div>
                <div class="hero-image">
                    <figure class="image-wrapper">
                        <?php
                        $hero_image_url = get_theme_mod('heading_hero_image_setting', 'https://images.unsplash.com/photo-1551836022-b06985bceb24?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
                        ?>
                        <img src="<?php echo esc_url($hero_image_url) ?>" alt="<?php echo esc_attr($display_header)?>" width="468.853px" height="398.803px" aria-label="<?php echo esc_attr($display_header)?>" />
                    </figure>
                </div>
            </div>
        </div>
    </section>
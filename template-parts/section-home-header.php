<section class="section_header">
        <div class="container">
            <div class="hero-wrapper">
                <div class="hero-details">
                    <?php
                    $display_header = get_theme_mod('heading_hero_display_setting', '');
                    $tagline_header = get_theme_mod('heading_hero_tagline_setting', '');
                    $cta_title = get_theme_mod('heading_hero_button_title_setting', '');
                    $cta_link = get_theme_mod('heading_hero_link_setting', '');
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
                        $hero_image_url = get_theme_mod('heading_hero_image_setting', '');
                        ?>
                        <img src="<?php echo esc_url($hero_image_url) ?>" alt="<?php echo esc_attr($display_header)?>" width="468.853px" height="398.803px" aria-label="<?php echo esc_attr($display_header)?>" />
                    </figure>
                </div>
            </div>
        </div>
    </section>
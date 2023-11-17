<section class="section_header">
        <div class="container">
            <div class="hero-wrapper">
                <div class="hero-details">
                    <?php
                    $display_header = get_theme_mod('header_display_setting', '');
                    ?>
                   <h1><?php echo wp_kses_post($display_header) ?></h1>
                    <p><?php the_content() ?></p>
                    <div class="margin-top-small">
                        <a href="/" class="button-primary ">Start your Journey</a>
                    </div>
                </div>
                <div class="hero-image">
                    <figure class="image-wrapper">
                        <?php
                        $hero_image_url = get_theme_mod('hero_image_setting', '');
                        ?>
                        <img src="<?php echo esc_url($hero_image_url) ?>" alt="<?php echo esc_attr($display_header)?>" width="468.853px" height="398.803px" aria-label="<?php echo esc_attr($display_header)?>" />
                    </figure>
                </div>
            </div>
        </div>
    </section>
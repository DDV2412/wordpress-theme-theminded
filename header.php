<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    wp_head();
    ?>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="navbar-wrapper">
                    <?php
                    $home_url = home_url('/');
                    ?>
                    <a href="<?php echo esc_url($home_url) ?>">
                       <?php
                        if (function_exists('the_custom_logo')) {
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id);
                        }
                        ?>
                        <img src="<?php echo $logo[0] ?>" class="brand-logo" alt="<?php bloginfo('name') ?>" aria-label="<?php bloginfo('name') ?>" width="192px" height="70px" />
                    </a>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'menu_class' => 'main-menu',
                            'container' => 'div',
                        ));
                    ?>
                    <div class="navbar-button">
                        <a href="" class="button-secondary outline button-color-white is-desktop"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 20 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99988 14.866L10.1429 14.866L10.4599 14.8669C13.152 14.8808 19.4587 15.1186 19.4587 19.1605C19.4587 22.9079 14.2791 23.4087 10.2501 23.4276L9.53988 23.4273C6.84771 23.4133 0.541016 23.1756 0.541016 19.1348C0.541016 15.3082 5.9387 14.866 9.99988 14.866ZM9.99988 16.616C4.91921 16.616 2.34225 17.4641 2.34225 19.1348C2.34225 20.8218 4.91921 21.6782 9.99988 21.6782C15.0805 21.6782 17.6575 20.83 17.6575 19.1605C17.6575 17.4711 15.0805 16.616 9.99988 16.616ZM9.99988 0.333984C13.5219 0.333984 16.3858 3.11765 16.3858 6.53832C16.3858 9.95898 13.5219 12.7427 9.99988 12.7427H9.96265C8.25869 12.7368 6.6616 12.087 5.46438 10.9157C4.26596 9.74315 3.60911 8.18682 3.61508 6.53482C3.61508 3.11765 6.47907 0.333984 9.99988 0.333984ZM9.99988 2.08398C7.47335 2.08398 5.41631 4.08248 5.41631 6.53832C5.41154 7.72715 5.88227 8.84132 6.74085 9.68248C7.60064 10.5225 8.74622 10.988 9.96626 10.9927L9.99988 11.8572V10.9927C12.5276 10.9927 14.5846 8.99415 14.5846 6.53832C14.5846 4.08248 12.5276 2.08398 9.99988 2.08398Z" fill="currentColor" />
                            </svg><span>Login</span></a>
                        <a href="" class="button-secondary button-color-primary"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="24" viewBox="0 0 21 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4377 0.336046C13.8444 0.336046 16.6187 3.11038 16.6187 6.52055L16.6186 8.35991C18.6897 9.08069 20.1795 11.0524 20.1795 13.3663V18.3701C20.1795 21.2926 17.803 23.6691 14.8805 23.6691H5.96599C3.04349 23.6691 0.666992 21.2926 0.666992 18.3701V13.3663C0.666992 11.0528 2.15627 9.08144 4.22673 8.36032L4.22754 6.52055C4.23454 4.84055 4.88438 3.29005 6.05688 2.12805C7.23054 0.964879 8.77987 0.291712 10.4377 0.336046ZM14.8805 9.81731H5.96599C4.00833 9.81731 2.41699 11.4086 2.41699 13.3663V18.3701C2.41699 20.3278 4.00833 21.9191 5.96599 21.9191H14.8805C16.837 21.9191 18.4295 20.3278 18.4295 18.3701V13.3663C18.4295 11.4086 16.837 9.81731 14.8805 9.81731ZM10.423 13.6974C10.906 13.6974 11.298 14.0894 11.298 14.5724V17.1636C11.298 17.6466 10.906 18.0386 10.423 18.0386C9.94001 18.0386 9.54801 17.6466 9.54801 17.1636V14.5724C9.54801 14.0894 9.94001 13.6974 10.423 13.6974ZM10.4342 2.08605H10.4155C9.23371 2.08605 8.12654 2.54105 7.29004 3.37055C6.44771 4.20355 5.98221 5.31538 5.97754 6.50071L5.97649 8.06665H14.8677L14.8687 6.52055C14.8687 4.07521 12.8795 2.08605 10.4342 2.08605Z" fill="currentColor" />
                            </svg><span>Sign Up</span></a>

                        <button class="menu-button" id="menu-toggle">
                            <span class="line top"></span>
                            <span class="line mid"></span>
                            <span class="line bottom"></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
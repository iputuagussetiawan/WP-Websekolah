<?php

/**
 * Header File
 * 
 * @package timedoor
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <?php
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>

    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>
    <!-- PRE LOADER -->
    <!-- <div class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </div> -->
    <nav class="navbar-custom <?php echo $header_two ?> navbar navbar-expand-xl">
        <div class="top-menu">
            <div class="container">
                <div class="top-menu__inner">
                    <ul class="top-menu__list">
                        <li class="top-menu__item">
                            <a class="top-menu__link" href="tel:081236677">081236677</a>
                        </li>
                        <li class="top-menu__item">
                            <a class="top-menu__link" href="tel:sekolah@gmail.com">sekolah@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="navbar-custom__logo-container">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
            <div class="btn-mobile-wrapper">
                <a href="https://insurance.liveaman.com/login" class="btn-primary-custom btn-login-mobile">Login</a>
                <!-- <button aria-label="navbar toggler" class="navbar-toggler navbar-custom__toggler" type="button" aria-expanded="false">

                </button> -->
                <button class="navbar-toggler navbar-custom__toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    Menu
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg" class="Mobile">
                        <circle cx="2.5" cy="2.5" r="2.5" fill="#00C2CB"></circle>
                        <circle cx="2.5" cy="10.5" r="2.5" fill="#00C2CB"></circle>
                        <circle cx="10.5" cy="2.5" r="2.5" fill="#00C2CB"></circle>
                        <circle cx="10.5" cy="10.5" r="2.5" fill="#00C2CB"></circle>
                    </svg>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => ' ms-auto',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav%2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
            </div>
        </div>
    </nav>
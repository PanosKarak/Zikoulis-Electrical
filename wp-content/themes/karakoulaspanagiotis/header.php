<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="<?php echo site_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/zikoulis-electrical.jpg" alt="Zikoulis Electrical logo" width="70" height="70" class="logo img-fluid">
                    <h1><?php echo get_bloginfo( 'name' );?></h1>
                </a>
            </div>

            <nav>
                <div class="menu-toggle" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
    
                <?php
                wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_class' => 'main-navigation',
                'container' => false,
                ));
                ?>
            </nav>
        </div>
    </header>
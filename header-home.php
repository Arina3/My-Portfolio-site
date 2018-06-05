<?php
/**
 * The header for our theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

    <header id="masthead" class="site-header clearfix">
        <section class="header-image">
            <div class="container-header-image">
                <img src="<?php echo get_theme_mod('header_image'); ?>" alt="<?php echo get_theme_mod('header_image_alt'); ?>" class="image-header">
                <div class="site-branding header">
                    <div class="logo">
                        <?php the_custom_logo(); ?>
                    </div>
                </div><!-- .site-branding -->
            </div>
        </section>

        <section class="header-desc">
            <div class="site-navigation">
                <span class="menu-trigger"><i class="fa fa-bars"></i></span>
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-nav-menu',
                    'container_class' => 'custom-menu-class',
                    'menu_id' => 'primary-menu',
                ));
                ?>
            </div>
            <div class="container-header-desc">
                <h1 class="header-desc-heading"><?php echo get_theme_mod('header_heading'); ?></h1>
                <p class="header-desc-info"><?php echo get_theme_mod('header_subheading'); ?></p>
            </div>
        </section>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
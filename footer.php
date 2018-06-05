<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cottage
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">

    <section class="footer-social-nav" id="contacts">
        <div class="container-main footer">
            <?php wp_nav_menu(array(
                'theme_location' => 'footer-socials-menu',
                'container_class' => 'custom-footer-socials',
            ));
            ?>
        </div>
    </section>

    <section class="footer-contacts">
        <div class="container-main footer">

            <div class="logo-footer">
                <a href="/">
                    <img src="<?php echo get_theme_mod( 'footer_logo' ); ?>">
                </a>
            </div>

            <div class="footer-phone">
                <?php dynamic_sidebar('phone-number-sidebar'); ?>
            </div>

            <div class="footer-email">
                <?php dynamic_sidebar('email-sidebar'); ?>
            </div>

        </div>
    </section>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

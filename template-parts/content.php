<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Arina_Exam
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;

        if ( 'post' === get_post_type() ) :
            ?>
            <div class="entry-meta">
                <div class="container-author">By <span class="post-author"><?php the_author(); ?></span></div>
                <div class="container-date"><span class="post-date"><?php the_modified_date('j M, Y'); ?></span></div>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php the_post_thumbnail(); ?>

    <div class="entry-content">
        <?php the_content( $more_link_text , $strip_teaser ); ?>
    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

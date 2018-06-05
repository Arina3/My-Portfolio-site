<?php
/**
 * Template part for displaying Blog posts
 */

?>

<li>
    <article id="post-<?php the_ID(); ?>" <?php post_class('post-article'); ?>>
        <header class="entry-header">

            <?php the_post_thumbnail(); ?>

            <div class="entry-header-details">

                <?php
                if ( 'post' === get_post_type() ) :
                    ?>
                    <div class="entry-meta">
                        <span class="post-date"><?php the_modified_date('j'); ?></span>
                        <span class="post-month"><?php the_modified_date('M'); ?></span>
                    </div><!-- .entry-meta -->
                <?php endif; ?>

                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                endif;
                ?>

            </div>

        </header><!-- .entry-header -->

        <div class="entry-content">
                <?php the_content( $more_link_text , $strip_teaser ); ?>
        </div><!-- .entry-content -->

        <div class="post-footer">
            <div class="read-more-button">
                <a href="<?php the_permalink()?>">Read More</a>
            </div>
        </div>

    </article><!-- #post-<?php the_ID(); ?> -->
</li>
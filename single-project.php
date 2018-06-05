<?php
/**
 * The template for displaying all Projects single posts
 *
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container-main project page single">

                <ul class="projects-list page single">

                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part('template-parts/content', 'project-single');

                        the_post_navigation(array(
                            'next_text' => '<span>Next Project</span><i class="fa fa-angle-right" aria-hidden="true"></i>',
                            'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i><span>Previous Project</span>',
                        ));

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

                </ul>

                <div class="sidebar-project clearfix">
                    <ul class="sidebar-list">
                        <?php dynamic_sidebar('projects-sidebar'); ?>
                    </ul>
                </div>

            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();

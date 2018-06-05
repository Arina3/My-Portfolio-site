<?php
/**
 * Template name: Home
 */

get_header('home'); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <section class="strengths" id="features">

            <div class="container-main strength">
                <div class="strengths-details">
                    <h2 class="strengths-heading"><?php echo get_theme_mod('strengths_heading'); ?></h2>
                </div>

                <ul class="strengths-list">

                    <?php $args = [
                        'post_type' => 'strength',
                        'posts_per_page' => 3,
                    ];

                    query_posts($args);

                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content', 'strength');

                    endwhile; // End of the loop.//:
                    ; ?>

                    <?php wp_reset_postdata(); ?>

                </ul>

            </div>
        </section>

        <section class="projects">
            <div class="container-main project">
                <div class="projects-details">
                    <h2 class="projects-heading"><?php echo get_theme_mod('projects_heading'); ?></h2>
                </div>

                <ul class="projects-list">

                    <?php $args = [
                        'post_type' => 'project',
                        'posts_per_page' => 3,
                    ];

                    query_posts($args);

                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content', 'project');

                    endwhile; // End of the loop.//:
                    ; ?>

                    <?php wp_reset_postdata(); ?>

                </ul>

                <div class="project-button">
                    <a href="<?php echo get_theme_mod('project_button_url'); ?>">
                        <?php echo get_theme_mod('project_button'); ?>
                    </a>
                </div>

            </div>
        </section>

        <section class="tech" id="technologies">
            <div class="container-main techno">

                <div class="tech-details">
                    <h2 class="tech-heading"><?php echo get_theme_mod('tech_heading'); ?></h2>
                </div>

                <div class="container-tech">
                    <div class="tech-list-container">
                        <?php dynamic_sidebar( 'tech-list-sidebar' ); ?>
                    </div>

                    <div class="tech-image-container" style='background-size: auto; background-repeat: no-repeat;
                            background-position: center; background-image: url("<?php echo get_theme_mod('tech_background'); ?>");'></div>
                </div>

            </div>
        </section>

        <section class="blog">
            <div class="container-main article">

                <div class="blog-details">
                    <h2 class="blog-heading"><?php echo get_theme_mod('blog_heading'); ?></h2>
                </div>

                <ul class="blog-list">

                    <?php

                    $args = [
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    ];

                    query_posts($args);

                    while (have_posts()) : the_post();

                        get_template_part( 'template-parts/content', 'blog' );

                    endwhile; // End of the loop.

                    wp_reset_postdata();

                    ?>

                </ul>

                <div class="blog-button">
                    <a href="<?php echo get_theme_mod('blog_button_url'); ?>">
                        <?php echo get_theme_mod('blog_button'); ?>
                    </a>
                </div>


            </div>
        </section>

        <section class="myjoy" id="pets">
            <div class="container-main joy">

                <div class="myjoy-details">
                    <h2 class="myjoy-heading"><?php echo get_theme_mod('pets_heading'); ?></h2>
                </div>

                <div class="pets-image">
                    <img src="<?php echo get_theme_mod('pets_image'); ?>">
                </div>

            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();




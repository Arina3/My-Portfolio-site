<?php
/**
 * Template name: Projects
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="projects page">

                <div class="container-main project page">
                    <div class="projects-details">
                        <h2 class="projects-heading"><?php echo get_theme_mod('projects_heading'); ?></h2>
                    </div>

                    <ul class="projects-list page">

                        <?php
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                        $args = [
                            'post_type' => 'project',
                            'show_all' => false, // показаны все страницы участвующие в пагинации
                            'end_size' => 1,     // количество страниц на концах
                            'mid_size' => 1,     // количество страниц вокруг текущей
                            'prev_next' => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                            'add_args' => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                            'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                            'posts_per_page' => 3,
                            'paged' => $paged,
                            'screen_reader_text' => __(''),
                        ];

                        query_posts($args);

                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'project' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.//:
                        ; ?>
                        <?php the_posts_pagination($args);
                        ?>

                        <?php wp_reset_postdata(); ?>

                    </ul>

                </div>

            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();

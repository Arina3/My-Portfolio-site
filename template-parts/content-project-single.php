<?php
/**
 * Template part for displaying Single Project posts
 *
 * */

?>

<li class="project-item">
    <article class="single-project">
        <h1><?php the_title(); ?></h1>
        <?php the_post_thumbnail(); ?>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        <div class="project-view-link">
            <a href="<?php the_field('project_view_link'); ?>" target="_blank"><?php the_field('project_view_link_title'); ?></a>
        </div>
    </article>
</li>

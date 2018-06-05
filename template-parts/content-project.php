<?php
/**
 * Template part for displaying Projects posts
 *
 * */

?>

<li class="project-item project-item-<?php the_ID() ?>">
    <a href="<?php the_permalink(); ?>">
        <div class="project-icon">
            <img src="<?php the_field('project_image')?>" class="project-image">
        </div>
        <h3 class="project-heading">
            <?php the_field('project_title'); ?>
        </h3>
    </a>
</li>

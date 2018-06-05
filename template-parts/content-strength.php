<?php
/**
 * Template part for displaying Strength posts
 *
 * */

?>

<li class="strength-item strength-item-<?php the_ID() ?>">
    <div class="strength-icon">
        <span href="#" class="strength-icon"></span>
    </div>
    <h3 class="strength-heading">
        <?php the_field('strength_title'); ?>
    </h3>
</li>
<style>
    .strength-item-<?php the_ID()?> span.strength-icon {
        background-image: url("<?php the_field('strength_icon')?>");
        background-repeat: no-repeat;
    }
</style>


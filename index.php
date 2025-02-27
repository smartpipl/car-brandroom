<?php
/**
 * The main template file
 */

get_header(); ?>

<main>
    <?php echo get_template_part('template-parts/home/hero'); ?>
    <?php echo get_template_part('template-parts/home/citation'); ?>
    <?php echo get_template_part('template-parts/home/profile'); ?>
    <?php echo get_template_part('template-parts/home/cups'); ?>
    <?php echo get_template_part('template-parts/home/careers'); ?>
    <?php echo get_template_part('template-parts/home/partners'); ?>
    <?php echo get_template_part('template-parts/home/offer'); ?>
    <?php echo get_template_part('template-parts/home/races'); ?>
    <?php echo get_template_part('template-parts/home/calendar'); ?>
    <?php echo get_template_part('template-parts/home/timer'); ?>
    <?php echo get_template_part('template-parts/home/track'); ?>
    <?php echo get_template_part('template-parts/home/social'); ?>
    <?php echo get_template_part('template-parts/home/contact'); ?>
</main>

<?php get_footer(); 
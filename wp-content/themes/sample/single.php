<?php get_header(); ?>

<?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/post-content', get_post_type());
        }
    }
?>

<?php get_footer(); ?>

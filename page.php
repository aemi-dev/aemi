<?php get_header(); ?>
<?php
while (have_posts()) {
    the_post();
    do_action('aemi_page_before');
    get_template_part('inc/parts/content', 'page');
} ?>
<?php get_footer();

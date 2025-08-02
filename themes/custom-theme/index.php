<?php wp_head(); ?>
<?php get_header(); ?>
<h1><?php bloginfo('name'); ?></h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
<?php wp_footer(); ?>

<?php
 
/**
 * Template Name: Support sub-pages
 */
 
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
  <h2 class="entry-title"><?php the_title(); ?></h2>
  <section class="entry-content"><?php the_content(); ?></section>
<?php endwhile; ?>

<?php get_footer(); ?>
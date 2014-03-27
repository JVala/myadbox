<?php
 
/**
 * Template Name: Support
 */
 
get_header(); ?>

<!--       <?php while ( have_posts() ) : the_post(); ?>
 
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
  -->
        <?php 
 
        // check for rows (parent repeater)
        if( get_field('section') ): ?>
          <div id="to-do-lists">
          <?php 
 
          // loop through rows (parent repeater)
          while( has_sub_field('section') ): ?>
            <div>
              <h3><?php the_sub_field('title'); ?></h3>
              <?php 
 
              // check for rows (sub repeater)
              if( get_sub_field('links') ): ?>
                <ul>
                <?php 
 
                // loop through rows (sub repeater)
                while( has_sub_field('links') ): 
 
                  // display each item as a list
                  ?>
                  <li><a href="<?php the_sub_field('link') ?>"><?php the_sub_field('text'); ?></a></li>
                <?php endwhile; ?>
                </ul>
              <?php endif; //if( get_sub_field('items') ): ?>
            </div>  
 
          <?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
          </div>
        <?php endif; // if( get_field('to-do_lists') ): ?>
 
      <?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
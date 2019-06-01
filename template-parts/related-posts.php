<?php
/**
 * Template part for displaying related posts
 *
 *
 * @package ivanicof
 */

 // Get a list of the current post's categories
 global $post;
 $categories = get_the_category( $post->ID );
 $catidlist = '';
 foreach( $categories as $category) {
     $catidlist .= $category->cat_ID . ",";
 }

 // Build our category based custom query arguments
  $custom_query_args = array( 
     'posts_per_page' => 20, // Number of related posts to display
     'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
     'orderby' => 'rand', // Randomize the results
     'cat' => $catidlist, // Select posts in the same categories as the current post
 ); 

 /* $custom_query_args = array( 
    'posts_per_page' => 30, // Number of related posts to display
    'post_type' => 'post',
    
); */

 
 // Initiate the custom query
 $custom_query = new WP_Query( $custom_query_args );

 
 // Run the loop and output data for the results
 if ( $custom_query->have_posts() ) : 

    echo '<div class="slider-wrap"><h2 class="flexslider-title">'.__('Related Posts','ivanicof').'</h2>';?>
 
 <div class="iv_related_posts flexslider ">
    <ul class="slides">

 <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                
     <li>
        <?php the_post_thumbnail('thumbnail'); ?>
        <a href="<?php echo get_the_permalink(); ?>" class="flex-caption"><?php the_title('<h3>','</h3>'); ?></a>
       
     </li>

 
 <?php endwhile; ?>
 <?php else : ?>
     <p><?php _e('Sorry, no related articles to display.','ivanicof'); ?></p>
 <?php endif;
 // Reset postdata
 wp_reset_postdata();?>
 </ul>
 </div>
</div>
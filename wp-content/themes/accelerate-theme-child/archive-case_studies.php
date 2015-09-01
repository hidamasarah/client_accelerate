<?php
/**
 * The template for displaying all case archives
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
                $image_1 = get_field("image_1");
                    $size ="full";
                $services = get_field("services");    
                $link = get_field("site_link");
            
            ?>
             <article class="case-study">  
                 <aside class="case-study-sidebar">
                    <h2><a href="<?php echo $link; ?>"><?php the_title(); ?></a></h2>
                     <h6><?php echo $services; ?></h6>
                     <p class="featured-work"><?php the_excerpt(); ?></p>
                     <h7><a href="<?php echo $link; ?>">View Project ></h7> </a>
                    
                </aside>    
                <div class="case-study-images">
                  
                  
                        <?php if($image_1) {
                        echo wp_get_attachment_image($image_1, $size );
                     } ?>
                  
                </div>         
            </article> 
            
    <?php endwhile; // end of the loop. ?>
</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>
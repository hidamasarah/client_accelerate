<?php
/**
 * The template for displaying the about page
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





<!-- .home-page -->

<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div>
</section>
    
<!-- .container -->
    
<!---services --->

<section class="about-services">
    <h4>OUR SERVICES</h4>
        <div class="service-list">
            <?php query_posts('posts_per_page=10&post_type=services'); ?>
                <?php while ( have_posts() ) : the_post(); 
                    $service_image=get_field("service_image"); 
                    $size="medium";         
                ?>
    <div class="service">
        <div class="service-images">
            <?php if($service_image) { echo wp_get_attachment_image($service_image, $size); } ?>
                        
        </div>
        <div class="service-description">
            <h2><?php the_title(); ?></h2>    
            <p class="featured-work"><?php the_excerpt(); ?></p>
        </div>        
			
        <?php endwhile; // end of the loop. ?>
        <?php wp_reset_query(); // resets the altered query back to the original ?>
            </ul>
    </div>


</section>
<!----end --->    
    
<?php get_footer(); ?>

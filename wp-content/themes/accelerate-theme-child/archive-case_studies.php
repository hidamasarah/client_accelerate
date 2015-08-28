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
                    $size ="medium";
                $services = get_field("services"); 
                $client = get_field("client");    
                $link = get_field("site_link");
            
            ?>
             <article class="case-study">  

                <aside class="case-study-sidebar">
                       
                    <h2><a href="<?php echo $link; ?>"><?php the_title(); ?></a></h2>
                <h5><?php echo $services; ?></h5>
                <h6>Client:<?php echo $client; ?></h6>
                     <p><a href="<?php echo $link; ?>">View the project</a></p>
            
         
                    
				<?php the_excerpt(); ?>
               
                </aside>    
                <div class="case-study-images">
                  
                    <figure>
                        <?php echo wp_get_attachment_image($image_1, $size); ?>
                    </figure>

                </div>
                    
            </article>         
            
            
            
				<?php the_content(); ?>
          
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>
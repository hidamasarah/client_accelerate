<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
			<aside class="sidebar">
	<?php if ( is_active_sidebar( 'newsletter' ) ) : ?>
		<?php dynamic_sidebar( 'newsletter' ); ?>	
			<?php endif; ?>



			
	
</aside>
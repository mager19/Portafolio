<?php
/*
Template Name: single-boletin
*/

get_template_part('/template-parts/header', 'boletin');?>
	<section class="newsletter newsletter--into">
		<?php 
			$args = array( 'post_type' => 'boletin', 'posts_per_page' => '1' );
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<?php the_content(); ?>
						</div>
					</div>
				</div>			
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>		
	</section>


<?php 
	get_footer();

?>
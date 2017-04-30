<?php
/*
Template Name: single-boletin
*/

get_template_part('/template-parts/header', 'boletin');?>
	<section class="newsletter newsletter--into">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="home">
						<?php 
							$url = home_url('/newsletter');
				 		?>	
						<a href="<?php echo $url; ?>">
							<img src="<?php  echo get_template_directory_uri(); ?>/img/home.png" alt="home mager newsletter"><br>Regresar al inicio
						</a>
					</div>
				</div>	
			</div>
		</div>
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
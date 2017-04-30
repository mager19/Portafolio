<?php
/*
Template Name: Newsletter
*/

get_template_part('/template-parts/header', 'newsletter');

?>

<section class="newsletter">
	        
	<div class="container">
		<div class="row">
			 <div class="col-md-10 col-md-offset-1"> 
			 	<div class="actual">
			 		<?php /*<img src="<?php echo get_template_directory_uri(); ?>/img/nuevo.png" alt="nuevo newsletter"> */?>
			 		<?php 
					$args = array( 'post_type' => 'boletin', 'posts_per_page' => 1 );
					$loop = new WP_Query( $args );

					if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
				 	<!-- post -->
			        <div class="newsletter__item"> 
		           		<?php the_post_thumbnail($size ='imagen-post-actual'); ?>
			            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3> </a>
			            <p><?php the_excerpt(); ?></p> 
			            <a href="<?php the_permalink(); ?>">Leer mas.</a> 
			        </div> 
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
			 	</div> 
      		</div>   
		</div>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="anteriores">
					<?php /*<img src="<?php echo get_template_directory_uri(); ?>/img/anteriores.png" alt="anteriores newsletter">*/ ?>
					<div class="row">
						<?php 
						$args = array( 'post_type' => 'boletin', 'posts_per_page' => 3, 'offset' => 1 );
						$loop = new WP_Query( $args );
					
						if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					 	<!-- post -->
				        <div class="col-xs-4 col-md-4">
							<div class="newsletter__item">
								<?php the_post_thumbnail( $size = 'imagen-post-anteriores'); ?>
								<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3> </a>
					            <p><?php echo get_the_excerpt(); ?></p> 
					            <a href="<?php the_permalink(); ?>">Leer mas.</a> 
							</div>
						</div>
						<?php endwhile; ?>
						<!-- post navigation -->
						<?php else: ?>
						<!-- no posts found -->
						<?php endif; ?>	
						<?php wp_reset_postdata(); ?>					
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="semanas__anteriores">
					<?php /*<img src="<?php echo get_template_directory_uri(); ?>/img/masatras.png" alt="anteriores newsletter">*/ ?>
					<div class="row">
						<?php  
						$args = array( 'post_type' => 'boletin', 'offset' => 4 );
						$loop = new WP_Query( $args );

						if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<!-- post -->
							<div class="col-xs-4 col-md-2">
								<div class="newsletter__item">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
							</div>
						<?php endwhile; ?>
						<!-- post navigation -->
						<?php else: ?>
						<!-- no posts found -->
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>				
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php 
get_footer();?>
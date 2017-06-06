<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wiltonwings
 */

get_header(); ?>

<!-- Stickbar -->
<?php get_template_part( "/template-parts/stick", "bar" ); ?>
<!-- /Stickbar -->

<!-- Acerca de mi -->
<section class="contenedor aboutme" id="aboutme">
	<div class="container">
		<div class="row">
			<div class="col-md-12 aboutme__pictures">
				<?php 
				$args = array( 'post_type' => 'acercademi', 'post_per_page' => '1' );
				$loop = new WP_Query( $args );

				if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $var1 = get_field('imagen_1',43);
						  $var2 = get_field('imagen_2',43);
						  $var3 = get_field('imagen_3',43);
						  $var4 = get_field('imagen_4',43);
				    ?>
					
					<div class="row">
						<div class="col-md-12">
							<div class="imagen1" style="background-image: url(<?php echo $var1['url'];?>);"></div> 	
						</div>
						<!-- Imagen 2 -->
						<div class="col-md-4">
							<div class="imagen__collage" style="background-image: url(<?php echo $var2['url'];?>);"></div>
						</div>
						<!-- Imagen 3 -->
						<div class="col-md-4">
							<div class="imagen__collage" style="background-image: url(<?php echo $var3['url'];?>);"></div>
						</div>
						<!-- Imagen 4 -->
						<div class="col-md-4">
							<div class="imagen__collage" style="background-image: url(<?php echo $var4['url'];?>);"></div>
						</div>
					</div>

					<p><?php the_content(); ?></p>
				 <!-- post -->
				 <?php endwhile; ?>
				 <!-- post navigation -->
				 <?php else: ?>
				 <!-- no posts found -->
				 <?php endif; ?> 	
				 <?php wp_reset_postdata(); ?>			
			</div>
			<div class="col-md-12">
				<p><?php the_content(); ?></p>
			</div>

			<div class="col-md-12">
				<div class="col-md-4 ">
					<div class="contratame" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/contactame.jpg);">
						<h3>Hablemos</h3>
						<p>Cuentame de que se trata tu proyecto, que tienes en mente, cual es tu objetivo, y recibiras un presupuesto estimado del costo del desarrollo, todo a medida de acuerdo a tu necesidad.</p>
						<a href="#contacto" class="boton boton__contactme">Contactame!</a>
					</div>
				</div>

				<div class="col-md-8 hidden-xs">
					<div class="row">
						<div class="col-md-4 col-xs-6">
							<div class="aboutme__items">
								<span class="icon-display"></span>
								<h3>Diseño Web</h3>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="aboutme__items">
								<span class="icon-wordpress"></span>
								<h3>WordPress</h3>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="aboutme__items">
								<span class="icon-ruler"></span>
								<h3>Ui / Ux</h3>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="aboutme__items">
								<span class="icon-rss"></span>
								<h3>Blogger</h3>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="aboutme__items">
								<span class="icon-podcast"></span>
								<h3>Podcaster</h3>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- /Acerca de mi -->

<!-- Portfolio -->
<section class="contenedor portfolio" id="portafolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="title">Portfolio</h2>
					<?php
					$args = array( 'post_type' => 'portafolio', 'posts_per_page' => 4);
					$loop = new WP_Query( $args );

					if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<div class="portfolio__item" style="background-image:linear-gradient(rgba(77, 77, 77, 0.2), rgba(0, 0, 0, 0.80)), url(<?php the_post_thumbnail_url( $size = 'imagen-portafolio-destacada' ); ?>); background-size: cover;"> 
							<div class="row">
								<div class="portfolio__item__contenido">
									<div class="col-md-5">
										<h3><?php the_title(); ?></h3>
										<h4><?php the_category("," ); ?></h4>
									</div>
									<div class="col-md-7">
										<p><?php the_excerpt(); ?></p>
									</div>
								</div>
							</div>
						</div>
					</a>
					<!-- post -->
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>			
				
				<div class="row">
				<?php 
					$args = array( 'post_type' => 'portafolio', 'posts_per_pages' => 8, 'offset' => 4 );
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<!-- post -->
					<div class="col-md-2 col-xs-6">
						<a href="<?php the_permalink(); ?>">
							<div class="portafolio__item--small" style="background-image:linear-gradient(rgba(77, 77, 77, 0.7), rgba(0, 0, 0, 0.40)), url(<?php the_post_thumbnail_url( $size = 'imagen-portafolio-secundaria' ); ?>); background-size: cover; height: 100px;margin-bottom: 1em;"> 
								<div class="portafolio__item--small__contenido">
									<h3><?php the_title(); ?></h3>
								</div>
							</div>
						</a>
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
</section>
<!-- PortfolioEnd -->

<!-- Testimonial -->
<section class="contenedor" id="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="title">Testimonials</h2>	
			</div>
		</div>
	</div>

	
	<div class="container-fluid sinpadding">
		<div class="your-class2">
			<?php 
				$args = array( 'post_type' => 'portafolio', 'post_per_page' => 1 );
				$loop = new WP_Query( $args );

				if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<!-- post -->
				<?php
					$nombreContacto = get_field('nombre-contacto');
					$testimonio = get_field('testimonio');
				?>
				<div>
					<div class="col-xs-12 col-md-4  testimonial__left">
						<h4>
							<?php 
								if ( in_category( 'Diseño Web' )) {?>
								    <span class="icon-display"></span>
								<?php     
								} elseif ( in_category( 'Creación de contenidos' )) {?>
								    <span class="icon-clipboard-edit"></span>
								<?php    
								} else {?>
								    <span class="icon-ruler"></span>
								<?php
								}
							?>
							<?php the_category( ", " ); ?>
						</h4>
						<h3><?php echo $nombreContacto; ?></h3>
						<p><?php echo wp_trim_words( $testimonio, 30, ' . . .' ); ?></p>
						<a href="<?php the_permalink(); ?>" class="boton boton__testimonial">Caso de Estudio</a>
					</div>

					<div class="hidden-xs col-md-8 sinpadding testimonial__right" style="background-image: url(<?php echo the_post_thumbnail_url( $size = 'imagen-post-testimonio' );?>);  height:463px; background-size: cover; ">
						
					</div>
				</div>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
		</div>
	</div>


</section>
<!-- End Testimonial -->


<?php

get_footer();

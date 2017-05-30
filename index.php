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
<section class="contenedor" id="aboutme">
	<div class="container">
		<div class="row">
			<div class="col-md-12 aboutme__pictures">
				<?php 
				$args = array( 'post_type' => 'acercademi', 'post_per_page' => '1' );
				$loop = new WP_Query( $args );

				if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $var1 = get_field('imagen_1',10);
						  $var2 = get_field('imagen_2',10);
						  $var3 = get_field('imagen_3',10);
						  $var4 = get_field('imagen_4',10);
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
			</div>
			<div class="col-md-12">
				<p>Hi, I am <span>mager19</span>, Frontend Developed, who loves to work with passion. I am currently living in Florencia, Italia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima assumenda harum consequatur dignissimos molestias pariatur dolore reiciendis tenetur, qui corporis.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ex consequatur aliquid rem perspiciatis. Laborum repudiandae harum eveniet voluptates! Et minima, deserunt eum ut excepturi alias explicabo voluptatem, voluptate eius magnam porro asperiores, hic iure reiciendis inventore nemo earum. Dolore repudiandae, culpa illo sequi temporibus. Labore maxime numquam dignissimos, culpa autem fugit minima, maiores dolore quidem. Vitae expedita assumenda adipisci unde impedit ad porro odit deleniti quos cumque ipsam iste ullam animi velit at sint nulla, ipsum veritatis, laudantium ducimus! Quos ipsa totam nostrum in commodi accusamus aut fugiat numquam beatae, hic, eius explicabo illum minus. Esse laborum ratione facere!</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, aut reprehenderit. Amet similique dignissimos aspernatur assumenda dicta provident suscipit ipsam ipsum adipisci sit quas corporis quam, totam ea iusto doloremque tenetur, porro harum voluptatum eveniet et, consequatur! Id, aliquam enim?</p>
			</div>

			<div class="col-md-12">
				<div class="col-md-4 ">
					<div class="contratame" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/contactame.jpg);">
						<h3>Hire Me</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam qui debitis consequuntur magni! Atque minima ad vel blanditiis. Sed optio, tempora laborum unde eum in quidem ex dolorem perspiciatis eaque.</p>
						<a href="#" class="boton boton__contactme">Contact Me!</a>
					</div>
				</div>

				<div class="col-md-8 col-xs-12">
					<div class="row">
						<div class="col-md-4 col-xs-6">
							<div class="aboutme__items">
								<i class="fa fa-desktop" aria-hidden="true"></i>
								<h3>Diseño Web</h3>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="aboutme__items">
								<i class="fa fa-wordpress" aria-hidden="true"></i>
								<h3>Wordpress</h3>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="aboutme__items">
								<i class="fa fa-stack-overflow" aria-hidden="true"></i>
								<h3>Ui / Ux</h3>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="aboutme__items">
								<i class="fa fa-trello" aria-hidden="true"></i>
								<h3>Blogger</h3>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="aboutme__items">
								<i class="fa fa-hacker-news" aria-hidden="true"></i>
								<h3>Podcaster</h3>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="aboutme__items">
								<i class="fa fa-bitbucket" aria-hidden="true"></i>
								<h3>Docente</h3>
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
<section class="contenedor portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="title">Portfolio</h2>

				<?php
					$args = array( 'post_type' => 'portafolio', 'posts_per_page' => 5);
					$loop = new WP_Query( $args );

					if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="portfolio__item" style="background-image:linear-gradient(rgba(77, 77, 77, 0.2), rgba(0, 0, 0, 0.80)), url(<?php the_post_thumbnail_url( $size = 'imagen-post-actual' ); ?>); background-size: cover;"> 
						<div class="row">
							<div class="portfolio__item__contenido">
								<div class="col-md-6">
									<h3><?php the_title(); ?></h3>
									<h4><?php the_category("," ); ?></h4>
								</div>
								<div class="col-md-6">
									<p><?php the_excerpt(); ?></p>
								</div>
							</div>
						</div>
					</div>
					<!-- post -->
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
				
				

				

				<div class="row">
					<div class="col-md-2 col-xs-6">
						<div class="portafolio__item--small">
							<img src="img/items__portafolio/item5.jpg" alt="item">
							<div class="portafolio__item--small__contenido">
								<h3>Link Marketing</h3>
							</div>
						</div>
					</div>
					
					<div class="col-md-2 col-xs-6">
						<div class="portafolio__item--small">
							<img src="img/items__portafolio/item6.jpg" alt="item">
							<div class="portafolio__item--small__contenido">
								<h3>Anna Jeffersons</h3>
							</div>
						</div>
					</div>

					<div class="col-md-2 col-xs-6">
						<div class="portafolio__item--small">
							<img src="img/items__portafolio/item7.jpg" alt="item">
							<div class="portafolio__item--small__contenido">
								<h3>Hotel Bahia Costa</h3>
							</div>
						</div>
					</div>
					
					<div class="col-md-2 col-xs-6">
						<div class="portafolio__item--small">
							<img src="img/items__portafolio/item8.jpg" alt="item">
							<div class="portafolio__item--small__contenido">
								<h3>Pasteles Ricos</h3>
							</div>
						</div>
					</div>

					<div class="col-md-2 col-xs-6">
						<div class="portafolio__item--small">
							<img src="img/items__portafolio/item9.jpg" alt="item">
							<div class="portafolio__item--small__contenido">
								<h3>Street Artister</h3>
							</div>
						</div>
					</div>
					
					<div class="col-md-2 col-xs-6">
						<div class="portafolio__item--small">
							<img src="img/items__portafolio/item10.jpg" alt="item">
							<div class="portafolio__item--small__contenido">
								<h3>Nature Photograph </h3>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- PortfolioEnd -->


<?php

get_footer();

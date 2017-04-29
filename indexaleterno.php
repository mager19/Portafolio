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
					<?php $var1 = get_field('imagen_1',18);
						  $var2 = get_field('imagen_2',18);
						  $var3 = get_field('imagen_3',18);
						  $var4 = get_field('imagen_4',18);
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
					<div class="contratame">
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
								<h3>Web Design</h3>
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
								<h3>Developer</h3>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="aboutme__items">
								<i class="fa fa-trello" aria-hidden="true"></i>
								<h3>Manager</h3>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="aboutme__items">
								<i class="fa fa-hacker-news" aria-hidden="true"></i>
								<h3>Editor</h3>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="aboutme__items">
								<i class="fa fa-bitbucket" aria-hidden="true"></i>
								<h3>Deployment</h3>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<?php

get_footer();

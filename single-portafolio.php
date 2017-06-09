<?php
/*
Template Name: single-portafolio
*/

get_template_part('/template-parts/header', 'case');

?>

<section class="contenedor case__study">
	<div class="container">
		<div class="row">
			<?php 
			$args = array( 'post_type' => 'portafolio', 'posts_per_page' => 1);
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<!-- post -->
			<!-- case__study -->
			<div class="col-md-3">
				<div class="case__study--left">
					<h2>Información</h2>
					<div class="case__left__item">
						<div class="row">
							<div class="col-md-2">
								<span class="icon-box"></span>
							</div>
							<div class="col-md-10">
								<h3>Cliente / Contacto</h3>
								<h4><?php echo get_field('nombre-contacto'); ?></h4>
							</div>
						</div>
					</div>
					<div class="case__left__item">
						<div class="row">
							<div class="col-md-2">
								<span class="icon-box"></span>
							</div>
							<div class="col-md-10">
								<h3>Categorias</h3>
								<h4><?php the_category(', '); ?></h4>
							</div>
						</div>
					</div>
					<div class="case__left__item">
						<div class="row">
							<div class="col-md-2">
								<span class="icon-box"></span>
							</div>
							<div class="col-md-10">
								<h3>Habilidades Usadas</h3>
								<h4><?php echo get_field('habilidades'); ?></h4>
							</div>
						</div>
					</div>
					<div class="case__left__item">
						<div class="row">
							<div class="col-md-2">
								<span class="icon-box"></span>
							</div>
							<div class="col-md-10">
								<h3>Fecha</h3>
								<h4><?php echo get_field('fecha'); ?></h4>
							</div>
						</div>
					</div>
					<div class="case__left__item">
						<div class="row">
							<div class="col-md-2">
								<span class="icon-box"></span>
							</div>
							<div class="col-md-10">
								<h3>Enlace de Contacto</h3>
								<h4>@velvor </h4>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-9">
				<div class="case__study--right">
									
					<div class="problema">
						<h3>Contexto </h3>
							problema a resolver - objetivos
							http://www.jordanprice.co/likes.html
					</div>			
					<?php the_post_thumbnail(); ?>
					<div class="desafio">
						<h3>Desafios</h3>
						contar cuales eran los mayores desafios
					</div>

					<div class="franja__testimonio">
						<h3>franja testimonio</h3> tipo
						http://www.jordanprice.co/likes.html
					</div>			

					<div class="screenshots">
						https://aerolab.co/xapo
					</div>
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
</section>


<?php 
get_template_part('/template-parts/footer', 'portafolio');?>
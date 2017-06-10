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
						<?php $contexto = get_field('imagen-contexto'); ?>
						<img src="<?php echo $contexto[url]; ?>" alt="">
						<p><?php echo get_field('aresolver'); ?></p>
					</div>			
					
					<div class="desafio">
						<h3>Desafios</h3>
						<?php $desafio = get_field('imagen-desafio'); ?>
						<img src="<?php echo $desafio[url]; ?>" alt="">
						<p><?php echo get_field('desafio'); ?></p>
					</div>

					<div class="mi__experiencia">
						<h3>Mi Experiencia</h3>
						<?php the_content(); ?>
					</div>			

					<div class="franja__testimonio">
						<div class="row">
							<div class="col-md-12">
								<p><?php echo get_field('testimonio'); ?></p>
								<h4><?php echo get_field('nombre-contacto'); ?></h4>
							</div>
						</div>
					</div>

					<div class="screenshots">
						<h3>Imagenes</h3>
						<p>Recopilación de algunas imagenes del proyecto:</p>
						<div class="row">
							<?php 
									$var1 = get_field('imagen-final1');
									$var2 = get_field('imagen-final2');
									$var3 = get_field('imagen-final3');
									$var4 = get_field('imagen-final4');
								?>
							<div class="col-md-6 nopadding">
								<div class="screenshots__item" style="background-image: url(<?php echo $var1['url']; ?>); ">
								</div>						
							</div>	

							<div class="col-md-6 nopadding">
								<div class="screenshots__item" style="background-image: url(<?php echo $var2['url']; ?>); " >
								</div>						
							</div>	

							<div class="col-md-6 nopadding">
								<div class="screenshots__item" style="background-image: url(<?php echo $var3['url']; ?>); ">
								</div>						
							</div>	
							
							<div class="col-md-6 nopadding">
								<div class="screenshots__item" style="background-image: url(<?php echo $var4['url']; ?>); ">
								</div>						
							</div>	

							<div class="col-md-12 nopadding ">
								<div class="contratame" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/contactame.jpg);">
									<h3>Hablemos</h3>
									<p>Cuentame de que se trata tu proyecto, que tienes en mente, cual es tu objetivo, y recibiras un presupuesto estimado del costo del desarrollo, todo a medida de acuerdo a tu necesidad.</p>
									<a href="#contacto" class="boton boton__contactme">Contactame!</a>
								</div>
							</div>
													
						</div>
						
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
get_template_part('/template-parts/footer', 'item__portafolio');?>
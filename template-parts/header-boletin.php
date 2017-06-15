<?php
/**
 * The header newsletter
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portafolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Header -->
<?php 
	while ( have_posts() ) : the_post(); ?>
		<header class="header__newsletter" style="background-image: url(<?php the_post_thumbnail_url( $size = 'imagen-post-actual' ); ?>); background-size: cover;">  		 
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header__contenido__newsletter">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<h3><?php the_title(); ?></h3>
									<p>Suscribete para recibir cada semana los artículos en tu email. <br>La mejor manera de agradecer este esfuerzo es compartiendo, y ayudando a que llegue a mas personas.</p>
									<a href="http://eepurl.com/cM6h61" target="_blank">Suscribirse</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header-->
	<!-- post -->
	<?php endwhile; ?>
	<!-- post navigation -->
	

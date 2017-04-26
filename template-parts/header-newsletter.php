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
<header class="header__newsletter"  style="background-image: url(<?php echo get_template_directory_uri() ?>/img/background-newsletter.jpeg);">
	<!-- End Nav -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="header__contenido__newsletter">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3>Newsletter</h3>
							<p>Listado de artículos recopilados entre la semana, cada viernes para disfrutarlos el fin de semana. Tematicas: <b>Diseño / Desarrollo web, WordPress, Ux / Ui, contenido geeks en general, videos, podcast</b> y contenido interesante curados entre la semana.</p>
							<a href="#">Suscribirse</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- End Header-->
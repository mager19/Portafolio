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
<!-- Acerca de mi -->
<section class="vacio">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				Hola Soy <a href="http://twitter.com/mager19" target="_blank">Mager19</a> mi sitio aún esta en desarrollo, pero puedes suscribirte por ahora a mi newsletter.
			</div>	

			<div class="col-md-12">
				<?php 
					$url = home_url('/newsletter');
				?>	
				<a href="<?php echo $url; ?>" class="newsletter-link">Newsletter</a>
			</div>
		</div>
	</div>
</section>

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wiltonwings
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
<header  style="background-image: url(<?php echo( get_header_image() ); ?>); background-size: cover;">
	<!-- Nav -->
	<nav>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<h1><?php bloginfo('title'); ?></h1>
					<h2><?php bloginfo( 'description' ); ?></h2>
				</div>
				<div class="col-md-8 col-sm-12 hidden-xs">
					<?php get_template_part('template-parts/nav','principal'); ?>
				</div>
			</div>
		</div>
	</nav>
	<!-- End Nav -->
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1  header__contenido">
				
				<?php 

					$args = array('post_type' => 'acercademi', 'post_per_page' => '1');
					$loop = new WP_Query($args);

					if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php $descripcion = get_field( "descripcion" ); ?>
						<h3><?php echo $descripcion;?></h3>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
					<?php wp_reset_query(); ?>				
				
				<a href="#" class="boton boton__header">Contact Me!</a>
			</div>
		</div>
	</div>
</header>
<!-- End Header-->



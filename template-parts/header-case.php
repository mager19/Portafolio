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
<header class="header__case" style="background-image: linear-gradient(rgba(77, 77, 77, 0.4), rgba(0, 0, 0, 0.90)), url(<?php the_post_thumbnail_url( $size = 'imagen-post-actual' ); ?>); background-size: cover;">
	<!-- End Nav -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="header__contenido__case" >
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<?php
															
								while ( have_posts() ) : the_post(); ?>
								<?php 
									$url = home_url('/');
						 		?>	
								<a href="<?php echo $url; ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/home.png" alt="">
								</a>
								<h2><?php the_title(); ?></h2>
								
								<!-- post -->
								<?php endwhile; ?>
								<!-- post navigation -->
								<?php wp_reset_postdata(); ?>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- End Header-->
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
	// $args = array( 'post_type' => 'boletin', 'posts_per_page' => 1 );
	// $loop = new WP_Query( $args );

	while ( have_posts() ) : the_post(); ?>
		<header class="header__newsletter" style="background-image:linear-gradient(rgba(77, 77, 77, 0.4), rgba(0, 0, 0, 0.90)), url(<?php the_post_thumbnail_url( $size = 'imagen-post-actual' ); ?>); background-size: cover;">  
		 
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header__contenido__newsletter">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<h3><?php the_title(); ?></h3>
									<p>Suscribete para recibir cada semana los artículos en tu email. La mejor manera de agradecer este esfuerzo es compartiendo, y ayudando a que llegue a mas personas.</p>
									<div id="mc_embed_signup">
										<form action="//mager19.us2.list-manage.com/subscribe/post?u=28228fe74db42b36195e22cb3&amp;id=1c6ad79065" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
										    <div id="mc_embed_signup_scroll">
											<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="tunombre@email.com" required>
										    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
										    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_28228fe74db42b36195e22cb3_1c6ad79065" tabindex="-1" value=""></div>
										    <div class="clear"><input type="submit" value="Inscríbete" name="subscribe" id="mc-embedded-subscribe" class="button" onClick="ga('send', 'event', { eventCategory: 'Suscribirse', eventAction: 'Clic en boton suscribirse', eventLabel: 'Boton suscribirse'});"></div>
										    </div>
										</form>
									</div>
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
	

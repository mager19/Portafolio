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
<header class="header__newsletter"  style="background-image: url(<?php echo get_template_directory_uri() ?>/img/background-newsletter.jpg);">
	<!-- End Nav -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="header__contenido__newsletter">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3>Newsletter</h3>
							<p>Listado de artículos recopilados entre la semana, cada viernes para disfrutarlos el fin de semana. Tematicas: <b>Diseño / Desarrollo web, WordPress, Ux / Ui, contenido geeks en general, videos, podcast</b> y contenido interesante leído entre la semana.</p>
							<!-- Begin MailChimp Signup Form -->
							<style type="text/css">
								#mc_embed_signup{clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
								/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
								   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
							</style>
							<div id="mc_embed_signup">
							<form action="//mager19.us2.list-manage.com/subscribe/post?u=28228fe74db42b36195e22cb3&amp;id=1c6ad79065" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							    <div id="mc_embed_signup_scroll">
								<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="tunombre@email.com" required>
							    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_28228fe74db42b36195e22cb3_1c6ad79065" tabindex="-1" value=""></div>
							    <div class="clear"><input type="submit" value="Inscríbete" name="subscribe" id="mc-embedded-subscribe" class="button" onClick="ga('send', 'event', { eventCategory: 'mc-embedded-subscribe', eventAction: 'Clic en boton suscribirse', eventLabel: 'Boton suscribirse'});"></div>
							    </div>
							</form>
							</div>

							<!--End mc_embed_signup-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- End Header-->
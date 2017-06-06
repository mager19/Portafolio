<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portafolio
 */

?>

<!-- Footer -->
<footer class="contenedor contacto" id="contacto">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="title">Contact</h2>
				<p>Cuentame de que se trata tu proyecto, que tienes en mente, cual es tu objetivo, y recibiras un presupuesto estimado del costo del desarrollo, todo a medida de acuerdo a tu necesidad.</p>	
				<div class="formulario">
					<?php echo do_shortcode('[contact-form-7 id="33" title="Contact form 1"]' ); ?>
				</div>				
			</div>
		</div>
	</div>
</footer>
<!-- End Footer -->

<div class="detalle">
	
</div>


<?php wp_footer(); ?>

</body>
</html>

<?php
/*
Template Name: Newsletter
*/

get_template_part( "/template-parts/header", "newsletter" ); ?>

<section class="newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="newsletter__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/nuevo.png" alt="nuevo newsletter">
					<img src="https://unsplash.it/1280/400/?random">
					<h3>Title de post</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore autem earum, doloremque sequi aliquam beatae esse repellendus ipsam ut magnam neque sed fugiat? Nemo sequi alias ex in adipisci rerum!</p>
					<a href="#">Leer mas.</a>
				</div>
			</div>	
		</div>
	</div>
</section>


<?php 
get_footer();?>
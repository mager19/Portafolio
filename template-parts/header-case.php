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
<header class="header__case" >
	<!-- End Nav -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="header__contenido__case">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<?php
								$args = array( 'post_type' => 'portafolio', 'posts_per_page' => 1 );
								$loop = new WP_Query( $args );
								
								if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
								
								<h2><?php the_title(); ?></h2>
							
								<!-- post -->
								<?php endwhile; ?>
								<!-- post navigation -->
								<?php else: ?>
								<!-- no posts found -->
								<?php endif; ?>
								<?php wp_reset_postdata(); ?>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- End Header-->
<?php
/**
 * Template part for Nav
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package portafolio
 */

?>
    <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
            if ( has_nav_menu( 'principal' ) ){
               wp_nav_menu( array(
                    'theme_location' => 'principal', 
                ));
            }

            else{
                echo ("<h4 class='error_menu'>Por Favor Activa el menu</h4>");
            }
		    
		?>
    </div><!-- /.navbar-collapse -->

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PortfolioHub
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portfoliohub' ); ?></a>
<div id='preloader'>
    <div id='status'>
        <img src='img/loading.gif' alt='LOADING....!!!!!' />
    </div>
</div>

<!--=========== Main Header area ===============-->
<header id="home">
    <div class="main-navigation">
        <div class="container">
            <div class="row">
                <!-- logo-area-->
                <div class="col-xl-2 col-lg-3 col-md-3">
                    <div class="logo-area">
                        <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                        ?>
                    </div>
                </div>
                <!-- mainmenu-area-->
                <div class="col-xl-10 col-lg-9 col-md-9">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary_menu',
                            ) );
                            ?>
                        </nav>
                    </div>
                    <!-- mobile menu-->
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
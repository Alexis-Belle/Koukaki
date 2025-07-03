<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <div class="nav-spacer"></div>
            <ul>
                <li class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </li>
            </ul>
            <div class="menu-container">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
            </div>
            

		</nav><!-- #site-navigation -->
             <!-- Panneau overlay -->
            <div class="menu-header" hidden>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/UI/logo_simple.png">
                <ul>
                    <li><a href="#tale">Histoire</a></li>
                    <li><a href="#characters">Personnages</a></li>
                    <li><a href="#place">Lieu</a></li>
                    <li><a href="#studio">Studio&nbsp;Koukaki</a></li>
                </ul>
                <span>STUDIO KOUKAKI</span>
                <!-- Fleurs -->
                <div class="flower orchid"></div>
                <div class="flower sunflower"></div>
                <div class="flower hibiscus_footer"></div>
                <div class="flower random_flower"></div>
                <div class="flower multi_flowers"></div>

                <!-- Chats -->
                <div class="cat purple_cat"></div>
                <div class="cat gray_cat"></div>
                <div class="cat orange_cat"></div>
            </div>
	</header><!-- #masthead -->

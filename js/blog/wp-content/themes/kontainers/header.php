<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="site-branding">
                
                
                <a title="kontainers" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="142" height="32" viewBox="0 0 142 32" id="svg" class="logo">
    <path fill="#FFFFFF" d="M25.636 9.868c-5.4 0-7.497 3.763-7.497 8.405s2.111 8.405 7.497 8.405c5.309 0 7.497-3.763 7.497-8.405s-2.131-8.405-7.497-8.405zM25.636 23.176c-2.37 0-3.231-2.208-3.231-4.911s0.711-4.894 3.231-4.894c2.578 0 3.231 2.191 3.231 4.894s-0.589 4.911-3.231 4.911zM19.368 7.872h-5.179l-5.974 9.082v-13.36h-4.107v22.588h4.107v-8.39l5.253 8.39h5.459l-5.526-8.934zM44.704 26.232v-9.041c0-3.993-2.03-3.661-2.451-3.661-1.75 0-3.152 1.39-3.152 2.994v9.708h-4.139v-15.918h3.279c0 0 0.373 1.641 0.478 2.101 0.96-1.143 2.297-2.547 5.189-2.547 4.477 0 4.934 3.383 4.934 6.463v9.901h-4.139zM50.312 10.314h2.197v-2.992l4.139-1.178v4.17h3.884v3.502h-3.884v6.112c0 3.152 0.978 3.044 1.592 3.088 0.884 0.064 1.751-0.339 2.133-0.509l0.732 3.184c-0.573 0.276-2.338 0.987-4.33 0.987-2.144 0-4.266-0.681-4.266-4.839v-8.022h-2.197v-3.502zM62.983 11.237c3.071-1.369 7.591-1.526 9.455-0.844 3.272 1.198 3.098 4.565 2.865 7.991-0.064 0.945-0.408 5.701 0.446 7.879h-3.375l-0.669-2.197c0 0-1.168 1.233-1.926 1.703-2.158 1.338-5.11 0.737-6.447-0.573-1.766-1.73-1.572-4.449-0.684-5.826 1.368-2.122 5.116-2.872 8.612-2.626 0.148-1.188 0.081-2.054-0.255-2.563-1.002-1.519-5.309-0.521-7.036 0.143l-0.987-3.088zM71.292 21.329v-2.069c-0.989-0.057-5.111-0.342-5.037 2.059 0.084 2.695 3.934 2.139 5.037 0.01zM77.87 10.314h4.139v15.918h-4.139v-15.918zM82.652 5.794c0 1.213-1.206 2.197-2.694 2.197s-2.694-0.984-2.694-2.197c0-1.213 1.206-2.197 2.694-2.197s2.694 0.983 2.694 2.197zM94.068 26.232v-9.041c0-3.993-2.03-3.661-2.451-3.661-1.75 0-3.152 1.39-3.152 2.994v9.708h-4.139v-15.918h3.279c0 0 0.373 1.641 0.478 2.101 0.96-1.143 2.297-2.547 5.189-2.547 4.477 0 4.934 3.383 4.934 6.463v9.901h-4.139zM113.376 24.863c-2.117 1.8-8.791 3.201-11.716-0.43-1.199-1.488-1.783-3.55-1.783-6.16 0-2.802 0.703-4.871 2.006-6.303 2.573-2.829 7.935-2.558 10.028-0.732 2.618 2.283 1.974 5.946 1.655 8.086h-9.551c0.064 1.337 0.355 3.25 2.408 3.835 2.253 0.642 4.592-0.257 5.583-1.002l1.369 2.706zM107.454 13.179c-2.827 0-3.237 2.483-3.343 3.566h5.921c0.085-1.146-0.044-3.566-2.579-3.566zM124.565 14.198c-2.326-0.908-4.648 0.19-4.648 2.093v9.941h-4.139v-15.918h3.215c0 0 0.305 1.341 0.478 2.101 0.591-0.812 1.926-3.417 5.635-2.101l-0.541 3.884zM133.198 21.839c-0.107-2.602-7.152-1.304-7.259-7.131-0.107-5.822 6.909-5.552 11.015-3.598l-0.923 2.993c-1.728-0.669-6.035-1.953-5.953 0.509 0.075 2.271 7.359 1.515 7.259 6.877-0.124 6.633-8.509 5.734-11.747 3.757l1.146-3.088c1.735 1.03 6.571 2.313 6.463-0.318z"></path>
  </svg>
  <span class="blog-sub-title">Blog</span>
                </a>
                
                <a class="btn-kontainers" href="https://kontainers.com">Get Instant Quotes</a>
				
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>
			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">

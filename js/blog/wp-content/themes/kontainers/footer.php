<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
</div>
<!-- .site-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <?php if ( has_nav_menu( 'primary' ) ) : ?>
  <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
    <?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
  </nav>
  <!-- .main-navigation -->
  <?php endif; ?>
  <?php if ( has_nav_menu( 'social' ) ) : ?>
  <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
    <?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
  </nav>
  <!-- .social-navigation -->
  <?php endif; ?>
  <div class="k-newsletter">
    <div class="row">
      <div class="six columns" style="text-align:left;"> 
        <!-- Twitter button -->
        <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.fd774b599f565016d763dd860cb31c79.en-gb.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en-gb&amp;screen_name=KontainersUK&amp;show_count=false&amp;show_screen_name=true&amp;size=l&amp;time=1462376636017" style="position: static; visibility: visible; width: 178px; height: 28px;" data-screen-name="KontainersUK"></iframe>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script> 
        
        <span class="newsletter-heading">Newsletter</span>
      </div>
      <div class="six columns"> 
     
<?php

if( function_exists( 'mc4wp_show_form' ) ) {
    mc4wp_show_form();
}
?>

        <!-- / MailChimp for WordPress Plugin --> 
        
      </div>
    </div>
  </div>
  <!--<div class="site-info"> © Kontainers 2016 </div>
   .site-info --> 
</footer>
<!-- .site-footer -->
</div>
<!-- .site-inner -->
</div>
<!-- .site -->

<?php wp_footer(); ?>
</body></html>
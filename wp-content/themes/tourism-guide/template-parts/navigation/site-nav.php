<?php
/*
* Display Theme menus
*/
?>
<?php
$adventure_travelling_sticky = get_theme_mod('adventure_travelling_sticky');
    $data_sticky = "false";
    if ($adventure_travelling_sticky) {
    $data_sticky = "true";
    }
    global $wp_customize;
?>

<div class="headerbox menubar <?php if( is_user_logged_in() && !isset( $wp_customize ) ){ echo "login-user";} ?>" data-sticky="<?php echo esc_attr($data_sticky); ?>">
  	<div class="container right_menu">
  		<div class="row">
  			<div class="col-lg-3 col-md-4 col-9 align-self-md-center">
		        <?php $adventure_travelling_logo_settings = get_theme_mod( 'adventure_travelling_logo_settings','Different Line');
		        if($adventure_travelling_logo_settings == 'Different Line'){ ?>
		          	<div class="logo">
		            	<?php if( has_custom_logo() ) adventure_travelling_the_custom_logo(); ?>
		            	<?php if(get_theme_mod('adventure_travelling_site_title',true) != ''){ ?>
		              		<h1 class="mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	            		<?php }?>
		            	<?php $description = get_bloginfo( 'description', 'display' );
		            	if ( $description || is_customize_preview() ) : ?>
		              		<?php if(get_theme_mod('adventure_travelling_site_tagline',true) != ''){ ?>
	               	 			<p class="site-description"><?php echo esc_html($description); ?></p>
		              		<?php }?>
	            		<?php endif; ?>
		          	</div>
		        <?php }else if($adventure_travelling_logo_settings == 'Same Line'){ ?>
		          	<div class="logo logo-same-line">
		            	<div class="row">
		              		<div class="col-lg-5 col-md-5 align-self-md-center">
		                		<?php if( has_custom_logo() ) adventure_travelling_the_custom_logo(); ?>
		              		</div>
		              		<div class="col-lg-7 col-md-7 align-self-md-center">
		                		<?php if(get_theme_mod('adventure_travelling_site_title',true) != ''){ ?>
		                  			<h1 class="mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		                		<?php }?>
								<?php $description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
									<?php if(get_theme_mod('adventure_travelling_site_tagline',true) != ''){ ?>
										<p class="site-description"><?php echo esc_html($description); ?></p>
									<?php }?>
								<?php endif; ?>
		              		</div>
		            	</div>
		          	</div>
		        <?php }?>
	      	</div>
	    	<div class="menubox col-lg-5 col-md-2 col-3 align-self-center">
	      		<div class="innermenubox">
	      			<?php if(has_nav_menu('primary-menu')){ ?>
			          	<div class="toggle-nav mobile-menu">
	            			<button onclick="adventure_travelling_menu_open()" class="responsivetoggle"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','tourism-guide'); ?></span></button>
	          			</div>
          			<?php }?>
         	 		<div id="mySidenav" class="nav sidenav">
            			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'tourism-guide' ); ?>">
			              	<?php if(has_nav_menu('primary-menu')){
			                  	wp_nav_menu( array(
				                    'theme_location' => 'primary-menu',
				                    'container_class' => 'main-menu clearfix' ,
				                    'menu_class' => 'clearfix',
				                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                    'fallback_cb' => 'wp_page_menu',
			                  	) );
			              	} ?>
              				<a href="javascript:void(0)" class="closebtn mobile-menu" onclick="adventure_travelling_menu_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','tourism-guide'); ?></span></a>
	            		</nav>
	          		</div>
          			<div class="clearfix"></div>
        		</div>
	    	</div>
	    	<div class="search-box col-lg-1 col-md-1 col-3 mt-3 mt-md-0 align-self-center">
	    		<?php if(get_theme_mod('tourism_guide_search_icon','') != ''){ ?>
		        	<button class="search_btn"><i class="fas fa-search"></i></button>
		        <?php }?>
	      	</div>
	      	<div class="col-lg-3 col-md-5 col-9 mt-3 mt-md-0 align-self-center">
				<div class="social-media">
					<?php if( get_theme_mod( 'adventure_travelling_facebook_url' ) != '') { ?>
						<a href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
					<?php } ?>
					<?php if( get_theme_mod( 'adventure_travelling_twitter_url' ) != '') { ?>
						<a href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
					<?php } ?>
					<?php if( get_theme_mod( 'adventure_travelling_instagram_url' ) != '') { ?>
						<a href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_instagram_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
					<?php } ?>
					<?php if( get_theme_mod( 'adventure_travelling_youtube_url' ) != '') { ?>
						<a href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
					<?php } ?>
					<?php if( get_theme_mod( 'adventure_travelling_pint_url' ) != '') { ?>
						<a href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_pint_url','' ) ); ?>"><i class="fab fa-pinterest"></i></a>
					<?php } ?>
				</div>
			</div>
    	</div>
	    <div class="search_outer">
	      	<div class="search_inner">
	        	<?php get_search_form(); ?>
	        </div>
      	</div>
  	</div>
</div>
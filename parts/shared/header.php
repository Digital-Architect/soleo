<div id="header">
  <div id="headerCol1">
    <div id="logo">
      <?php
	if ( function_exists( 'the_custom_logo' ) ) {
   	 the_custom_logo();
	}
	?>
    </div>
  </div>
  <div id="headerCol2">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="primaryNav">
          <?php
			wp_nav_menu( array(
				'menu'          	=> 'primary',
				'theme_location'	=> 'primary',
				'depth'         	=> 2,
				'container'			=> false,
				'menu_class'    	=> 'navbar-nav me-auto',
				'fallback_cb'   	=> '__return_false',
				'walker'         	=> new bootstrap_5_wp_nav_menu_walker())

			);
			?>
        </div>
      </div>
    </nav>
  </div>
  <div id="headerCol3">
    <div id="headerCol3Row">
      <a href="<?php echo get_option( 'company_cta_link' ); ?>"><div id="ctaButton"><?php echo get_option( 'company_cta' );?></div></a>
      <div id="teleponeNum"><?php echo get_option( 'company_tel' ); ?></div>
      <div id="searchBoxWrap"><form action="" method="get" enctype="application/x-www-form-urlencoded"><input name="s" id="s" type="text" placeholder="Search..." /><div id="searchBoxReturn">X</div></form></div>
      <div id="searchButton"><img src="<?php echo get_template_directory_uri(); ?>/images/search.png" width="18" height="18" /></div>
    </div>
  </div>
</div>

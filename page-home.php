<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/bootsrap-utilities.php for info on BsWp::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Bootstrap 5.0.1
 * @autor 		Digital Architect
 * Template Name: Homepage 
 */
?>
<?php BsWp::get_template_parts( array( 
	'parts/shared/html-header', 
	'parts/shared/header' 
) ); ?>
<?php if(get_field('display_feature_section') == 'active'){ ?>

<div id="feature">
  <div id="featureImage"><img src="<?php the_field('image'); ?>" width="475" height="auto" /></div>
  <div id="featureTxtSection">
    <h1>
      <?php the_field('title'); ?>
    </h1>
    <p>
      <?php the_field('description'); ?>
    </p>
    <?php if(get_field('cta_url') != ''){ ?>
    <a href="<?php the_field('cta_url'); ?>">
    <div id="ctaButton">
      <?php the_field('cta_tilte'); ?>
    </div>
    </a>
    <?php } ?>
  </div>
  <div id="featureDisplaySection">
    <div id="featureIcon"><img src="<?php the_field('panel_1_icon'); ?>" width="29" height="auto" /></div>
    <div id="featureTxt">
      <p class="panelTitle">
        <?php the_field('panel_1_title'); ?>
      </p>
      <p class="panelRate">
        <?php the_field('panel_1_rate'); ?>
      </p>
      <p class="panelPercent">
        <?php the_field('panel_1_percent'); ?>
      </p>
    </div>
  </div>
  <div id="featureDisplaySection2">
    <div id="featureIcon2"><img src="<?php the_field('panel_2_icon'); ?>" width="35" height="auto" /></div>
    <div id="featureTxt">
      <p class="panelTitle">
        <?php the_field('panel_2_title'); ?>
      </p>
      <p class="panelRate">
        <?php the_field('panel_2_rate'); ?>
      </p>
      <p class="panelPercent">
        <?php the_field('panel_2_percent'); ?>
      </p>
    </div>
  </div>
  <div id="featureImage2">
    <div id="featureImage2Title">
      <p>
        <?php the_field('panel_3_title'); ?>
      </p>
    </div>
    <div id="featureImage2Content"><img src="<?php the_field('panel_3_image'); ?>" width="100%" height="auto" /></div>
  </div>
</div>
<?php } ?>
<div id="contentHome">
  <div id="contentMain">
    <h2>
      <?php the_title(); ?>
    </h2>
    <?php the_content(); ?>
  </div>
  <div id="contentFeatureWrap">
    <div id="contentFeature1" style="background-image: url(<?php the_field('feature_panel_1_icon'); ?>)">
      <h3>
        <?php the_field('feature_panel_1_title'); ?>
      </h3>
      <p>
        <?php the_field('feature_panel_1_content'); ?>
      </p>
    </div>
    <div id="contentFeature2" style="background-image: url(<?php the_field('feature_panel_2_icon'); ?>)">
      <h3>
        <?php the_field('feature_panel_2_title'); ?>
      </h3>
      <p>
        <?php the_field('feature_panel_2_content'); ?>
      </p>
    </div>
    <div id="contentFeature3" style="background-image: url(<?php the_field('feature_panel_3_icon'); ?>)">
      <h3>
        <?php the_field('feature_panel_3_title'); ?>
      </h3>
      <p>
        <?php the_field('feature_panel_3_content'); ?>
      </p>
    </div>
  </div>
  <?php if(get_field('feature_cta_button_link') != ''){ ?>
  <div id="contentCTAWrap"> <a href="<?php the_field('feature_cta_button_link'); ?>">
    <div id="contentCTA">
        <?php the_field('feature_cta_button_title'); ?>
    </div>
    </a> </div>
  <?php } ?>
</div>
<?php BsWp::get_template_parts( array( 
	'parts/shared/footer',
	'parts/shared/html-footer' 
) ); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="format-detection" content="telephone=no">
<title>
<?php wp_title( '|', true, 'right' ); ?>
<?php bloginfo( 'name' ); ?>
</title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<link href = "<?php echo get_template_directory_uri(); ?>/font/stylesheet.css" rel = "stylesheet" type = "text/css" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrap">
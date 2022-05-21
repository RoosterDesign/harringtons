<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">

  <a href="/" title="Harringtons on the Hill" class="site-header__logo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Harringtons on the Hill" class="img-responsive" />
  </a>

  <span class="burger"><span></span></span>

</header>
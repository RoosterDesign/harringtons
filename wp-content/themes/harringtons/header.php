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

  <span class="burger js-open-nav"><span></span></span>


  <nav class="nav">

    <span class="nav__close js-close-nav"><span></span></span>

      <a href="/" title="Harringtons on the Hill" class="nav__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Harringtons on the Hill" class="img-responsive" />
    </a>

    <ul class="nav-list">
      <li class="nav-list__item nav-list__item--current">
        <a href="#" title="" class="nav-list__link">
          Home
        </a>
      </li>
      <li class="nav-list__item">
        <a href="#" title="Menus" class="nav-list__link">
          Menus
        </a>
      </li>
      <li class="nav-list__item">
        <a href="#" title="Reservations" class="nav-list__link">
          Reservations
        </a>
      </li>
      <li class="nav-list__item">
        <a href="#" title="Offers" class="nav-list__link">
          Offers
        </a>
      </li>
      <li class="nav-list__item">
        <a href="#" title="Functions" class="nav-list__link">
          Functions
        </a>
      </li>
      <li class="nav-list__item">
        <a href="#" title="Contact" class="nav-list__link">
          Contact
        </a>
      </li>
    </ul>

    <div class="nav__contact">      
      <p>
        <strong>01926 852 074</strong>
        42 Castle Hill, Kenilworth, CV8 1NB
      </p>
      <a href="" title="" class="btn btn--primary nav__btn">Book a table</a>
    </div>

  </nav>

  <div class="nav-mask"></div>

</header>
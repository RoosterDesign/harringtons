<section class="gallery">

  <?php

    $image = get_field('image_1');
    if( $image ):
      $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
      $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
      $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
  ?>

    <picture class="gallery__img">
      <source
        srcset="<?php echo $mobileImage; ?>"
        media="(min-width: 1024px)"
      >
      <source
        srcset="<?php echo $tabletImage; ?>"
        media="(min-width: 768px)"
      >
      <img
        src="<?php echo $desktopImage; ?>"
        alt="Harringtons on the Hill"
      />
    </picture> 

  <?php endif; $image = null; ?>

  <?php
    $image = get_field('image_2');
    if( $image ):
      $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
      $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
      $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
  ?>

  <picture class="gallery__img">
      <source
        srcset="<?php echo $mobileImage; ?>"
        media="(min-width: 1024px)"
      >
      <source
        srcset="<?php echo $tabletImage; ?>"
        media="(min-width: 768px)"
      >
      <img
        src="<?php echo $desktopImage; ?>"
        alt="Harringtons on the Hill"
      />
    </picture> 

  <?php endif; $image = null; ?>


  <?php
    $image = get_field('image_3');
    if( $image ):
      $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
      $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
      $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
  ?>

    <picture class="gallery__img">
      <source
        srcset="<?php echo $mobileImage; ?>"
        media="(min-width: 1024px)"
      >
      <source
        srcset="<?php echo $tabletImage; ?>"
        media="(min-width: 768px)"
      >
      <img
        src="<?php echo $desktopImage; ?>"
        alt="Harringtons on the Hill"
      />
    </picture> 

  <?php endif; $image = null; ?>
    
</section>

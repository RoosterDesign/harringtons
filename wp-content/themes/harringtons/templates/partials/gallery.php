<section class="gallery">

  <?php $image = get_field('image_1');
    if( $image ):
      $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
      $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
  ?>

  <picture class="gallery__img">
    <source srcset="<?php echo $tabletImage; ?>" media="(min-width: 1800px)" >
    <img src="<?php echo $mobileImage; ?>" alt="Harringtons on the Hill" />
  </picture> 

  <?php endif; $image = null; ?>

  <?php $image = get_field('image_2');
    if( $image ):
      $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
      $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
  ?>

  <picture class="gallery__img">
    <source srcset="<?php echo $tabletImage; ?>" media="(min-width: 1800px)" >
    <img src="<?php echo $mobileImage; ?>" alt="Harringtons on the Hill" />
  </picture> 

  <?php endif; $image = null; ?>

  <?php $image = get_field('image_3');
    if( $image ):
      $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
      $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
  ?>

  <picture class="gallery__img">
    <source srcset="<?php echo $tabletImage; ?>" media="(min-width: 1800px)" >
    <img src="<?php echo $mobileImage; ?>" alt="Harringtons on the Hill" />
  </picture>

  <?php endif; $image = null; ?>
    
</section>

<?php
/*
Template Name: Functions
*/
?>
<?php get_header(); ?>

<div class="page">
  
  <?php include get_theme_file_path("templates/partials/masthead.php"); ?>  

  <?php
    $block = get_field('event_block');
    $image = $block['image'];
    $textPosition = $block['text_position'];
    $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
    $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
    $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
    include get_theme_file_path("templates/partials/square-row.php");
    $image = null;
  ?>    

  <?php
    $block = get_field('wedding_block');
    $image = $block['image'];
    $textPosition = $block['text_position'];
    $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
    $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
    $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
    include get_theme_file_path("templates/partials/square-row.php");
    $image = null;
  ?>

  <?php
    $block = get_field('recommendations_block');
    $image = $block['image'];
    $textPosition = $block['text_position'];
    $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
    $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
    $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
    include get_theme_file_path("templates/partials/square-row.php");
    $image = null;
  ?> 

  <?php include get_theme_file_path("templates/partials/full-width-image.php"); ?>    

  <?php $weddingMenus = get_field('wedding_menus'); $menuType = 'wedding-menus'; ?>
  <section class="wedding-menus" id="menus">
    <div class="container">
      <h1 class="wedding-menus__title"><?php echo $weddingMenus['title']; ?></h1>
      <p class="wedding-menus__body"><?php echo $weddingMenus['body']; ?></p>
      <?php include get_theme_file_path("templates/partials/menus-list.php"); ?>
    </div>
  </section>

  <?php include get_theme_file_path("templates/partials/reservations-panel.php"); ?>    


</div>

<?php get_footer(); ?>
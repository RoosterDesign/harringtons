<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

<div class="page">
  
  <!-- Hero -->
  <?php include get_theme_file_path("templates/partials/hero.php"); ?>  
  <!-- end: Hero -->

  <!-- Reviews Panel -->
  <?php include get_theme_file_path("templates/partials/reviews-panel.php"); ?>    
  <!-- end: Reviews Panel -->

  <!-- Reservation Panel -->
  <?php include get_theme_file_path("templates/partials/reservations-panel.php"); ?>    
  <!-- end: Reservation Panel -->

  <!-- Offers Panel -->
  <?php include get_theme_file_path("templates/partials/offers-panel.php"); ?>    
  <!-- end: Offers Panel -->

  <!-- Menu Panel -->
  <?php include get_theme_file_path("templates/partials/menu-panel.php"); ?>    
  <!-- end: Menu Panel -->

  <!-- Gallery -->
  <?php include get_theme_file_path("templates/partials/gallery.php"); ?>    
  <!-- end: Gallery -->

  <!-- Functions Panel -->
  <?php include get_theme_file_path("templates/partials/functions-panel.php"); ?>    
  <!-- end: Functions Panel -->

  <!-- Full Width Image -->
  <?php include get_theme_file_path("templates/partials/full-width-image.php"); ?>    
  <!-- end: Full Width Image -->

  <!-- Instagram Panel -->
  <?php include get_theme_file_path("templates/partials/instagram-panel.php"); ?>    
  <!-- end: Instagram Panel -->

   <!-- Gallery -->
   <?php include get_theme_file_path("templates/partials/gallery.php"); ?>    
  <!-- end: Gallery -->

</div>

<?php get_footer(); ?>
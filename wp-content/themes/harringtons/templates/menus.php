<?php
/*
Template Name: Menus
*/
?>
<?php get_header(); ?>

<div class="page">
  
  <!-- Masthead -->
  <?php include get_theme_file_path("templates/partials/masthead.php"); ?>  
  <!-- end: Masthead -->

  <!-- Menus List -->
  <?php $menuType = 'normal';
  include get_theme_file_path("templates/partials/menus-list.php"); ?>
  <!-- end: Menus List -->

  <!-- Reservation Panel -->
  <?php include get_theme_file_path("templates/partials/reservations-panel.php"); ?>    
  <!-- end: Reservation Panel -->

  <!-- Offers Panel -->
  <?php include get_theme_file_path("templates/partials/offers-panel.php"); ?>    
  <!-- end: Offers Panel -->

  <!-- Full Width Image -->
  <?php include get_theme_file_path("templates/partials/full-width-image.php"); ?>    
  <!-- end: Full Width Image -->

</div>

<?php get_footer(); ?>
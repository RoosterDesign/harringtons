<?php
/*
Template Name: Reservations
*/
?>
<?php get_header(); ?>

<div class="page">
  
  <!-- Masthead -->
  <?php include get_theme_file_path("templates/partials/masthead.php"); ?>  
  <!-- end: Masthead -->

  <section class="resdiary-wrap">
    <div class="container">
      <div class="resdiary">
        <?php echo get_option('resdiary_embed'); ?>
      </div>
    </div>
  </section>

  <!-- Offers Panel -->
  <?php include get_theme_file_path("templates/partials/offers-panel.php"); ?>    
  <!-- end: Offers Panel -->

  <!-- Full Width Image -->
  <?php include get_theme_file_path("templates/partials/full-width-image.php"); ?>    
  <!-- end: Full Width Image -->

</div>

<?php get_footer(); ?>
<?php
  $mobileImage = 'https://picsum.photos/375/900';
  $tabletImage = 'https://picsum.photos/768/1024';
  $desktopImage = 'https://picsum.photos/1920/1080';
?>

<style>
  .masthead { background-image: url("<?php echo $mobileImage; ?>"); }
  @media only screen and (min-width: 768px) {
    .masthead { background-image: url("<?php echo $tabletImage; ?>"); }
  }
  @media only screen and (min-width: 1024px) {
    .masthead { background-image: url("<?php echo $desktopImage; ?>"); }
  }
</style>

<section class="masthead">
  <div class="container">
    <h1 class="masthead__title"><?php the_title(); ?></h1>
    <p class="masthead__body">Select from below to view our various menus.</p>
  </div>
</section>
<?php
  $mobileImage = 'https://picsum.photos/375/900';
  $tabletImage = 'https://picsum.photos/768/1024';
  $desktopImage = 'https://picsum.photos/1920/1080';
?>

<style>
  .full-width-image { background-image: url("<?php echo $mobileImage; ?>"); }
  @media only screen and (min-width: 768px) {
    .full-width-image { background-image: url("<?php echo $tabletImage; ?>"); }
  }
  @media only screen and (min-width: 1024px) {
    .full-width-image { background-image: url("<?php echo $desktopImage; ?>"); }
  }
</style>

<div class="full-width-image"></div>
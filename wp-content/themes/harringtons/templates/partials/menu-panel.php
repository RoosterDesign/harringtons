<?php
  $mobileImage = 'https://picsum.photos/375/900';
  $tabletImage = 'https://picsum.photos/768/1024';
  $desktopImage = 'https://picsum.photos/1920/1080';
?>

<style>
  .menu-panel { background-image: url("<?php echo $mobileImage; ?>"); }
  @media only screen and (min-width: 768px) {
    .menu-panel { background-image: url("<?php echo $tabletImage; ?>"); }
  }
  @media only screen and (min-width: 1024px) {
    .menu-panel { background-image: url("<?php echo $desktopImage; ?>"); }
  }
</style>

<section class="menu-panel">
  <div class="container">
    <div class="menu-panel__content">
      <h1 class="menu-panel__title">Menus</h1>
      <p class="menu-panel__body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada mi augue, in varius lorem imperdiet nec. Donec orci augue, volutpat vitae purus quis, ultricies rutrum ex. Nulla sit amet est auctor purus tempor molestie. Curabitur a tellus leo.</p>
      <a href="" title="" class="btn btn--secondary">View our menus</a>
    </div>
  </div>
</section>
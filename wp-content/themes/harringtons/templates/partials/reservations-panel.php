<?php
  $mobileImage = 'https://picsum.photos/375/900';
  $tabletImage = 'https://picsum.photos/768/1024';
  $desktopImage = 'https://picsum.photos/1920/1080';
?>

<style>
  .reservation-panel { background-image: url("<?php echo $mobileImage; ?>"); }
  @media only screen and (min-width: 768px) {
    .reservation-panel { background-image: url("<?php echo $tabletImage; ?>"); }
  }
  @media only screen and (min-width: 1024px) {
    .reservation-panel { background-image: url("<?php echo $desktopImage; ?>"); }
  }
</style>

<section class="reservation-panel">
  <div class="container">
  <div class="resdiary">RESDIARY EMBED</div>
    <div class="reservation-panel__inner">      
      <h1 class="reservation-panel__title">Book a table<br/> with us</h1>
      <p class="reservation-panel__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada mi augue, in varius lorem imperdiet nec. Donec orci augue, volutpat vitae purus quis, ultricies rutrum ex. Nulla sit amet est auctor purus tempor molestie. Curabitur a tellus leo.</p>
      <p class="reservation-panel__tel">Book online or call<br/> 01926 852 074</p>
    </div>
  </div>
</section>
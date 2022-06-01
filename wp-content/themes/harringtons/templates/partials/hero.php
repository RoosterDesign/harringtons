<section class="hero">

    <div class="container">
      <h1 class="hero__title"><?php the_field('title'); ?></h1>
      <p class="hero__intro"><?php the_field('body'); ?></p>
      <a href="#" title="Book a table online" class="btn btn--primary hero__btn js-book"><?php the_field('button_text'); ?></a>
    </div>

    <div class="owl-carousel">      
      <img src="https://via.placeholder.com/1000" />
      <img src="https://via.placeholder.com/1000" />
      <img src="https://via.placeholder.com/1000" />
    </div>

    <div class="mouse_scroll">
      <div class="mouse"><div class="mouse__wheel"></div></div>
      <div class="mouse__arrow mouse__arrow--first"></div>
      <div class="mouse__arrow mouse__arrow--second"></div>
      <div class="mouse__arrow mouse__arrow--third"></div>
    </div>

  </section>
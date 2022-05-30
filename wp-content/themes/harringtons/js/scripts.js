
//== Sticky Header

function sitckyHeader(scrollY) {
  let header = document.querySelector('.site-header');

  if (scrollY > 0) {
    header.classList.add('site-header--sticky');
  } else {
    header.classList.remove('site-header--sticky');
  }

}
window.onscroll = function (e) {
  sitckyHeader(window.scrollY);
};



//== Owl Carousel

$(".hero .owl-carousel").owlCarousel({
  animateOut: 'fadeOut',
  items: 1,
  autoplay: true,
  mouseDrag: false,
  touchDrag: false,
  autoplayTimeout: 4000
});

document.addEventListener("DOMContentLoaded", function() {



//== Mobile Nav toggle

function mobileNavToggle() {
  let openNavEl = document.querySelector('.js-open-nav');
  let closeNavEl = document.querySelector('.js-close-nav');
  let header = document.querySelector('.site-header');

  openNavEl.addEventListener('click', function(){
    header.classList.add('site-header--nav-open');
  });

  closeNavEl.addEventListener('click', function(){
    header.classList.remove('site-header--nav-open');
  });

};

mobileNavToggle();
  
  
});
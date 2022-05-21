
//== Sticky Header

function sitckyHeader(scrollY) {
  let header = document.querySelector('.site-header');

  if (scrollY > 0) {
    header.classList.add('site-header--sticky')
  } else {
    header.classList.remove('site-header--sticky')
  }

}



// window.addEventListener('scroll', checkHeader);

// Detect scroll position
// let scrollPosition = Math.round(window.scrollY);



window.onscroll = function (e) {
  console.log('on scroll', window.scrollY);
  sitckyHeader(window.scrollY);
};


$(".hero .owl-carousel").owlCarousel({
  animateOut: 'fadeOut',
  items: 1,
  autoplay: true,
  mouseDrag: false,
  touchDrag: false,
  autoplayTimeout: 4000
});

document.addEventListener("DOMContentLoaded", function() {

  
  
});
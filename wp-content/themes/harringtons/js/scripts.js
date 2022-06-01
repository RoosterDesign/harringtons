
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


//== Waypoints 

let elements = document.querySelectorAll('.animate');
for (let i = 0; i < elements.length; i++) {
  let waypoint = new Waypoint({
    element: elements[i],
    handler: function() {
      this.element.classList.add('animate--in-view');
    },
    offset: "75%"
  })  
};

  
//== On Document Load

document.addEventListener("DOMContentLoaded", function() {
  mobileNavToggle();
});
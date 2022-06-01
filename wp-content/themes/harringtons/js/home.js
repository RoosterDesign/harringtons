

//== Reviews Carousel

// $(".reviews-panel .owl-carousel").owlCarousel({
//   items: 1,
//   margin: 20
// });


function responsiveCarousel() {
  let breakPoint = 1366;
  let checkWidth = window.innerWidth;
  let owlCarousel = $(".reviews-panel .container");

  function startCarousel() {
    owlCarousel.addClass('owl-carousel');
    owlCarousel.owlCarousel({
      responsive : {
        0 : {
            items: 1,
            margin: 20
        },
        768 : {
          items: 2,
          margin: 30
        },
        992 : {
          items: 2,
          margin: 40
        }
      }
    });
  }

  function destroyCarousel() {
    owlCarousel.owlCarousel('destroy');
    // owlCarousel.data('owl.carousel').destroy();
    owlCarousel.removeClass('owl-carousel');
  }

  if (checkWidth >= breakPoint) {
    destroyCarousel();    
  } else {
    startCarousel();
  }
}

responsiveCarousel();
$(window).resize(responsiveCarousel);
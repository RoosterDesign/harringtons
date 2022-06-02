
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



//== Scroll to booking Section

function scrollToBook() {

  let header = document.querySelector('.site-header');
  let currentPage = window.location.pathname;
  let bookButtons = document.querySelectorAll('.js-book');
  let target;

  if (currentPage.indexOf("reservations") > -1) {
    target = document.body;
  } else {
    target = document.querySelector('.reservation-panel');
  }

  for (let i = 0; i < bookButtons.length; i++) {
    const btn = bookButtons[i];
    btn.addEventListener('click', function(e){
      e.preventDefault();

      let headerHeight = header.offsetHeight;
      let elementPosition = target.getBoundingClientRect().top;
      let offsetPosition = elementPosition + window.pageYOffset - headerHeight + 1;

      // Close mobile nav
      header.classList.remove('site-header--nav-open');
      
      window.scrollTo({
        top: offsetPosition,
        behavior: "smooth"
      });

    });
    
  };

};


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

function waypoints() {
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
};
  

//== On Document Load

document.addEventListener("DOMContentLoaded", function() {
  scrollToBook();
  mobileNavToggle();
  waypoints();
});
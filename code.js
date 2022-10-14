// course category area
$(document).ready(function(){
   $('#categories .owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:2
          },
          600:{
              items:3
          },
          1000:{
              items:5  // this number is the number of courses it will show on the carroussel for categories
          }
      }
  })
  // course banner area
   $('#course-band .owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:3  // this number is the number of courses it will show on the carroussel for the page courses
          }
      }
  })
})

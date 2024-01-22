$(document).ready(function(){
      $('.slide__product').slick(
          {    speed: 300,
               infinite: true,
               arrows: false,
                 slidesToShow: 4,
                 slidesToScroll: 3,
               responsive: [
              {
                breakpoint:1023,
                settings: {
                  slidesToShow: 3,
                 slidesToScroll: 2 
                }
              },
              {
                breakpoint:819,
                settings: {
                  slidesToShow: 2,
                 slidesToScroll: 2
                }
              }
            ]
          });
});

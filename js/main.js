$(function(){

    $(window).scroll(function(){
        $('.header').toggleClass('active', $(this).scrollTop() > 0);
    });

    $(".main__form-phone").mask("+7 (999) 999-99-99");
    $(".feedback__form-phone").mask("+7 (999) 999-99-99");
    $(".criminal__form-input").mask("+7 (999) 999-99-99");

    $('.reviews__tab .tab').on('click', function (event) {
        var id = $(this).attr('data-id');
        $('.reviews__tab').find('.tab-item').removeClass('active-tab').hide();
        $('.reviews__tab .tabs').find('.tab').removeClass('active');
        $(this).addClass('active');
        $('#' + id).addClass('active-tab').fadeIn();
        return false;
    });
    $('.menu__btn').on('click', function(){
        $('.menu__list').toggleClass('active');
        $('.logo').toggleClass('active');
        $('.menu__btn-line').toggleClass('active');
       
    });
    $('.example__items').slick({
        arrows: false,
        dots: true, 
        infinite: true,
        responsive: [
            {
                breakpoint: 100000,
                settings: "unslick"
            },
            {
              breakpoint: 1030,
              settings: {               
                slidesToScroll: 1,
                slidesToShow: 2,
              }
        
            },
            {
                breakpoint: 769,
                settings: {
                  slidesToShow: 1,
                }
          
              },
        ]
    });
    $('.reviews__tab-mails').slick({
        arrows: false,
        dots: true, 
        infinite: true,
        responsive: [
            {
                breakpoint: 100000,
                settings: "unslick"
            },
            {
              breakpoint: 769,
              settings: {               
                slidesToScroll: 1,
                slidesToShow: 2,
                // variableWidth: true,
              }
        
            },
            {
                breakpoint: 635,
                settings: {               
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  variableWidth: true,
                }
            },
        ]
    });
    $('.reviews__tab-reviews').slick({
        arrows: false,
        dots: true, 
        infinite: true,
        slidesToScroll: 1,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 100000,
                settings: "unslick"
            },
            {
              breakpoint: 769,
              settings: {               
                slidesToShow: 2,
                slidesToScroll: 1,
              }
            },
            {
                breakpoint: 635,
                settings: {               
                  slidesToShow: 1,
                  slidesToScroll: 1,
                }
              },
        ]
    });
    $('.awards__items').slick({
      arrows: false,
      dots: true, 
      infinite: true,
      slidesToScroll: 1,
    //   variableWidth: true,
      responsive: [
          {
              breakpoint: 100000,
              settings: "unslick"
          },
          {
            breakpoint: 769,
            settings: {               
              slidesToShow: 2,
              slidesToScroll: 1,
            }
          },
          {
              breakpoint: 635,
              settings: {               
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            },
      ]
  });
    
    $('.clients__items').slick({
      arrows: false,
      dots: false, 
      infinite: true,
      
      responsive: [
          {
              breakpoint: 100000,
              settings: "unslick"
          },
          {
            breakpoint: 1150,
            settings: {               
              slidesToScroll: 3,
              slidesToShow: 1,
              variableWidth: true,
              
            }
      
          },
          {
              breakpoint: 635,
              settings: {               
                slidesToShow: 1,
                slidesToScroll: 1,
                variableWidth: true,
              }
          },
      ]
    });

    $('[data-fancybox="images"]').fancybox({
        toolbar: false,
    });
    $('[data-fancybox="review"]').fancybox({
        toolbar: false,
    });

    new WOW().init();
});

let map;

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        
    center: { lat: 43.1502151, lng: 131.906339 },
    zoom: 17,
    disableDefaultUI: false,
    scaleControl: false,
    zoomControl: false,
    fullscreenControl: false,
    mapTypeControl: false,
    streetViewControl: false,
    
    styles: [{
        "featureType": "landscape.natural",
        "stylers": [{
            "color": "#bcddff"
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "#5fb3ff"
        }]
    }, {
        "featureType": "road.arterial",
        "stylers": [{
            "color": "#ebf4ff"
        }]
    }, {
        "featureType": "road.local",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "#ebf4ff"
        }]
    }, {
        "featureType": "road.local",
        "elementType": "geometry.stroke",
        "stylers": [{
                "visibility": "on"
            },
            {
                "color": "#93c8ff"
            }
        ]
    }, {
        "featureType": "landscape.man_made",
        "elementType": "geometry",
        "stylers": [{
            "color": "#c7e2ff"
        }]
    }, {
        "featureType": "transit.station.airport",
        "elementType": "geometry",
        "stylers": [{
                "saturation": 100
            },
            {
                "gamma": 0.82
            },
            {
                "hue": "#0088ff"
            }
        ]
    }, {
        "elementType": "labels.text.fill",
        "stylers": [{
            "color": "#1673cb"
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "labels.icon",
        "stylers": [{
                "saturation": 58
            },
            {
                "hue": "#006eff"
            }
        ]
    }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{
            "color": "#4797e0"
        }]
    }, {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{
                "color": "#209ee1"
            },
            {
                "lightness": 49
            }
        ]
    }, {
        "featureType": "transit.line",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "#83befc"
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#3ea3ff"
        }]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{
                "saturation": 86
            },
            {
                "hue": "#0077ff"
            },
            {
                "weight": 0.8
            }
        ]
    }, {
        "elementType": "labels.icon",
        "stylers": [{
                "hue": "#0066ff"
            },
            {
                "weight": 1.9
            }
        ]
    }, {
        "featureType": "poi",
        "elementType": "geometry.fill",
        "stylers": [{
                "hue": "#0077ff"
            },
            {
                "saturation": -7
            },
            {
                "lightness": 24
            }
        ]
    }]
    
    }); 

    const marker = new google.maps.Marker({
    position: {lat: 43.1502151, lng: 131.906339},
    map: map,
    });
    
    
}

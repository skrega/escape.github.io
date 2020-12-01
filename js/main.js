$(function(){

    $(function () {
        var location = window.location.href;
        var cur_url = '/' + location.split('/').pop();
    
        $('.menu__list a').each(function () {
            var location = window.location.href;
            var link = this.href; 
            if(location == link) {
                $(this).addClass('active');
            }
        });
    });

    $(window).scroll(function(){
        $('.header').toggleClass('active', $(this).scrollTop() > 0);
    });

    $(".main__form-phone").mask("+7 (999) 999-99-99");
    $(".feedback__form-phone").mask("+7 (999) 999-99-99");
    $(".practice__form-input").mask("+7 (999) 999-99-99");

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
        dots: false, 
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
                slidesToShow: 2,
                slidesToScroll: 1,
              }
            },
        ]
  });

    $('.reviews__items').slick({
    arrows: false,
    dots: true, 
    infinite: true,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 100000,
            settings: "unslick"
        },
        {
          breakpoint: 769,
          settings: {               
            slidesToShow: 2,
          }
        },
        {
            breakpoint: 635,
            settings: {               
              slidesToShow: 2,
            }
        },
        {
            breakpoint: 490,
            settings: {               
              slidesToShow: 1,
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

    $('[data-fancybox="case"]').fancybox({

        btnTpl: {    
            arrowLeft:
              '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}">' +
              '<svg width="16" height="31" viewBox="0 0 16 31" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.00549154 15.5553C0.0329979 15.872 0.160303 16.1717 0.369073 16.4114L12.379 30.2979C12.506 30.4543 12.6632 30.5834 12.8412 30.6778C13.0192 30.7721 13.2144 30.8296 13.4151 30.847C13.6158 30.8643 13.818 30.8411 14.0095 30.7786C14.2011 30.7162 14.3781 30.6159 14.53 30.4836C14.682 30.3513 14.8057 30.1898 14.894 30.0087C14.9822 29.8276 15.0331 29.6306 15.0436 29.4294C15.0541 29.2283 15.024 29.027 14.9551 28.8377C14.8862 28.6484 14.7799 28.4749 14.6426 28.3275L3.48884 15.4263L14.6426 2.52498C14.7799 2.3776 14.8863 2.20409 14.9551 2.01479C15.024 1.82548 15.0541 1.62424 15.0436 1.42306C15.0331 1.22188 14.9822 1.02487 14.894 0.843764C14.8057 0.662659 14.682 0.501164 14.53 0.368897C14.3781 0.236628 14.2011 0.136294 14.0095 0.0738661C13.818 0.0114404 13.6158 -0.0118006 13.4151 0.00552575C13.2144 0.022854 13.0192 0.0803987 12.8412 0.17473C12.6632 0.26906 12.506 0.398247 12.379 0.554602L0.369073 14.4411C0.236853 14.5929 0.136536 14.7698 0.0740754 14.9612C0.0116143 15.1526 -0.0117151 15.3547 0.00549154 15.5553Z" fill="white"/></svg>' +
              "</button>",
            arrowRight:
              '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}">' +
              '<svg width="16" height="31" viewBox="0 0 16 31" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.0394 15.2973C15.0119 14.9806 14.8846 14.6808 14.6758 14.4411L2.66593 0.554632C2.5389 0.39828 2.3817 0.269092 2.20369 0.174762C2.02569 0.0804327 1.83051 0.0228906 1.6298 0.00556335C1.42909 -0.0117639 1.22694 0.0114781 1.03541 0.0739048C0.843868 0.136332 0.666862 0.236667 0.514911 0.368934C0.36296 0.501201 0.239175 0.662695 0.15094 0.843799C0.0627059 1.0249 0.0118169 1.22191 0.00131124 1.42309C-0.0091954 1.62427 0.0209102 1.82551 0.0898007 2.01482C0.158692 2.20412 0.264974 2.37763 0.402323 2.52501L11.5561 15.4263L0.402322 28.3276C0.264972 28.4749 0.158669 28.6484 0.0897767 28.8378C0.0208852 29.0271 -0.00919565 29.2283 0.00131002 29.4295C0.0118157 29.6307 0.0627047 29.8277 0.150939 30.0088C0.239174 30.1899 0.362959 30.3514 0.514909 30.4836C0.666861 30.6159 0.843866 30.7162 1.0354 30.7787C1.22694 30.8411 1.42909 30.8643 1.6298 30.847C1.83051 30.8297 2.02568 30.7721 2.20369 30.6778C2.38169 30.5835 2.5389 30.4543 2.66593 30.2979L14.6758 16.4115C14.8081 16.2596 14.9084 16.0827 14.9708 15.8913C15.0333 15.6999 15.0566 15.4979 15.0394 15.2973Z" fill="white"/></svg>' +
              "</button>",
        
            smallBtn:
              '<button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="{{CLOSE}}">' +
              '<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.462746 20.3084C-0.153024 20.9243 -0.152929 21.9225 0.462935 22.5382C1.0788 23.154 2.07721 23.1539 2.69297 22.5381L11.5002 13.73L20.3082 22.5373C20.9239 23.153 21.9224 23.153 22.5382 22.5373C23.1539 21.9216 23.1539 20.9232 22.5382 20.3074L13.7301 11.5L22.5375 2.6916C23.1532 2.07578 23.1532 1.07744 22.5372 0.461734C21.9215 -0.15399 20.923 -0.153896 20.3072 0.461923L11.4999 9.27012L2.6919 0.46268C2.07609 -0.153076 1.07766 -0.153076 0.461863 0.46268C-0.153954 1.07845 -0.153954 2.07679 0.461863 2.69256L9.27018 11.5001L0.462746 20.3084Z" fill="white"/></svg>' +
              "</button>"
          },
    });

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

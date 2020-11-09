$(function(){

    $(window).scroll(function(){
        $('.header').toggleClass('active', $(this).scrollTop() > 0);
    });

    $(".main__form-phone").mask("+7 (999) 999-99-99");
    $(".feedback__form-phone").mask("+7 (999) 999-99-99");

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
                slidesToShow: 3,
                variableWidth: true,
                // centerMode: true,
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
})
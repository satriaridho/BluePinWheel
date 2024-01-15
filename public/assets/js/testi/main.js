(function ($) {
    'use strict';
    var caro = {
        m: function (e) {
            caro.methods();
        },
        methods: function (e) {
            caro.testimonialActivate();
        },
        testimonialActivate: function () {
            $('.testi-activate').slick({
                infite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                adaptiveHeight: true,
                cssEase: 'linear',
                prevArrow: '<button class="slide-arrow prev-arrow"><i class="uil uil-angle-left-b"></i></button>',
                nextArrow: '<button class="slide-arrow next-arrow"><i class="uil uil-angle-right-b"></i></button>',
            });
        },
    }
    caro.m();
})(jQuery);
export default function slickInit() {
    if ($('[data-slider]').length > 0) {
        import('slick-carousel/slick/slick')
            .then(function (value) {
                $('.slider').slick({
                    arrows: true,
                    dots: true,
                    slidesToShow: 5,
                    slidesToScroll: 2,
                    responsive: [
                        {
                            breakpoint: 1440,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 1150,
                            settings: {
                                dots: false,
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 1000,
                            settings: {
                                arrows: false,
                                dots: true,
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 870,
                            settings: {
                                arrows: false,
                                dots: true,
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                arrows: false,
                                dots: false,
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                $('.slider-for').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: true,
                    asNavFor: '.slider-nav'
                });
                $('.slider-nav').slick({
                    arrows: false,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    asNavFor: '.slider-for',
                    vertical: true,
                    verticalSwiping: true,
                    focusOnSelect: true,
                    responsive: [
                        {
                            breakpoint: 1330,
                            settings: {
                                slidesToShow: 3,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
                            }
                        },

                    ]
                });

            });
        // существует
    } else {
        // не существует
    }

}

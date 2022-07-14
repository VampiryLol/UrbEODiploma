(function ($) {

    $('#cart .modal-body').on('click', '.del-item', function (e) {
        e.preventDefault();
        const id = $(this).data('id');
        $.ajax({
            url: '/cart/del-item',
            // url: '/web/cart/del-item',
            data: { id: id },
            type: 'GET',
            success: function (res) {
                if (!res) alert('Ошибка удаления товара');
                showCart(res);
            },
            error: function () {
                alert('ERROR');
            }
        });
    });

    $('.clear-cart').on('click', function (e) {
        e.preventDefault();
        $.ajax({
            url: '/cart/clear',
            // url: '/web/cart/clear',
            type: 'GET',
            success: function (res) {
                if (!res) alert('Ошибка очистки корзины');

                showCart(res);
            },
            error: function () {
                alert('ERROR');
            }
        });
    });

    $('.clear-cart-all').on('click', function (e) {
        e.preventDefault();
        $.ajax({
            url: '/cart/clear',
            // url: '/web/cart/clear',
            type: 'GET',
            success: function (res) {
                if (!res) alert('Ошибка очистки корзины');

                var cart = '<div class="container-fluid py-5"><div class="container py-5"><div class="row justify-content-center"><div class="col-lg-6 col-md-8 col text-center mb-4"><h1>Корзина пуста</h1></div></div></div></div>';
                $('#cart-div').after(cart);
                $('#cart-div').remove();
            },
            error: function () {
                alert('ERROR');
            }
        });
    });

    $('.cart-del-item').on('click', function (e) {
        e.preventDefault();
        const id = $(this).data('id');
        $.ajax({
            url: '/cart/del-item',
            // url: '/web/cart/del-item',
            data: { id: id },
            type: 'GET',
            success: function (res) {
                if (!res) alert('Ошибка удаления товара');

                let sum = $('#item-' + id).find($('.price'))[0].outerText.slice(3, -5);
                let sum2 = $('.sum')[0].outerText.slice(3, -5);
                let sum3 = sum2 - sum;

                $('.sum')[0].innerText = 'От ' + Math.round(sum3) + " руб."

                $('#item-' + id).remove();
                if ($('#cart-table').find($('.sum'))[0].outerText.slice(3, -5) == 0) {
                    const cart = '<div class="container-fluid py-5"><div class="container py-5"><div class="row justify-content-center"><div class="col-lg-6 col-md-8 col text-center mb-4"><h1>Корзина пуста</h1></div></div></div></div>';
                    $('#cart-div').after(cart);
                    $('#cart-div').remove();
                }
            },
            error: function () {
                alert('ERROR');
            }
        });
    });


    function showCart(cart) {
        $('#cart .modal-body').html(cart);
        $('#cart').modal();
    }

    $('.add-to-cart').on('click', function (e) {
        e.preventDefault();
        const id = $(this).data('id');
        $.ajax({
            url: '/cart/add',
            // url: '/web/cart/add',
            data: { id: id },
            type: 'GET',
            success: function (res) {
                if (!res) alert('Ошибка добавления товара');

                showCart(res);
            },
            error: function () {
                alert('ERROR');
            }
        });
    });

    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Service carousel
    $(".service-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            }
        }
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });

    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({ filter: $(this).data('filter') });
    });


    // Team carousel
    $(".team-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ]
    });

})(jQuery);


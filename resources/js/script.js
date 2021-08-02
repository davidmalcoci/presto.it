
//--------------- Swiper  ---------------

const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // // If we need pagination
    // pagination: {
    //     el: '.swiper-pagination',
    // },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },

    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 50,
        },
        1430: {
            slidesPerView: 2,
            spaceBetween: 50,
        },
        1700: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
    
});

//--------------- Gallery  ---------------

let App = (function () {

    //=== Use Strict ===//
    'use strict';

    //=== Private Variables ===//
    var gallery = $('#js-gallery');

    //=== Gallery Object ===//
    var Gallery = {
        zoom: function (imgContainer, img) {
            var containerHeight = imgContainer.outerHeight(),
                src = img.attr('src');

            if (src.indexOf('/products/normal/') != -1) {
                // Set height of container
                imgContainer.css("height", containerHeight);

                // Switch hero image src with large version
                img.attr('src', src.replace('/products/normal/', '/products/zoom/'));

                // Add zoomed class to gallery container
                gallery.addClass('is-zoomed');

                // Enable image to be draggable
                img.draggable({
                    drag: function (event, ui) {
                        ui.position.left = Math.min(100, ui.position.left);
                        ui.position.top = Math.min(100, ui.position.top);
                    }
                });
            } else {
                // Ensure height of container fits image
                imgContainer.css("height", "auto");

                // Switch hero image src with normal version
                img.attr('src', src.replace('/products/zoom/', '/products/normal/'));

                // Remove zoomed class to gallery container
                gallery.removeClass('is-zoomed');
            }
        },
        switch: function (trigger, imgContainer) {
            var src = trigger.attr('href'),
                thumbs = trigger.siblings(),
                img = trigger.parent().prev().children();

            // Add active class to thumb
            trigger.addClass('is-active');

            // Remove active class from thumbs
            thumbs.each(function () {
                if ($(this).hasClass('is-active')) {
                    $(this).removeClass('is-active');
                }
            });

            // Reset container if in zoom state
            if (gallery.hasClass('is-zoomed')) {
                gallery.removeClass('is-zoomed');
                imgContainer.css("height", "auto");
            }

            // Switch image source
            img.attr('src', src);
        }
    };

    //=== Public Methods ===//
    function init() {

        // Listen for clicks on anchors within gallery
        gallery.delegate('a', 'click', function (event) {
            var trigger = $(this);
            var triggerData = trigger.data("gallery");

            if (triggerData === 'zoom') {
                var imgContainer = trigger.parent(),
                    img = trigger.siblings();
                Gallery.zoom(imgContainer, img);
            } else if (triggerData === 'thumb') {
                var imgContainer = trigger.parent().siblings();
                Gallery.switch(trigger, imgContainer);
            } else {
                return;
            }

            event.preventDefault();
        });

    }

    //=== Make Methods Public ===//
    return {
        init: init
    };

})();

App.init();



//--------------- Cambio colore menù ---------------

document.addEventListener('scroll', function () {

    const navbar = document.querySelector('#navbar-presto')

    const navbarSupported = document.querySelector('#navbarSupportedContent')

    const navbarToggler = document.querySelector('#navbar-toggler')

    if (window.scrollY > 100) {
        navbar.classList.add('p-bg-white', 'shadow', 'transition')
    } else {
        navbar.classList.remove('p-bg-white', 'shadow',)
    }

    if (navbarSupported.classList.contains('show') && window.scrollY < 1) {

        navbar.classList.add('p-bg-white')

    }

})

document.addEventListener('click', function () {

    const navbar = document.querySelector('#navbar-presto')

    navbar.classList.add('p-bg-white', 'shadow', 'transition')

})

//--------------- Cambio icona menù ---------------

let iconMenu = document.querySelector('#icon-menu')
let iconIcs = document.querySelector('#icon-ics')


iconMenu.addEventListener('click', function icon() {

    if (iconIcs.classList.contains('d-none')) {

        iconIcs.classList.remove('d-none')
        iconMenu.classList.add('d-none')

    }
})

iconIcs.addEventListener('click', function icon() {

    if (iconMenu.classList.contains('d-none')) {

        iconMenu.classList.remove('d-none')
        iconIcs.classList.add('d-none')
    }
})






//--------------- Notification  ---------------

const countIndicator = document.getElementById("unseen_count");
// let currentCount = 0;

function actionAdd() {
    //   currentCount++;
    //   countIndicator.innerText = currentCount;
    // countIndicator.classList.remove('unseen-count-animation');
    setTimeout(function () {
        countIndicator.classList.add('unseen-count-animation');
    }, 50)
}
actionAdd()

//--------------- Swiper  ---------------

// function parar() {
//     let el = document.getElementById("sprites");
//     el.style.webkitAnimationPlayState = 'paused';
//     el.style.AnimationPlayState = 'paused';
//     el.style.MozAnimationPlayState = 'paused';
//     el.style.MsAnimationPlayState = 'paused';
// }
// function continuar() {
//     let el = document.getElementById("sprites");
//     el.style.webkitAnimationPlayState = 'running';
//     el.style.AnimationPlayState = 'running';
//     el.style.MozAnimationPlayState = 'running';
//     el.style.MsAnimationPlayState = 'running';
// }

//--------------- Btn back to top  ---------------

let btn = $('#button');

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
});


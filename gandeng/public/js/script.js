const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
});

function expandFAQ(id) {
    console.log(id)
    var currFAQ = document.getElementById(id)
    var child = currFAQ.children

    for (var i = 0; i < child.length; i++) {
        if (i === 0) {
            var chevron = child[i].children
            console.log(chevron)
            chevron[0].classList.toggle('faq-chevron-active')
        } else if (i === 1) {
            child[i].classList.toggle('faq-answer-active')
        }
    }
}

function switchDepartment(id) {
    var selected = document.getElementById(id)
    var buttonParent = selected.parentElement
    var buttons = buttonParent.children

    var memberParent = document.getElementById('department-container')
    var members = memberParent.children
    var selectedIdx

    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove('nav-active')
        
        if (buttons[i].id === id) {
            selectedIdx = i
            buttons[i].classList.add('nav-active')
        }
    }

    for (var i = 0; i < members.length; i++) {
        members[i].classList.add('d-none')

        if (selectedIdx === i) {
            members[i].classList.remove('d-none')
        }
    }
}

function initParadoxWay() {
    "use strict";

    // Cards
    if ($(".testimonials-carousel").length > 0) {
        var j2 = new Swiper(".testimonials-carousel .swiper-container", {
            preloadImages: false,
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            grabCursor: true,
            mousewheel: false,
            centeredSlides: true,
            pagination: {
                el: '.tc-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: '.listing-carousel-button-next',
                prevEl: '.listing-carousel-button-prev',
            },
            breakpoints: {
                760: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 5,
                },
            }
        });
    }

    
}

function zoomProfile(e) {
    let textDiv = e.children[0].children[1]
    console.log(textDiv)
}

//   Init All ------------------
$(document).ready(function () {
    initParadoxWay();
});
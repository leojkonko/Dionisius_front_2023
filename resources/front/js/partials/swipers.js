/**
 * Declaração dos swipers
 * Exemplo:
 * let swiper = new Swiper(".swiper-teste", {opcoes})
 */

new Swiper(".banner-swiper", {
    /*autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },*/
    rewind: false,
    navigation: {
        nextEl: ".banner-swiper .swiper-button-next",
        prevEl: ".banner-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".banner-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
});
new Swiper(".cardapio-swiper", {
    /*autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },*/
    slidesPerView: 2,
    spaceBetween: 20,
    breakpoints: {
        1200: {
            slidesPerView: 6,
        },
        992: {
            slidesPerView: 5,
        },
        767: {
            slidesPerView: 4,
        },
        576: {
            slidesPerView: 3,
        },
    },
    rewind: false,
    navigation: {
        nextEl: ".cardapio-swiper .swiper-button-next",
        prevEl: ".cardapio-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".cardapio-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
});

new Swiper(".casamento-swiper", {
    rewind: false,
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: ".casamento-swiper .swiper-button-next",
        prevEl: ".casamento-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".casamento-swiper .swiper-pagination",
        type: "bullets",
        dynamicBullets: true,
        clickable: true,
    },
});
new Swiper(".gallery-swiper", {
    rewind: false,
    slidesPerView: 2,
    spaceBetween: 20,
    navigation: {
        nextEl: ".gallery-swiper .swiper-button-next",
        prevEl: ".gallery-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".gallery-swiper .swiper-pagination",
        type: "bullets",
        dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        1200: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 3,
        },
        767: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 2,
        },
    },
});

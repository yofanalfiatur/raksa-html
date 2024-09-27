// hamburger-menu
document.querySelector('.hamburger-icon').addEventListener('click', function() {
    const menu = document.querySelector('.menu');
    const hamburgerIcon = document.querySelector('.hamburger-icon');
    const closeIcon = document.querySelector('.close-icon');

    menu.classList.add('active');
    hamburgerIcon.classList.add('active');
    closeIcon.classList.add('active');
  });
  document.querySelector('.close-icon').addEventListener('click', function() {
    const menu = document.querySelector('.menu');
    const hamburgerIcon = document.querySelector('.hamburger-icon');
    const closeIcon = document.querySelector('.close-icon');

    menu.classList.remove('active');
    hamburgerIcon.classList.remove('active');
    closeIcon.classList.remove('active');
});
// slider about 
document.addEventListener( 'DOMContentLoaded', function () {
new Splide( '#aboutSplide', {
    type: 'loop',
    perPage: 3,
    focus: 'center',
    perMove: 1,
    autoplay: false,
    interval: 3000,
    pauseOnHover: true,
    pagination: true, 
    arrows: true,
    gap: '20px', 
} ).mount();
splide.on('mounted move', function () {
    var paginationItems = document.querySelectorAll('.splide__pagination__page');
    paginationItems.forEach(function (item, index) {
    item.textContent = index + 1;
    });
});
} );

// slider penghargaan 
document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#penghargaanSplide', {
        type: 'loop',
        perPage: 3,
        focus: 'center',
        perMove: 1,
        autoplay: true,
        interval: 3000,
        pauseOnHover: true,
        pagination: true, 
        arrows: false,
        gap: '20px',
        breakpoints: {
            728: {
                perPage: 1,
            }
        },
    } ).mount();
} );

// glightbox
const lightbox = GLightbox({
    touchNavigation: true,
    loop: true,
    autoplayVideos: true
});

// footer dropdown
document.addEventListener('DOMContentLoaded', function () {
const menus = document.querySelectorAll('.footer-2 .sitemap .menu-1, .footer-2 .sitemap .menu-2');

menus.forEach(menu => {
    menu.querySelector('span').addEventListener('click', function () {
    menu.classList.toggle('active');
    });
});
});
document.addEventListener('DOMContentLoaded', function() {
    var arrows = document.querySelectorAll('.arrow-down');
    arrows.forEach(function(arrow) {
        arrow.addEventListener('click', function(event) {
            event.preventDefault();
            var dropdownContent = this.parentNode.nextElementSibling;
            if (dropdownContent && dropdownContent.classList.contains('dropdown-content')) {
                dropdownContent.classList.toggle('expand');
            }
        });
    });
});
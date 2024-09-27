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

// fungsi copy promo
document.getElementById("copyPromo").addEventListener("click", function() {
    const promoCode = "RONULTZ";
    navigator.clipboard.writeText(promoCode)
    .then(() => {
        alert("Kode promo berhasil disalin: " + promoCode);
    })
    .catch(err => {
        console.error('Gagal menyalin: ', err);
    });
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
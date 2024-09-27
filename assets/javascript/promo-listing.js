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

// slider hero promosi
document.addEventListener("DOMContentLoaded", function () {
    new Splide("#promoSplide", {
        type: "loop",
        perPage: 3, 
        focus: 'center', 
        perMove: 1,
        autoplay: false,
        interval: 3000,
        pagination: true,
        arrows: false,
        gap: "30%",
        breakpoints: {
            768: {
                perPage: 1,
                gap: "5%",
            },
        }
    }).mount();
});

// fungsi filter
document.getElementById('promos').addEventListener('change', function() {
    const selectedValue = this.value.toLowerCase(); 
    let count = 0;

    // Change the color of the select element based on the selected value
    if (selectedValue === 'filter-kategori') {
        this.style.backgroundColor = ''; 
        this.style.color = ''; 
    } else {
        this.style.backgroundColor = '#FF9000'; 
        this.style.color = '#FFF'; 
    }

    const pages = document.querySelectorAll('.pages-container > div[class^="page-"]');
    pages.forEach(page => {
        const cards = page.querySelectorAll('.promosi-card > a');

        // Apply the filter to each card
        let pageHasVisibleCard = false;
        cards.forEach(card => {
            const categoryLabel = card.querySelector('.category-label').textContent.trim().toLowerCase();

            if (selectedValue === 'filter-kategori') {
                card.style.display = 'block'; // Show all cards
                count++;
                pageHasVisibleCard = true;
            } else if (categoryLabel === selectedValue) {
                card.style.display = 'block'; // Show matching card
                count++;
                pageHasVisibleCard = true;
            } else {
                card.style.display = 'none'; // Hide non-matching card
            }
        });

        // Show the page if it has at least one visible card, otherwise hide it
        if (pageHasVisibleCard) {
            page.style.display = 'block';
        } else {
            page.style.display = 'none';
        }
    });

    document.querySelector('.filter-indicator').textContent = count;

    if (count > 0) {
        const firstVisiblePage = Array.from(pages).find(page => page.style.display === 'block');
        if (firstVisiblePage) {
            pages.forEach((page, index) => {
                if (page === firstVisiblePage) {
                    goToPage(index);
                }
            });
        }
    }
});

// fungsi pagination
document.addEventListener("DOMContentLoaded", function() {
    // Target the single page, .page-1 in your case
    const pages = document.querySelectorAll('.pages-container > div[class^="page-"]');
    const paginationIndicators = document.querySelector('.pagination-indicators');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentPage = 0;

    if (pages.length === 1) {
        const indicator = document.createElement('div');
        indicator.classList.add('page-indicator', 'active'); 
        indicator.textContent = 1;
        paginationIndicators.appendChild(indicator);

        // Hide the pagination buttons if there's only one page
        prevBtn.style.display = 'none';
        nextBtn.style.display = 'none';
    } else {
        // If you add more pages in the future, use this loop to create indicators
        pages.forEach((page, index) => {
            const indicator = document.createElement('div');
            indicator.classList.add('page-indicator');
            if (index === 0) indicator.classList.add('active');
            indicator.textContent = index + 1;
            indicator.addEventListener('click', () => goToPage(index));
            paginationIndicators.appendChild(indicator);
        });

        // const indicators = document.querySelectorAll('.page-indicator');

        function goToPage(pageNumber) {
            const pages = document.querySelectorAll('.pages-container > div[class^="page-"]');
            
            // Hide all pages
            pages.forEach((page, index) => {
                if (index === pageNumber) {
                    page.style.display = 'block';
                } else {
                    page.style.display = 'none';
                }
            });
        
            // Check if the current page is page 2, and hide sections if so
            const heroSection = document.querySelector('.hero-promosi');
            const carouselSection = document.querySelector('#image-carousel');
        
            if (pageNumber === 1) { // Assuming page 2 has index 1
                heroSection.style.display = 'none';
                carouselSection.style.display = 'none';
            } else {
                heroSection.style.display = 'block';
                carouselSection.style.display = 'block';
            }
        
            // Update pagination indicator (make the active one highlighted)
            const indicators = document.querySelectorAll('.pagination-indicators .page-indicator');
            indicators.forEach((indicator, index) => {
                if (index === pageNumber) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        }

        // Handle the next button
        nextBtn.addEventListener('click', function() {
            if (currentPage < pages.length - 1) {
                goToPage(currentPage + 1);
            }
        });

        // Handle the previous button
        prevBtn.addEventListener('click', function() {
            if (currentPage > 0) {
                goToPage(currentPage - 1);
            }
        });

        // Initially, hide all pages except the first
        pages.forEach((page, index) => {
            if (index !== 0) page.style.display = 'none';
        });
    }
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
// fungsi hamburger-menu
document.querySelector('.hamburger-icon').addEventListener('click', function() {
  const menu = document.querySelector('.menu');
  const hamburgerIcon = document.querySelector('.hamburger-icon');
  const closeIcon = document.querySelector('.close-icon');

  console.log("Hamburger clicked"); // Debugging line
  menu.classList.add('active');
  hamburgerIcon.classList.add('active');
  closeIcon.classList.add('active');
  console.log("Menu classes:", menu.classList); // Debugging line
});
document.querySelector('.close-icon').addEventListener('click', function() {
  const menu = document.querySelector('.menu');
  const hamburgerIcon = document.querySelector('.hamburger-icon');
  const closeIcon = document.querySelector('.close-icon');

  console.log("Close clicked"); // Debugging line
  menu.classList.remove('active');
  hamburgerIcon.classList.remove('active');
  closeIcon.classList.remove('active');
  console.log("Menu classes:", menu.classList); // Debugging line
});

// fungsi tab form
function showTab(tab, event) {
  const tabs = document.querySelectorAll('.tab-content');
  tabs.forEach((t) => {
      t.style.display = 'none';
  });

  const buttons = document.querySelectorAll('.form-tabs button');
  buttons.forEach((btn) => {
      btn.classList.remove('active');
  });

  document.getElementById(tab).style.display = 'flex';

  if (event) {
      event.target.classList.add('active');
  }
}
document.addEventListener('DOMContentLoaded', () => {
  showTab('rumah');
});


// function slider foto
document.addEventListener( 'DOMContentLoaded', function () {
  new Splide('.splide', {
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
      768: {
          perPage: 1,
      },
  }
  }).mount();

  splide.on('mounted move', function () {
    var paginationItems = document.querySelectorAll('.splide__pagination__page');
    paginationItems.forEach(function (item, index) {
      item.textContent = index + 1;
    });
  });
} );

// function slider pelayanan
document.addEventListener( 'DOMContentLoaded', function () {
  new Splide( '#pelayananSplide', {
    type   : 'loop',
    perPage: 1, 
    autoplay: true,
    interval: 3000,
    pagination: true,
    arrows: false, 
    gap: '20px',
  } ).mount();
} );



// Animasi untuk top-review
const topReviewContainer = document.querySelector('.top-review');
const topCards = document.querySelectorAll('.card-top-review');

// Clone semua card di dalam container secara dinamis
topCards.forEach(card => {
  const clone = card.cloneNode(true);
  topReviewContainer.appendChild(clone);
});

let topStartTime = null;
let topDuration = 10000;
let topWidth = topReviewContainer.scrollWidth / 2;

function animateTopReview(timestamp) {
  if (!topStartTime) topStartTime = timestamp;
  let elapsed = timestamp - topStartTime;
  let progress = (elapsed % topDuration) / topDuration;
  let currentPosition = -progress * topWidth;

  topReviewContainer.style.transform = `translateX(${currentPosition}px)`;
  requestAnimationFrame(animateTopReview);
}

// Animasi untuk bottom-review
const bottomReviewContainer = document.querySelector('.bottom-review');
const bottomCards = document.querySelectorAll('.card-bottom-review');
bottomCards.forEach(card => {
  const clone = card.cloneNode(true);
  bottomReviewContainer.appendChild(clone);
});

let bottomStartTime = null;
let bottomDuration = 20000; // durasi dalam ms (10 detik)
let bottomWidth = bottomReviewContainer.scrollWidth / 2;

function animateBottomReview(timestamp) {
  if (!bottomStartTime) bottomStartTime = timestamp;
  let elapsed = timestamp - bottomStartTime;

  // Perhitungan posisi yang akan terus bergerak dari kiri ke kanan
  let progress = (elapsed % bottomDuration) / bottomDuration; // progress antara 0 dan 1
  let currentPosition = -(1 - progress) * bottomWidth; // Memulai dari luar layar di kiri

  bottomReviewContainer.style.transform = `translateX(${currentPosition}px)`;
  requestAnimationFrame(animateBottomReview);
}
// Mulai animasi saat halaman sudah siap
window.addEventListener('load', () => {
  requestAnimationFrame(animateTopReview);
  requestAnimationFrame(animateBottomReview);
});

// function slider mobile review
document.addEventListener( 'DOMContentLoaded', function () {
  new Splide( '#reviewSplide', {
    type   : 'loop',
    perPage: 1, 
    autoplay: true,
    interval: 3000,
    pagination: true,
    arrows: false, 
    gap: '20px',
  } ).mount();
} );

// f.a.q
const filterButtons = document.querySelectorAll('.faq-filter button');
const faqItems = document.querySelectorAll('.faq-item');
const faqToggles = document.querySelectorAll('.faq-question');
const selectFilter = document.getElementById('faq-select-filter'); // Select element

// Filter functionality for buttons (desktop)
filterButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove active class from all buttons
    filterButtons.forEach(btn => btn.classList.remove('active'));
    // Add active class to the clicked button
    button.classList.add('active');

    const filter = button.getAttribute('data-filter');

    // Show only the FAQ items with the corresponding category
    faqItems.forEach(item => {
      const category = item.getAttribute('data-category');
      if (category === filter) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });
  });
});

// Filter functionality for dropdown (mobile)
selectFilter.addEventListener('change', () => {
  const selectedFilter = selectFilter.value;

  // Show only the FAQ items with the corresponding category
  faqItems.forEach(item => {
    const category = item.getAttribute('data-category');
    if (category === selectedFilter) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
});

// Toggle FAQ answer visibility
faqToggles.forEach(toggle => {
  toggle.addEventListener('click', () => {
    const faqItem = toggle.parentElement;
    const answer = faqItem.querySelector('.faq-answer');
    const toggleIcon = toggle.querySelector('.faq-toggle');

    // Toggle answer visibility
    if (answer.classList.contains('open')) {
      answer.classList.remove('open');
      faqItem.classList.remove('active');
      toggleIcon.textContent = '+';
    } else {
      answer.classList.add('open');
      faqItem.classList.add('active');
      toggleIcon.textContent = '-';
    }
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










// const slides = document.querySelectorAll(".slide");
// const dots = document.querySelectorAll(".dot");
// let currentSlide = 0;

// function updateSlides() {
//   slides.forEach((slide, index) => {
//     slide.classList.remove("left", "center", "right");

//     // Menetapkan posisi slide (left, center, right)
//     if (index === currentSlide) {
//       slide.classList.add("center"); // Slide di tengah
//     } else if (index === (currentSlide - 1 + slides.length) % slides.length) {
//       slide.classList.add("right"); // Slide di kiri
//     } else {
//       slide.classList.add("left"); // Slide di kanan
//     }
//   });
// }

// function showSlide(index) {
//   currentSlide = index;
//   updateSlides();

//   dots.forEach((dot, i) => {
//     dot.classList.toggle("active", i === index);
//   });
// }

// // Auto-slide setiap 5 detik
// function autoSlide() {
//   currentSlide = (currentSlide + 1) % slides.length;
//   showSlide(currentSlide);
// }

// // Memulai auto-slide
// setInterval(autoSlide, 5000);

// // Tambahkan event click untuk dots
// dots.forEach((dot, i) => {
//   dot.addEventListener("click", () => {
//     showSlide(i);
//   });
// });

// // Inisialisasi awal
// updateSlides();

// // accordion
// const accordionItems = document.querySelectorAll('.accordion-item');

// accordionItems.forEach(item => {
//   const orangeBar = item.querySelector('.orange-bar'); // Pilih .orange-bar dalam setiap item
//   const icon = item.querySelector('.icon'); // Pilih icon dalam setiap item
//   const content = item.querySelector('.accordion-content'); // Pilih konten dalam setiap item
  
//   // Tambahkan event listener untuk .orange-bar
//   orangeBar.addEventListener('click', () => {
//     // Jika item aktif, tutup dan ubah icon ke "+"
//     if (item.classList.contains('active')) {
//       item.classList.remove('active');
//       icon.textContent = '+'; // Ganti icon ke +
//       if (content) content.style.maxHeight = null; // Tutup konten
//     } else {
//       // Tutup semua item lain
//       accordionItems.forEach(i => {
//         i.classList.remove('active');
//         const otherIcon = i.querySelector('.icon');
//         if (otherIcon) otherIcon.textContent = '+';
//         const otherContent = i.querySelector('.accordion-content');
//         if (otherContent) otherContent.style.maxHeight = null;
//       });
//       // Buka item yang diklik dan ubah icon ke "×"
//       item.classList.add('active');
//       icon.textContent = '×'; // Ganti icon ke ×
//       if (content) content.style.maxHeight = content.scrollHeight + 'px'; // Buka konten
//     }
//   });
// });

// // f.a.q
// const faqItems = document.querySelectorAll('.faq-item');

// faqItems.forEach(item => {
//     const question = item.querySelector('.faq-question');
//     const answer = item.querySelector('.faq-answer');
//     const toggle = item.querySelector('.faq-toggle');

//     question.addEventListener('click', () => {
//         item.classList.toggle('active');
//         answer.classList.toggle('open');
//         toggle.textContent = item.classList.contains('active') ? '-' : '+';
//     });
// });

// // slider 4 card
// const containerCard = document.querySelector('.container-card');
// const indicators = document.querySelectorAll('.slider-indicators .indicator');
// const cards = document.querySelectorAll('.container-card .card');

// // Function to update active indicator based on scroll position
// function updateActiveIndicator() {
//   let scrollPosition = containerCard.scrollLeft;
//   let cardWidth = cards[0].clientWidth + 20; // card width plus gap

//   // Calculate which card is in the view
//   let currentIndex = Math.round(scrollPosition / cardWidth);

//   // Set the active indicator
//   indicators.forEach((indicator, index) => {
//     if (index === currentIndex) {
//       indicator.classList.add('active');
//     } else {
//       indicator.classList.remove('active');
//     }
//   });
// }

// // Attach the scroll event listener
// containerCard.addEventListener('scroll', updateActiveIndicator);

// // slider 3 card
// const containerCard3 = document.querySelector('.container-card3');
// const indicators3 = document.querySelectorAll('.slider-indicators3 .indicator3');
// const cards3 = document.querySelectorAll('.container-card3 .card3');

// // Function to update active indicator based on scroll position
// function updateActiveIndicator3() {
//   let scrollPosition3 = containerCard3.scrollLeft;
//   let cardWidth3 = cards3[0].clientWidth + 20; // card width plus gap

//   // Calculate which card is in the view
//   let currentIndex3 = Math.round(scrollPosition3 / cardWidth3);

//   // Set the active indicator
//   indicators3.forEach((indicator, index) => {
//     if (index === currentIndex3) {
//       indicator.classList.add('active');
//     } else {
//       indicator.classList.remove('active');
//     }
//   });
// }
// containerCard3.addEventListener('scroll', updateActiveIndicator3);





import './bootstrap';
import Splide from '@splidejs/splide';
import '@fortawesome/fontawesome-free/css/all.css';

document.addEventListener('DOMContentLoaded', function () {
    // Initialize Splide
    new Splide('.splide', {
        fixedWidth: 200, // Sesuaikan dengan lebar timeline item
        isNavigation: true,
        gap: 10, // Sesuaikan dengan jarak antar timeline item
        pagination: false,
        cover: true,
        breakpoints: {
            600: {
                fixedWidth: 100, // Sesuaikan untuk tampilan mobile
            }
        }
    }).mount();
});

document.addEventListener('DOMContentLoaded', function () {
    const timeline = document.querySelector('.timeline');
    const timelineItems = document.querySelectorAll('.timeline-item');
    const showMoreBtn = document.querySelector('.show-more-btn');
    const hideBtn = document.querySelector('.hide-btn');
    const blurBackground = document.querySelector('.background-blur');

    // Tampilkan background blur saat halaman dimuat
    blurBackground.style.opacity = 1;

    // Sembunyikan item-item jika lebih dari 2
    if (timelineItems.length > 2) {
        timelineItems.forEach((item, index) => {
            if (index >= 2) {
                item.classList.add('hidden');
            }
        });
        timeline.classList.add('collapsed');
        showMoreBtn.style.display = 'block';
    }

    showMoreBtn.addEventListener('click', function () {
        // Menampilkan seluruh item
        timelineItems.forEach(item => {
            item.classList.remove('hidden');
        });

        // Menampilkan tombol "Hide"
        hideBtn.style.display = 'block';

        // Menyembunyikan tombol "Show More"
        showMoreBtn.style.display = 'none';

        // Menyembunyikan background blur
        blurBackground.style.opacity = 0;
    });

    hideBtn.addEventListener('click', function () {
        // Sembunyikan item-item jika lebih dari 2
        if (timelineItems.length > 2) {
            timelineItems.forEach((item, index) => {
                if (index >= 2) {
                    item.classList.add('hidden');
                }
            });
            timeline.classList.add('collapsed');
        }

        // Menampilkan tombol "Show More"
        showMoreBtn.style.display = 'block';

        // Menyembunyikan tombol "Hide"
        hideBtn.style.display = 'none';

        // Menampilkan background blur
        blurBackground.style.opacity = 1;
    });
});

//carousel
document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.getElementById('myCustomCarousel');
    const inner = carousel.querySelector('.custom-carousel-inner');
    const items = carousel.querySelectorAll('.custom-carousel-item');
    const prevBtn = carousel.querySelector('.custom-carousel-control.prev');
    const nextBtn = carousel.querySelector('.custom-carousel-control.next');
  
    let currentIndex = 0;
  
    function updateCarousel() {
      inner.style.transform = `translateX(${-currentIndex * 100}%)`;
    }
  
    function changeSlide(direction) {
      currentIndex += direction;
      if (currentIndex < 0) {
        currentIndex = items.length - 1;
      } else if (currentIndex >= items.length) {
        currentIndex = 0;
      }
  
      updateCarousel();
    }
  
    prevBtn.addEventListener('click', function () {
      changeSlide(-1);
    });
  
    nextBtn.addEventListener('click', function () {
      changeSlide(1);
    });
});

//carousel 2
document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.getElementById('TestimoniCarousel');
    const inner = carousel.querySelector('.carousel-testimoni-inner');
    const items = carousel.querySelectorAll('.carousel-testimoni-item');
    const prevBtn = carousel.querySelector('.carousel-testimoni-control.prev');
    const nextBtn = carousel.querySelector('.carousel-testimoni-control.next');
  
    let currentIndex = 0;

    function updateCarousel() {
        inner.style.transform = `translateX(${-currentIndex * 100}%)`;
    }

    function gantiSlide(direction) {
        currentIndex += direction;
        if (currentIndex < 0) {
            currentIndex = items.length - 1;
        } else if (currentIndex >= items.length) {
            currentIndex = 0;
        }

        updateCarousel();
    }

    prevBtn.addEventListener('click', function () {
        gantiSlide(-1);
      });
    
      nextBtn.addEventListener('click', function () {
        gantiSlide(1);
      });
    
});
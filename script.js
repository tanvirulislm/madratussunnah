document.getElementById('menuToggle').addEventListener('click', function () {
  const mobileMenu = document.getElementById('mobileMenu');
  const menuIcon = document.getElementById('menuIcon');
  const closeIcon = document.getElementById('closeIcon');

  mobileMenu.classList.toggle('hidden');
  menuIcon.classList.toggle('hidden');
  closeIcon.classList.toggle('hidden');

  // Reset mobile submenus when main menu is toggled
  document.getElementById('mobileShakhaSubmenu').classList.add('hidden');
  document.getElementById('mobileShakhaArrow').classList.remove('rotate-180');
  document.getElementById('mobileAcademicSubmenu').classList.add('hidden');
  document.getElementById('mobileAcademicArrow').classList.remove('rotate-180');
});

// Mobile Shakha (Branch) Submenu Toggle
document.getElementById('mobileShakhaToggle').addEventListener('click', function() {
  const submenu = document.getElementById('mobileShakhaSubmenu');
  const arrow = document.getElementById('mobileShakhaArrow');
  submenu.classList.toggle('hidden');
  arrow.classList.toggle('rotate-180');
});

// Mobile Academic Submenu Toggle
document.getElementById('mobileAcademicToggle').addEventListener('click', function() {
  const submenu = document.getElementById('mobileAcademicSubmenu');
  const arrow = document.getElementById('mobileAcademicArrow');
  submenu.classList.toggle('hidden');
  arrow.classList.toggle('rotate-180');
});

  feather.replace()



  // Slider For Branch
  document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.myBranchSwiper', {
          loop: true,
          slidesPerView: 1,
          spaceBetween: 24,
          autoplay: {
            delay: 1000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
          },
          breakpoints: {
            640: {
              slidesPerView: 2,
              spaceBetween: 24,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 32,
            },
            1280: {
              slidesPerView: 3,
              spaceBetween: 32,
            },
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        })
      })
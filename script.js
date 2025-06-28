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
            delay: 2500,
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



    // Teacher Class Routine
          // Tab functionality for routine days
          document.querySelectorAll('[data-day]').forEach(tab => {
            tab.addEventListener('click', function () {
              // Update active tab styling
              document.querySelectorAll('[data-day]').forEach(t => {
                t.classList.remove('text-teal-600', 'border-teal-600')
                t.classList.add('text-gray-500', 'hover:text-teal-600')
              })
              this.classList.add('text-teal-600', 'border-teal-600')
              this.classList.remove('text-gray-500', 'hover:text-teal-600')

              // Show selected day's routine
              const day = this.getAttribute('data-day')
              document.querySelectorAll('.routine-day').forEach(row => {
                row.classList.add('hidden')
              })

              const dayRows = document.querySelectorAll(`.routine-day.${day}`)
              if (dayRows.length > 0) {
                dayRows.forEach(row => row.classList.remove('hidden'))
                document.getElementById('no-class-notice').classList.add('hidden')
              } else {
                document.getElementById('no-class-notice').classList.remove('hidden')
              }
            })
          })
      
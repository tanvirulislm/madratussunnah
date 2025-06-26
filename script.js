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


  

  document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.tab-button')
    const tabContents = document.querySelectorAll('.tab-content')
    const viewAllButton = document.getElementById('view-all-button')
    const scrollContainer = document.querySelector('.custom-scrollbar')

    function activateTab(tabName) {
      // Deactivate all tab buttons
      tabs.forEach(tab => {
        tab.classList.remove('text-teal-600', 'border-teal-600')
        tab.classList.add('text-gray-600', 'hover:text-teal-600', 'hover:border-teal-300')
      })

      tabContents.forEach(content => {
        content.classList.remove('active-tab')
        content.classList.add('hidden')
      })
      if (scrollContainer) {
        scrollContainer.scrollTop = 0
      }

      const activeTabButton = document.querySelector(`[data-tab="${tabName}"]`)
      activeTabButton.classList.remove('text-gray-600', 'hover:text-teal-600', 'hover:border-teal-300')
      activeTabButton.classList.add('text-teal-600', 'border-teal-600')

      const activeTabContent = document.getElementById(`tab-${tabName}`)
      activeTabContent.classList.remove('hidden')
      activeTabContent.classList.add('active-tab')

      viewAllButton.innerHTML = `${viewAllButton.textContent} <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>`
    }

    // Event listeners for tabs
    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        activateTab(tab.dataset.tab)
      })
    })

    // Initialize with the first tab active
    activateTab('notices')
  })
 <!-- Sidebar -->
 <div id="mobile-menu" class="fixed inset-0 z-50 hidden flex ">
     <div id="sidebar-backdrop" class="fixed inset-0 bg-black bg-opacity-25"></div>
     <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
         <div class="flex px-4 pb-2 pt-5">
             <button id="close-sidebar" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                 <span class="sr-only">Close menu</span>
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     aria-hidden="true">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                 </svg>
             </button>
         </div>
         <div class="space-y-6 border-t border-gray-200 px-4 py-6 font-semibold">
             <a href="/"
                 class="-m-2 block p-2 font-semibold text-gray-900 hover:bg-gray-50 hover:text-indigo-600">Company</a>
             <a href="/product"
                 class="-m-2 block p-2 font-semibold text-gray-900 hover:bg-gray-50 hover:text-indigo-600">Product</a>
             <a href="/katalog"
                 class="-m-2 block p-2 font-semibold text-gray-900 hover:bg-gray-50 hover:text-indigo-600">Katalog</a>
             <a href="/contact"
                 class="-m-2 block p-2 font-semibold text-gray-900 hover:bg-gray-50 hover:text-indigo-600">Contact</a>
             <a href="/calibration"
                 class="-m-2 block p-2 font-semibold text-gray-900 hover:bg-gray-50 hover:text-indigo-600">Service &
                 Kalibrasi</a>
         </div>
     </div>
 </div>
 <script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuButton = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        const closeButton = document.getElementById('close-sidebar');
        const menuOpenIcon = document.getElementById('menu-open-icon');
        const menuCloseIcon = document.getElementById('menu-close-icon');
        const sidebarBackdrop = document.getElementById('sidebar-backdrop');

        // Toggle menu visibility
        menuButton.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menuOpenIcon.classList.toggle('hidden');
            menuCloseIcon.classList.toggle('hidden');
        });

        // Close menu when clicking the close button
        closeButton.addEventListener('click', () => {
            menu.classList.add('hidden');
            menuOpenIcon.classList.remove('hidden');
            menuCloseIcon.classList.add('hidden');
        });

        // Close menu when clicking the backdrop
        sidebarBackdrop.addEventListener('click', () => {
            menu.classList.add('hidden');
            menuOpenIcon.classList.remove('hidden');
            menuCloseIcon.classList.add('hidden');
        });
    });
</script>
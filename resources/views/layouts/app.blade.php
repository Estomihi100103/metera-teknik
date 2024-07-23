<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/js/alpinejs.js"></script>
    <title>{{ $title }}</title>
    <meta name="description"
        content="Metera Teknik Indonesia: Distributor resmi Flow Meter dan Alat Teknik di Indonesia">
    <link rel="icon" href="/img/Logo.png" type="image/x-icon">
    <link rel="canonical" href="https://meterateknik.com">

    <meta property="og:title" content="Distributor Flow Meter ">
    <meta property="og:description"
        content="Penyedia terpercaya alat-alat industri seperti flowmeter, water meter, liquid control, nozzle tester, dan hydrometer di Indonesia.">
    <meta property="og:image" content="https://meterateknik.com/img/Logo.png">
    <meta property="og:url" content="https://meterateknik.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Distributor Flow Meter dan Alat Teknik Indonesia | Metera Teknik">
    <meta name="twitter:description"
        content="Penyedia terpercaya alat-alat industri seperti flowmeter, water meter, liquid control, nozzle tester, dan hydrometer di Indonesia.">
    <meta name="twitter:image" content="https://meterateknik.com/img/Logo.png">
    <meta name="twitter:url" content="https://meterateknik.com">

    <!-- Google Search Console Verification -->
    <meta name="google-site-verification" content="gh4HPYYiQ_5mAnPOopRU5lus4K8BU0h6KuJ5kuKlYqQ" />
    <!-- Schema Markup -->
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Metera Teknik",
        "url": "https://meterateknik.com",
        "logo": "https://meterateknik.com/img/Logo.png",
        "description": "Distributor Flow Meter dan Pusat Perlengkapan Alat Teknik Indonesia",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+6285370194006",
            "contactType": "Customer Service"
          }
        }
    </script>


    <!-- Hotjar Tracking Code for http://meterateknik.com/ -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 5065018,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>


    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
    <style>
        [x-cloak] {
            display: none;
        }

        #search-results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: white;
            border: 1px solid #ccc;
            z-index: 1000;
            max-height: 200px;
            overflow-y: auto;
        }

        #search-results div {
            padding: 10px;
            cursor: pointer;
        }

        #search-results div:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<!-- Schema Markup -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Metera Teknik",
  "url": "https://meterateknik.com",
  "logo": "https://meterateknik.com/img/Logo.png",
  "description": "Distributor Flow Meter dan Pusat Perlengkapan Alat Teknik Indonesia"
}
</script>

<body>
    <a href="https://api.whatsapp.com/send?phone=6285370194006&text=Halo%2C%20saya%20tertarik%20dengan%20produk%20Anda."
        target="_blank" class="fixed bottom-5 right-5 z-50 transition-transform ease-in-out hover:scale-110">
        <img src="/img/WhatsApp_icon.png" alt="WhatsApp" class="w-20 h-20 rounded-full" />
    </a>

    <div>
        <div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
            @include('layouts.sidebar-mobile')
            <!-- Hero section -->
            <div class=" bg-white ">
                <header class="relative z-10">
                    <nav aria-label="Top">
                        <!-- Top navigation -->
                        <div class="bg-gray-900">
                            <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                                <!-- Currency selector -->
                                <div class="flex items-center space-x-6">
                                    <p class="text-white font-bold text-sm">Distributor Flow Meter dan Pusat
                                        Perlengkapan Alat Teknik Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>
                <!-- Main navigation -->
                <div
                    class=" w-full bg-white md:bg-gray-900 md:bg-opacity-10 md:backdrop-blur-md md:backdrop-filter absolute z-10">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="flex h-20 justify-between">
                            <div class="flex px-2 lg:px-0">
                                <div class="flex flex-shrink-0 items-center mt-2">
                                    <a href="/">
                                        <img class="h-16 md:h-28 w-auto" src="/img/Logo.png" alt="Your Company">
                                    </a>
                                </div>
                                <div class="hidden lg:ml-6 lg:flex lg:space-x-8">
                                    <a href="/" class="flex items-center text-base font-bold text-white">Home</a>
                                    <a href="/product"
                                        class="flex items-center text-base font-bold text-white">Product</a>
                                    <a href="/katalog"
                                        class="flex items-center text-base font-bold text-white">Katalog</a>
                                    <a href="/contact"
                                        class="flex items-center text-base font-bold text-white">Contact</a>
                                    <a href="/calibration"
                                        class="flex items-center text-base font-bold text-white">Service &
                                        Kalibrasi</a>

                                </div>
                            </div>
                            <div class="flex flex-1 items-center justify-center px-2 lg:ml-6 lg:justify-end">
                                <div class="w-full max-w-lg lg:max-w-xs">
                                    <label for="search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input id="search-input" type="text"
                                            class="block w-full rounded-md border-0 bg-white py-2 pl-10 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            placeholder="Search for products...">
                                        <div id="dropdown-menu"
                                            class="absolute z-10 mt-1 w-full bg-white border border-gray-300 shadow-lg rounded-lg hidden">
                                            <div id="dropdown-items" class="py-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                const searchInput = document.getElementById('search-input');
                                const dropdownMenu = document.getElementById('dropdown-menu');
                                const dropdownItems = document.getElementById('dropdown-items');

                                async function fetchProducts(query) {
                                    try {
                                        const response = await fetch(`/api/resource/products?search=${encodeURIComponent(query)}`);
                                        if (!response.ok) {
                                            throw new Error("Network response was not ok");
                                        }
                                        const data = await response.json();
                                        console.log('Fetched Products:', data);
                                        return data.data; // API sudah mengembalikan data dalam format yang benar
                                    } catch (error) {
                                        console.error("Fetch error: ", error);
                                        return [];
                                    }
                                }

                                function updateDropdown(products) {
                                    dropdownItems.innerHTML = '';
                                    if (products.length > 0) {
                                        products.forEach(product => {
                                            const item = document.createElement('div');
                                            item.className = 'p-2 cursor-pointer hover:bg-gray-200';
                                            item.textContent = product.product_name;
                                            item.addEventListener('click', () => {
                                                window.location.href = product.links.self;
                                            });
                                            dropdownItems.appendChild(item);
                                        });
                                    } else {
                                        const noResults = document.createElement('div');
                                        noResults.className = 'p-2 text-sm text-gray-800';
                                        noResults.textContent = 'No results found';
                                        dropdownItems.appendChild(noResults);
                                    }
                                }

                                let debounceTimer;
                                searchInput.addEventListener('input', () => {
                                    clearTimeout(debounceTimer);
                                    debounceTimer = setTimeout(async () => {
                                        const query = searchInput.value.trim();
                                        console.log('Input query:', query);
                                        if (query.length > 0) {
                                            const products = await fetchProducts(query);
                                            console.log('Filtered Products:', products);
                                            updateDropdown(products);
                                            dropdownMenu.style.display = 'block';
                                        } else {
                                            dropdownMenu.style.display = 'none';
                                        }
                                    }, 300); // 300ms delay
                                });

                                window.addEventListener('click', (e) => {
                                    if (!searchInput.contains(e.target) && !dropdownMenu.contains(e.target)) {
                                        dropdownMenu.style.display = 'none';
                                    }
                                });
                            </script>
                            <div class="flex items-center lg:hidden">
                                <!-- Mobile menu button -->
                                <button type="button"
                                    class="relative inline-flex items-center justify-center rounded-md p-4 text-black hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                    aria-controls="mobile-menu" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    <span class="absolute -inset-0.5"></span>
                                    <span class="sr-only">Open main menu</span>
                                    <svg x-description="Icon when menu is closed." x-state:on="Menu open"
                                        x-state:off="Menu closed" class="block h-8 w-8 font-bold"
                                        :class="{ 'hidden': open, 'block': !(open) }" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                                    </svg>
                                    <svg x-description="Icon when menu is open." x-state:on="Menu open"
                                        x-state:off="Menu closed" class="hidden h-6 w-6"
                                        :class="{ 'block': open, 'hidden': !(open) }" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>



                <main>
                    @yield('content')
                </main>


                @include('layouts.footer')
            </div>
        </div>


        <!-- Javascript code -->
        <script>
            // set the default active slide to the first one
            let slideIndex = 1;
            showSlide(slideIndex);

            // change slide with the prev/next button
            function moveSlide(moveStep) {
                showSlide(slideIndex += moveStep);
            }

            // change slide with the dots
            function currentSlide(n) {
                showSlide(slideIndex = n);
            }

            function showSlide(n) {
                let i;
                const slides = document.getElementsByClassName("slide");
                const dots = document.getElementsByClassName('dot');

                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }

                // hide all slides
                for (i = 0; i < slides.length; i++) {
                    slides[i].classList.add('hidden');
                }

                // remove active status from all dots
                for (i = 0; i < dots.length; i++) {
                    dots[i].classList.remove('bg-yellow-500');
                    dots[i].classList.add('bg-green-600');
                }

                // show the active slide
                slides[slideIndex - 1].classList.remove('hidden');

                // highlight the active dot
                dots[slideIndex - 1].classList.remove('bg-green-600');
                dots[slideIndex - 1].classList.add('bg-yellow-500');
            }
        </script>

</body>

</html>

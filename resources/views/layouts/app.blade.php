<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/js/alpinejs.js"></script>
    <title>{{ $title }}</title>
    <meta name="description" content="Metera Teknik: Distributor Flow Meter dan Alat Teknik Indonesia| liquid control, flowmeter, water meter,  nozzle tester, hydrometer">
    <link rel="icon" href="/img/Logo.png" type="image/x-icon">
    <link rel="canonical" href="https://meterateknik.com">

    <meta property="og:title" content="Distributor Flow Meter dan Alat Teknik Indonesia | Metera Teknik">
    <meta property="og:description" content="Penyedia terpercaya alat-alat industri seperti flowmeter, water meter, liquid control, nozzle tester, dan hydrometer di Indonesia.">
    <meta property="og:image" content="https://meterateknik.com/img/Logo.png">
    <meta property="og:url" content="https://meterateknik.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Distributor Flow Meter dan Alat Teknik Indonesia | Metera Teknik">
    <meta name="twitter:description" content="Penyedia terpercaya alat-alat industri seperti flowmeter, water meter, liquid control, nozzle tester, dan hydrometer di Indonesia.">
    <meta name="twitter:image" content="https://meterateknik.com/img/Logo.png">
    <meta name="twitter:url" content="https://meterateknik.com">

    {{-- <meta name="google-site-verification" content="gh4HPYYiQ_5mAnPOopRU5lus4K8BU0h6KuJ5kuKlYqQ" /> --}}
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
    <a href="https://api.whatsapp.com/send?phone=6282365632913&text=Halo%2C%20saya%20tertarik%20dengan%20produk%20Anda."
        target="_blank" class="fixed bottom-5 right-5 z-50 transition-transform ease-in-out hover:scale-110">
        <img src="/img/WhatsApp_icon.png" alt="WhatsApp" class="w-20 h-20 rounded-full" />
    </a>

    <div class="" style="">
        <div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
            @include('layouts.sidebar-mobile')
            <!-- Hero section -->
            <div class=" bg-white ">
                {{-- @if (request()->path() != 'galery')
                    <div aria-hidden="true" class="absolute inset-0 bg-gray-100 opacity-50"></div>
                @endif --}}

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


                <!-- Secondary navigation -->
                <div class="w-full bg-gray-900 bg-opacity-10 backdrop-blur-md backdrop-filter absolute z-10">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div>
                            <div class="flex h-16 items-center justify-between">
                                <!-- Logo (lg+) -->
                                <div class="hidden lg:flex lg:flex-1 lg:items-center">
                                    <a href="/">
                                        <span class="sr-only">Nusantara Berkat Teknik</span>
                                        <img class="h-20 w-auto" src="img/Logo.png" alt="">
                                    </a>
                                </div>
                                <div class="hidden h-full lg:flex ">
                                    <!-- Flyout menus -->
                                    <div class="inset-x-0 bottom-0 px-4" x-data="Components.popoverGroup()"
                                        x-init="init()">
                                        <div class="flex h-full justify-center space-x-8">
                                            <a href="/"
                                                class="flex items-center text-base font-bold text-white">Company</a>
                                            <a href="/product"
                                                class="flex items-center text-base font-bold text-white">Product</a>
                                            <a href="/katalog"
                                                class="flex items-center text-base font-bold text-white">Katalog</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile menu and search (lg-) -->
                                <div class="flex flex-1 items-center lg:hidden">
                                    <button type="button"
                                        x-description="Mobile menu toggle, controls the 'mobileMenuOpen' state."
                                        class="-ml-2 p-2 text-white" @click="open = true">
                                        <span class="sr-only">Open menu</span>
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Logo (lg-) -->
                                <a href="/" class="lg:hidden">
                                    <span class="sr-only">Your Company</span>
                                    <img src="img/Logo.png" alt="" class="h-8 w-auto">
                                </a>
                                <div class="flex flex-1 items-center justify-end relative">
                                    <div class="flex" x-data="{ open: false }">
                                        <!-- Search Icon -->
                                        <button @click="open = true"
                                            class="p-2 rounded-md bg-none hover:bg-none focus:outline-none focus:bg-none text-white font-bold">
                                            Search
                                        </button>
                                        <!-- Modal -->
                                        <div x-show="open" @click="open = false"
                                            class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-none mt-7"
                                            x-cloak>
                                            <div @click.stop class="bg-white rounded-lg w-1/2 p-8 relative">
                                                <!-- Close Button -->
                                                <button @click="open = false"
                                                    class="absolute top-4 right-4 p-2 focus:outline-none hover:bg-gray-100 rounded">
                                                    <svg class="h-6 w-6" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path strokeLinecap="round" strokeLinejoin="round"
                                                            strokeWidth="2" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </button>
                                                <!-- Search Input -->
                                                <div class="flex flex-col items-center border-gray-200 relative">
                                                    <form action="{{ route('products.search') }}" method="GET"
                                                        id="search-form">
                                                        <input type="text" id="search-input" name="query"
                                                            placeholder="Search products..."
                                                            class=" w-96 py-2 focus:outline-none focus:border-indigo-400">
                                                    </form>
                                                    <div id="search-results" class="w-full mt-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const searchInput = document.getElementById('search-input');
                                        const searchResults = document.getElementById('search-results');
                                        const searchForm = document.getElementById('search-form');

                                        searchInput.addEventListener('input', function() {
                                            const query = searchInput.value;

                                            if (query.length > 2) {
                                                fetch(`{{ route('products.autocomplete') }}?query=${query}`)
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        let resultsHtml = '';
                                                        data.forEach(product => {
                                                            resultsHtml += `
                                                                <div class="p-2 border-b hover:bg-gray-200 cursor-pointer" data-url="/product/${product.slug}">
                                                                    ${product.product_name}
                                                                </div>`;
                                                        });
                                                        searchResults.innerHTML = resultsHtml;

                                                        // Tambahkan event listener untuk setiap item hasil pencarian
                                                        document.querySelectorAll('#search-results div').forEach(item => {
                                                            item.addEventListener('click', function() {
                                                                window.location.href = this.getAttribute(
                                                                    'data-url');
                                                            });
                                                        });
                                                    });
                                            } else {
                                                searchResults.innerHTML = '';
                                            }
                                        });

                                        // Tangani submit form pencarian
                                        searchForm.addEventListener('submit', function(event) {
                                            event.preventDefault();
                                            const query = searchInput.value;
                                            window.location.href = `{{ route('products.search') }}?query=${query}`;
                                        });
                                    });
                                </script>


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

@extends('layouts.app')

@section('content')
    {{-- @include('layouts.carousel')
 --}}
    <main class="bg-white" id="product-details">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <!-- Product details -->
            <div class="lg:max-w-lg lg:self-end md:mt-10 mt-4">
                <header>
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->title }}</h1>
                </header>
                <section aria-labelledby="product-information" class="mt-4">
                    <h2 id="product-information" class="sr-only">Informasi Produk</h2>
                    <div class="mt-5">
                        <div class="mt-2 space-y-2">
                            <p class="text-base text-gray-500">{!! $product->spesipikasi !!}</p>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center">
                        <svg class="h-5 w-5 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <p class="ml-2 text-sm text-gray-500">Tersedia dan siap dikirim</p>
                    </div>
                </section>
            </div>

            <!-- Product image -->
            <div class="mt-10 lg:col-start-2 lg:row-span-2 lg:mt-0 lg:self-center">
                <figure class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg">
                    @if ($product->image)
                        @if ($product->additional_images)
                            <div id="product-carousel" class="relative rounded-lg overflow-hidden" data-carousel="static">
                                <!-- Carousel wrapper -->
                                <div class="relative h-80 md:h-96" data-carousel-inner>
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('storage/' . $product->image) }}" class="h-full object-center"
                                            alt="{{ $product->product_name }}" loading="lazy">
                                    </div>
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('storage/' . $product->additional_images) }}"
                                            class="h-full object-center"
                                            alt="{{ $product->product_name }} - Additional Image" loading="lazy">
                                    </div>
                                </div>

                                <!-- Slider controls -->
                                <button type="button"
                                    class="flex absolute top-1/2 left-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
                                    data-carousel-prev>
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                                <button type="button"
                                    class="flex absolute top-1/2 right-2 md:right-56 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
                                    data-carousel-next>
                                    <span class="sr-only">Next</span>
                                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>
                        @else
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}"
                                class="h-full w-full object-cover object-center" loading="lazy">
                        @endif
                    @else
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-featured-product-shot.jpg"
                            alt="{{ $product->product_name }}" class="h-full w-full object-cover object-center"
                            loading="lazy">
                    @endif
                    <figcaption class="mt-4" style="display: block;">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">{{ $product->product_name }}</h2>
                        <div class="mt-5">
                            <h3 class="text-lg font-medium text-gray-900">Deskripsi Produk</h3>
                            <div class="mt-2 space-y-1">
                                <p class="text-base text-gray-500">{!! $product->deskripsi !!}</p>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
        
        <!-- Related products -->
        <section aria-labelledby="related-products">
            <h2 id="related-products" class="sr-only">Produk Terkait</h2>
            <x-show-product :isproducts="$isproducts" :brands="$brands" />
        </section>
    </main>

    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
@endsection

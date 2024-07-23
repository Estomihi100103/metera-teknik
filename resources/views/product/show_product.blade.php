@extends('layouts.app')

@section('content')
    {{-- @include('layouts.carousel')
 --}}
    <main class="bg-white" id="product-details">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <!-- Product details -->
            <div class="lg:max-w-lg lg:self-end md:mt-0 mt-4">
                <header>
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->product_name }}</h1>
                </header>
                <section aria-labelledby="product-information" class="mt-4">
                    <p id="product-information" class="sr-only">Informasi Produk</p>
                    <div class="mt-5">
                        <p class="text-lg font-medium text-gray-900">Deskripsi Produk</p>

                        <div class="mt-2 space-y-1">
                            <p class="text-base text-gray-500">{!! $product->deskripsi !!}</p>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h3 class="text-lg font-medium text-gray-900">Spesifikasi Produk</h3>
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
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}"
                            class="h-full w-full object-cover object-center">
                    @else
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-featured-product-shot.jpg"
                            alt="{{ $product->product_name }}" class="h-full w-full object-cover object-center">
                    @endif
                    <div class="mt-2">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">{{ $product->katalog }}</h2>
                    </div>
                    <div class="mt-2 text-base text-gray-700">
                        <p>{{ $product->varian }}</p>
                    </div>
                </figure>
            </div>

            <!-- Product options -->
            <div class="mt-10 lg:col-start-1 lg:row-start-2 lg:max-w-lg lg:self-start">
                <section aria-labelledby="product-options">
                    <h2 id="product-options" class="sr-only">Opsi Produk</h2>
                    <!-- Add your product options here -->
                </section>
            </div>
        </div>

        <!-- Related products -->
        <section aria-labelledby="related-products">
            <h2 id="related-products" class="sr-only">Produk Terkait</h2>
            <x-show-product :isproducts="$isproducts" :category="$categories" />
        </section>
    </main>
@endsection

@extends('layouts.app')

@section('content')
    @include('layouts.carousel')
    <div class="bg-white" id="product-list">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <header class="text-center">
                <h1 class="text-base font-semibold text-indigo-600 tracking-wide uppercase">Flow Meter dan Alat Teknik Industri</h1>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                    Koleksi Terkini
                </p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Lihat produk terbaru menarik dari koleksi eksklusif
                    kami</p>
            </header>

            <section aria-labelledby="featured-products" class="px-4 py-8 sm:px-4 sm:py-12 lg:max-w-7xl lg:px-4">
                <ul class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    @foreach ($products as $product)
                        <li class="group relative">
                            <article>
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-white lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    @if ($product->image)
                                        <a href="/product/{{ $product->slug }}">
                                            <img src="{{ asset('storage/' . $product->image) }}"
                                                alt="{{ $product->product_name }}"
                                                class="card-img h-full w-full object-contain">
                                        </a>
                                    @else
                                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                            alt="{{ $product->product_name }}" class="h-full w-full object-contain">
                                    @endif
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <h2 class="text-lg text-gray-700 font-bold">
                                        <a href="/product/{{ $product->slug }}">
                                            {{ $product->product_name }}
                                        </a>
                                    </h2>
                                    <p class="text-sm text-gray-500">{{ $product->category->name }}</p>
                                </div>
                                <div class="mt-6">
                                    <a href="/product/{{ $product->slug }}"
                                        class="relative flex items-center justify-center rounded-md border border-transparent bg-indigo-100 px-8 py-2 text-sm font-medium text-indigo-900 hover:bg-indigo-600">
                                        Baca selengkapnya<span class="sr-only"> tentang {{ $product->product_name }}</span>
                                    </a>
                                </div>
                            </article>
                        </li>
                    @endforeach
                </ul>
            </section>
        </div>
    </div>
@endsection

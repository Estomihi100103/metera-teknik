@extends('layouts.app')

@section('content')
    {{-- @include('layouts.carousel')
 --}}

    <div class="bg-white mt-14 md:mt-8">
        <main class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">
                <!-- Product info -->
                <div class=" px-4 sm:mt-4 sm:px-0">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->title }}</h1>
                    <section aria-labelledby="product-information" class="mt-4">
                        <p id="product-information" class="sr-only">Informasi Produk</p>
                        <p class="text-lg font-medium text-gray-900">Spesifikasi :</p>
                        <div class="mt-3">
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
                @if ($product->image)
                    @if ($product->additional_images)
                        <!-- Product image -->
                        <div class="flex flex-col-reverse" x-data="Components.tabs()" @tab-click.window="onTabClick"
                            @tab-keydown.window="onTabKeydown">
                            <!-- Image selector -->
                            <div class="mx-auto mt-6 w-full max-w-2xl sm:block lg:max-w-none">
                                <div class="grid grid-cols-6 gap-6" aria-orientation="horizontal" role="tablist">
                                    <button id="tabs-1-tab-1"
                                        class="relative flex h-12 md:h-16 cursor-pointer items-center justify-center rounded-md bg-white text-sm font-medium uppercase text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4"
                                        x-data="Components.tab(0)" aria-controls="tabs-1-panel-1" role="tab"
                                        x-init="init()" @click="onClick" @keydown="onKeydown"
                                        @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1"
                                        :aria-selected="selected ? 'true' : 'false'" type="button" tabindex="-1"
                                        aria-selected="false">
                                        <span class="sr-only">Angled view</span>
                                        <span class="absolute inset-0 overflow-hidden rounded-md">
                                            <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                                class="h-full w-full object-cover object-center" loading="lazy">
                                        </span>
                                        <span
                                            class="pointer-events-none absolute inset-0 rounded-md ring-2 ring-offset-2 ring-transparent"
                                            aria-hidden="true" x-state:on="Selected" x-state:off="Not Selected"
                                            :class="{ 'ring-indigo-500': selected, 'ring-transparent': !(selected) }"></span>
                                    </button>
                                    <button id="tabs-1-tab-2"
                                        class="relative flex h-12 md:h-16 cursor-pointer items-center justify-center rounded-md bg-white text-sm font-medium uppercase text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4"
                                        x-data="Components.tab(0)" aria-controls="tabs-1-panel-2" role="tab"
                                        x-init="init()" @click="onClick" @keydown="onKeydown"
                                        @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1"
                                        :aria-selected="selected ? 'true' : 'false'" type="button" tabindex="-1"
                                        aria-selected="false">
                                        <span class="sr-only">Front view</span>
                                        <span class="absolute inset-0 overflow-hidden rounded-md">
                                            <img src="{{ asset('storage/' . $product->additional_images) }}" alt=""
                                                class="h-full w-full object-cover object-center" loading="lazy">
                                        </span>
                                        <span
                                            class="pointer-events-none absolute inset-0 rounded-md ring-2 ring-offset-2 ring-transparent"
                                            aria-hidden="true" x-state:on="Selected" x-state:off="Not Selected"
                                            :class="{ 'ring-indigo-500': selected, 'ring-transparent': !(selected) }"></span>
                                    </button>
                                </div>
                                <div class="space-y-6 text-base text-gray-700 mt-2">
                                    <figcaption class="mt-4" style="display: block;">
                                        <div class="mt-4 space-y-1">
                                            <h2 class=" text-lg font-medium tracking-tight text-gray-900">
                                                {{ $product->product_name }}</h2>
                                            <p class="text-base text-gray-500">{!! $product->deskripsi !!}</p>
                                        </div>
                                    </figcaption>
                                </div>
                            </div>
                            <div class="aspect-h-1 aspect-w-1 w-full sm:mt-4">
                                <div id="tabs-1-panel-1" x-description="Tab panel, show/hide based on tab state."
                                    x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-1" x-init="init()"
                                    x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0"
                                    style="display: none;">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}"
                                        class="h-full w-full object-cover object-center sm:rounded-lg">
                                </div>
                                <div id="tabs-1-panel-2" x-description="Tab panel, show/hide based on tab state."
                                    x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-2" x-init="init()"
                                    x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0"
                                    style="display: none;">
                                    <img src="{{ asset('storage/' . $product->additional_images) }}"
                                        alt="{{ $product->product_name }}"
                                        class="h-full w-full object-cover object-center sm:rounded-lg">
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="mt-10 lg:col-start-2 lg:row-span-2 lg:mt-0 lg:self-center">
                            <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg">
                                <img src="{{ asset('storage/' . $product->image) }}"
                                    alt="{{ $product->product_name }}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="space-y-6 text-base text-gray-700">
                                <figcaption class="mt-4" style="display: block;">
                                    <div class="mt-2 space-y-1">
                                        <h2 class=" text-lg font-medium tracking-tight text-gray-900">
                                            {{ $product->product_name }}</h2>
                                        <p class="text-base text-gray-500">{!! $product->deskripsi !!}</p>
                                    </div>
                                </figcaption>
                            </div>
                        </div>
                    @endif
                @else
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-featured-product-shot.jpg"
                        alt="{{ $product->product_name }}" class="h-full w-full object-cover object-center"
                        loading="lazy">
                    <figcaption class="mt-4" style="display: block;">
                        <div class="mt-2 space-y-1">
                            <h2 class=" text-lg font-medium tracking-tight text-gray-900">{{ $product->product_name }}</h2>
                            <p class="text-base text-gray-500">{!! $product->deskripsi !!}</p>
                        </div>
                    </figcaption>
                @endif
            </div>
        </main>
         <!-- Related products -->
         <section aria-labelledby="related-products">
            <p id="related-products" class="sr-only">Produk Terkait</p>
            <x-show-product :isproducts="$isproducts" :brands="$brands" />
        </section>
    </div>
@endsection

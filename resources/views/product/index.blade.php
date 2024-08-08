@extends('layouts.app')

@section('content')
    <div class="h-[1008px] bg-white">
        <div x-data="{ open: false }" @keydown.window.escape="open = false" class="flex h-full">
            <div class="flex min-w-0 flex-1 flex-col overflow-hidden">
                <div class="relative z-0 flex flex-1 overflow-hidden">
                    <main class="relative z-0 flex-1 overflow-y-auto focus:outline-none xl:order-last">
                        <article>
                            <section aria-labelledby="featured-products"
                                class="px-4 py-8 sm:px-4 sm:py-12 lg:max-w-7xl lg:px-4 mt-24">
                                <ul class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
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
                                                            alt="{{ $product->product_name }}"
                                                            class="h-full w-full object-contain">
                                                    @endif
                                                </div>
                                                <div class="mt-4 flex justify-between">
                                                    <h2 class="text-base text-gray-700 font-bold">
                                                        <a href="/product/{{ $product->slug }}">
                                                            {{ $product->title }}
                                                        </a>
                                                    </h2>
                                                    <p class="text-sm text-gray-500"></p>
                                                </div>
                                                <div class="mt-6">
                                                    <a href="/product/{{ $product->slug }}"
                                                        class="relative flex items-center justify-center rounded-md border border-transparent bg-indigo-100 px-8 py-2 text-sm font-medium text-indigo-900 hover:bg-indigo-600">
                                                        Baca selengkapnya<span class="sr-only"> tentang
                                                            {{ $product->product_name }}</span>
                                                    </a>
                                                </div>
                                            </article>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </article>
                    </main>
                    <aside class="hidden w-72 flex-shrink-0 border-r border-gray-200 xl:order-first xl:flex xl:flex-col">
                        <!-- Directory list -->
                        <nav class="min-h-0 flex-1 overflow-y-auto pt-20" aria-label="Directory">
                            <div class="relative pt-16">
                                <x-product-sidebar />
                            </div>
                        </nav>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordions = document.querySelectorAll('.hs-accordion');

            accordions.forEach(accordion => {
                const toggle = accordion.querySelector('.hs-accordion-toggle');
                const content = accordion.querySelector('.hs-accordion-content');

                toggle.addEventListener('click', function() {
                    const isExpanded = toggle.getAttribute('aria-expanded') === 'true';

                    toggle.setAttribute('aria-expanded', !isExpanded);
                    content.classList.toggle('hidden');

                    const openIcon = toggle.querySelector('.hs-accordion-active\\:block');
                    const closeIcon = toggle.querySelector('.hs-accordion-active\\:hidden');
                    openIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');
                });
            });
        });
    </script>
@endsection

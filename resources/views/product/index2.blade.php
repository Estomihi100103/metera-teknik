@extends('layouts.app')
@section('content')
    <div
        class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-[1fr,3fr] lg:gap-x-8 lg:px-0">
        <div class="lg:self-end">
            <x-product-sidebar />
        </div>
        <div class="lg:row-span-2 lg:mt-0">
            <section aria-labelledby="featured-products" class="px-4 py-8 sm:px-4 sm:py-12 lg:max-w-7xl lg:px-4">
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
                                            alt="{{ $product->product_name }}" class="h-full w-full object-contain">
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

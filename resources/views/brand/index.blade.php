@extends('layouts.app')

@section('content')
    @include('layouts.carousel')
    <div class="bg-white" id="category-list">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <header>
                <p class="text-2xl font-bold tracking-tight text-gray-900">Kategori Pilihan</p>
            </header>

            <section aria-labelledby="category-list">
                <h2 id="category-list" class="sr-only">Daftar Kategori</h2>
                <ul class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    @foreach ($brands as $brand)
                        <li>
                            <a href="/brands/{{ $brand->slug }}"
                                class="group relative flex h-80 w-full flex-col overflow-hidden rounded-lg p-6 hover:opacity-75">
                                <div class="absolute inset-0">
                                    @if ($brand->image)
                                        <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}"
                                            class="h-full w-full object-cover object-center">
                                    @else
                                        <img src="https://source.unsplash.com/400x800?{{ $brand->name }},meter"
                                            alt="{{ $brand->name }}" class="h-full w-full object-cover object-center">
                                    @endif
                                </div>
                                <div class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50">
                                </div>
                                <h3 class="relative mt-auto text-center text-xl font-bold text-white">{{ $brand->name }}
                                </h3>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </section>
        </div>
    </div>
@endsection

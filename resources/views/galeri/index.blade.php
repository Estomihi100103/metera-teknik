@extends('layouts.app')

@section('content')
<div class="bg-gray-50">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <header class="py-24 text-center mt-2">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900">Galeri Proyek</h1>
        </header>

        @if ($galeries->isNotEmpty())
            @php
                $latestGallery = $galeries->first();
            @endphp
            <section aria-labelledby="featured-project" class="relative mt-10 overflow-hidden rounded-lg lg:h-96">
                <div class="absolute inset-0">
                    <img src="{{ asset('storage/' . $latestGallery->image) }}" alt="{{ $latestGallery->judul }}" class="h-full w-full object-cover object-center">
                </div>
                <div class="absolute inset-x-0 bottom-0 rounded-bl-lg rounded-br-lg bg-black bg-opacity-75 p-6 backdrop-blur backdrop-filter sm:flex sm:items-center sm:justify-between lg:inset-x-auto lg:inset-y-0 lg:w-96 lg:flex-col lg:items-start lg:rounded-br-none lg:rounded-tl-lg">
                    <div>
                        <h2 id="featured-project" class="text-xl font-bold text-white">Proyek Terbaru</h2>
                        <p class="mt-1 text-sm text-white">{!! $latestGallery->deskripsi !!}</p>
                    </div>
                </div>
            </section>
        @endif

        <section aria-labelledby="project-gallery" class="mt-16 pb-24">
            <h2 id="project-gallery" class="sr-only">Galeri Proyek</h2>
            <ul class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                @foreach ($galeries as $galery)
                    <li class="group">
                        <article>
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                                <img src="{{ asset('storage/' . $galery->image) }}" alt="{{ $galery->judul }}" class="h-full w-full object-cover object-center group-hover:opacity-75">
                            </div>
                            <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                                <h3>{{ $galery->judul }}</h3>
                            </div>
                            <p class="mt-1 text-sm italic text-gray-500">{!! $galery->deskripsi !!}</p>
                        </article>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>
</div>
@endsection

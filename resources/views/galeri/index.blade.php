@extends('layouts.app')

@section('content')
    <div data-new-gr-c-s-check-loaded="14.1182.0" data-gr-ext-installed="">
        <div class="" style="">


            <div class="bg-gray-50">

                <div x-data="{ open: false }" @keydown.window.escape="open = false">

                    <main>
                        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                            <div class="py-24 text-center">
                                <h1 class="text-4xl font-bold tracking-tight text-gray-900">Project</h1>
                                {{-- <p class="mx-auto mt-4 max-w-3xl text-base text-gray-500">Thoughtfully designed objects for
                                    the workspace, home, and travel.</p> --}}
                            </div>


                            <!-- Galery grid -->
                            <section aria-labelledby="featured-heading"
                                class="relative mt-16 overflow-hidden rounded-lg lg:h-96">
                                @if ($galeries->isNotEmpty())
                                    @php
                                        $latestGallery = $galeries->first(); // Ambil galeri terbaru
                                    @endphp
                                    <div class="absolute inset-0">
                                        <img src="{{ asset('storage/' . $latestGallery->image) }}"
                                            alt="" class="h-full w-full object-cover object-center">
                                    </div>
                                    <div aria-hidden="true" class="relative h-96 w-full lg:hidden"></div>
                                    <div aria-hidden="true" class="relative h-32 w-full lg:hidden"></div>
                                    <div
                                        class="absolute inset-x-0 bottom-0 rounded-bl-lg rounded-br-lg bg-black bg-opacity-75 p-6 backdrop-blur backdrop-filter sm:flex sm:items-center sm:justify-between lg:inset-x-auto lg:inset-y-0 lg:w-96 lg:flex-col lg:items-start lg:rounded-br-none lg:rounded-tl-lg">
                                        <div>
                                            <h2 id="featured-heading" class="text-xl font-bold text-white">Project Baru</h2>
                                            <p class="mt-1 text-sm text-white ">{!! $latestGallery->deskripsi !!}</p>
                                        </div>
                                    </div>
                                @endif
                            </section>
                            <section aria-labelledby="more-products-heading" class="mt-16 pb-24 ">
                                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                                    @foreach ($galeries as $galery)
                                        <div class="group">
                                            <div
                                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                                                <img src="{{ asset('storage/' . $galery->image) }}"
                                                    alt="proeject "
                                                    class="h-full w-full object-cover object-center group-hover:opacity-75">
                                            </div>
                                            <div
                                                class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                                                <h3>{{ $galery->judul }}</h3>
                                            </div>
                                            <p class="mt-1 text-sm italic text-gray-500 ">{!! $galery->deskripsi !!}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </section>
                        </div>
                    </main>

                </div>
            </div>

        </div>
    </div>
@endsection

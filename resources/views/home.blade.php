@extends('layouts.app')

@section('content')
    @include('layouts.carousel')



    <!-- Category section -->
    <section aria-labelledby="category-heading" class="pt-24 sm:pt-32 xl:mx-auto xl:max-w-7xl xl:px-8">
        <div class="px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 xl:px-0">
            <h2 id="category-heading" class="text-2xl font-bold tracking-tight text-gray-900">Kategori Produk</h2>
            <a href="/category" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
                Browse all categories
                <span aria-hidden="true"> →</span>
            </a>
        </div>

        <div class="mt-4 flow-root">
            <div class="-my-2">
                <div class="relative box-content h-80 overflow-x-auto py-2 xl:overflow-visible">
                    <div
                        class="absolute flex space-x-8 px-4 sm:px-6 lg:px-8 xl:relative xl:grid xl:grid-cols-5 xl:gap-x-8 xl:space-x-0 xl:px-0">
                        {{-- categories --}}
                        @foreach ($categories as $category)
                            <a href="/category/{{ $category->slug }}"
                                class="relative flex h-80 w-56 flex-col overflow-hidden bg-gray-300 rounded-lg p-6 hover:opacity-75 xl:w-auto">
                                <span aria-hidden="true" class="absolute inset-0">
                                    @if ($category->image)
                                        <img src="{{ asset('storage/' . $category->image) }}" alt="Gambar Kategori"
                                            {{-- class="card-img h-full w-full object-cover object-center "> --}}
                                            class="card-img h-full w-full object-contain">
                                    @else
                                        <img src="https://source.unsplash.com/400x800?{{ $category->name }},'meter'"
                                            class="card-img" alt=""
                                            class="h-full w-full object-cover object-center">
                                    @endif
                                </span>
                                <span aria-hidden="true"
                                    class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span
                                    class="relative mt-auto text-center text-xl font-bold text-white">{{ $category->name }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 px-4 sm:hidden">
            <a href="" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                Browse all categories
                <span aria-hidden="true"> →</span>
            </a>
        </div>
    </section>

    <!-- Featured section -->
    <section aria-labelledby="social-impact-heading" class="mx-auto max-w-7xl px-4 pt-24 sm:px-6 sm:pt-32 lg:px-8">
        <div class="relative overflow-hidden rounded-lg">
            <div class="absolute inset-0">

                <img src="https://images.unsplash.com/photo-1629540946404-ebe133e99f49?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8b2Zmc2hvcmUsb2lsLGRyaWxsaW5nfHx8fHx8MTY5MTQyMTY4Mg&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="" class="h-full w-full object-cover object-center">
            </div>
            <div class="relative bg-gray-900 bg-opacity-75 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
                <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                    <h2 id="social-impact-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                        <span class="block sm:inline">Service &</span>
                        <span class="block sm:inline">Kalibrasi</span>
                    </h2>
                    <p class="mt-3 text-xl text-white">Kami adalah perusahaan distribusi dan suplai alat-alat industri seperti flow meter dan water meter. Produk kami digunakan untuk mengukur berbagai jenis cairan, mulai dari gas, minyak, air hingga zat kimia korosif. Dengan keandalan dan akurasi, kami melayani berbagai sektor industri di Indonesia.</p>
                    <a href="/contact#contact-section"
                        class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">
                        Pusat Layanan</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Collection section -->
    <section aria-labelledby="collection-heading"
        class="mx-auto max-w-xl px-4 pt-24 sm:px-6 sm:pt-32 lg:max-w-7xl lg:px-8">
        <h2 id="collection-heading" class="text-2xl font-bold tracking-tight text-gray-900">Produk Terbaru</h2>
        <p class="mt-4 text-base text-gray-500">Every product cycle, we partner with renowned industrial experts
            to curate an innovation line influenced by precision engineering and technological prowess, embodying
            the essence of efficiency and accuracy in instruments like flow meters and other industrial tools</p>

        <div class="mt-10 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
            @foreach ($products as $product)
                <a href="/product/{{ $product->slug }}" class="group block">
                    <div aria-hidden="true"
                        class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg lg:aspect-h-6 lg:aspect-w-5 group-hover:opacity-75">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk"
                                class="h-full w-full object-cover object-center">
                        @else
                        <img src="https://source.unsplash.com/400x400?{{ $product->nama_produk }},'Bulldozer',tractor'"
                            alt="Brown leather key ring with brass metal loops and rivets on wood table."
                            class="h-full w-full object-cover object-center">
                        @endif
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-gray-900">{{ $product->product_name }}</h3>
                    <p class="mt-2 text-sm text-gray-500">{!! $product->deskripsi !!}</p>
                </a>
            @endforeach
        </div>
    </section>

    <!-- Featured section -->
    <section aria-labelledby="comfort-heading" class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
        <div class="relative overflow-hidden rounded-lg">
            <div class="absolute inset-0">
                {{-- <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-feature-section-02.jpg"
                    alt="" class="h-full w-full object-cover object-center"> --}}
                    <img src="img/lc.jpg" alt="" srcset="" class="h-full  object-cover object-center" >
            </div>
            <div class="relative bg-gray-900 bg-opacity-75 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
                <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                    <h2 id="comfort-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                        Project</h2>
                    <p class="mt-3 text-xl text-white">Bumi Metera Teknik dengan bangga telah menjadi mitra andal dalam melayani berbagai perusahaan industri terkemuka di Indonesia. Kepercayaan ini tercapai berkat komitmen kami terhadap kualitas dan keandalan produk.</p>
                    <a href="/galery"
                        class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Tinjau</a>
                </div>
            </div>
        </div>
    </section>
@endsection

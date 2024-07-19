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
                                class="relative flex h-80 w-56 flex-col overflow-hidden bg-white rounded-lg p-6 hover:opacity-75 xl:w-auto">
                                <span aria-hidden="true" class="absolute inset-0">
                                    @if ($category->image)
                                        <img src="{{ asset('storage/' . $category->image) }}" alt="Gambar Kategori"
                                            {{-- class="card-img h-full w-full object-cover object-center "> --}} class="card-img h-full w-full object-contain">
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
                        <span class="block sm:inline">Services</span>
                    </h2>
                    <p class="mt-3 text-xl text-white">Kami adalah perusahaan Distributor alat-alat industri seperti flow
                        meter dan water meter. Produk kami digunakan untuk mengukur berbagai jenis cairan, mulai dari gas,
                        minyak, air hingga zat kimia korosif. Dengan keandalan dan akurasi, kami melayani berbagai sektor
                        industri di Indonesia.</p>
                    <a href="/contact#contact-section"
                        class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">
                        Pusat Layanan</a>
                </div>
            </div>
        </div>
    </section>

    <div>
        <div class="mx-auto max-w-7xl py-24 sm:px-2 sm:py-32 lg:px-4">
            <div class="mx-auto max-w-2xl px-4 lg:max-w-none">
                <div class="grid grid-cols-1 items-center gap-x-16 gap-y-10 lg:grid-cols-2">
                    <div>
                        <h2 class="text-4xl font-bold tracking-tight text-gray-900">Other
                            service</h2>
                        <p class="mt-4 text-gray-500 text-xl">Selain sebagai distributor, kami juga menyediakan berbagai
                            layanan tambahan untuk memastikan semua perangkat berfungsi dengan optimal</p>
                    </div>
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg bg-gray-100">
                        <video width="640" height="360" controls loading="lazy">
                            <source src="video/kalibrasi.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var lazyVideos = [].slice.call(document.querySelectorAll("video[data-src]"));

                                if ("IntersectionObserver" in window) {
                                    let lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
                                        entries.forEach(function(video) {
                                            if (video.isIntersecting) {
                                                for (let source in video.target.children) {
                                                    let videoSource = video.target.children[source];
                                                    if (typeof videoSource.tagName === "string" && videoSource
                                                        .tagName === "SOURCE") {
                                                        videoSource.src = videoSource.dataset.src;
                                                    }
                                                }
                                                video.target.load();
                                                video.target.classList.remove("lazy");
                                                lazyVideoObserver.unobserve(video.target);
                                            }
                                        });
                                    });
                                    lazyVideos.forEach(function(lazyVideo) {
                                        lazyVideoObserver.observe(lazyVideo);
                                    });
                                }
                            });
                        </script>

                    </div>
                </div>
                <div>
                    <div class="mx-auto max-w-7xl py-24 sm:px-2 sm:py-32 lg:px-4">
                        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-10 px-4 lg:max-w-none lg:grid-cols-3">
                            <div class="text-center sm:flex sm:text-left lg:block lg:text-center">
                                <div class="sm:flex-shrink-0">
                                    <div class="flow-root rounded-2xl bg-gray-100 py-10">
                                        <div href="/calibration">
                                            <img class="mx-auto h-28 w-28 rounded-2xl md:h-42 md:w-42"
                                                src="img/kalibrasi.png">
                                            <div class="mt-3 sm:ml-3 sm:mt-0 lg:ml-0 lg:mt-3">
                                                <h3 class="text-2xl font-bold text-gray-900">Kalibrasi</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center sm:flex sm:text-left lg:block lg:text-center">
                                <div class="sm:flex-shrink-0">
                                    <div class="flow-root rounded-2xl bg-gray-100 py-10">
                                        <img class="mx-auto h-28 w-28 rounded-2xl md:h-42 md:w-42"
                                            src="img/pemeliharaan.png">
                                        <div class="mt-3 sm:ml-3 sm:mt-0 lg:ml-0 lg:mt-3">
                                            <h3 class="text-2xl font-bold text-gray-900">Pemeliharaan</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center sm:flex sm:text-left lg:block lg:text-center">
                                <div class="sm:flex-shrink-0">
                                    <div class="flow-root rounded-2xl bg-gray-100 py-10">
                                        <img class="mx-auto h-28 w-28 rounded-2xl md:h-42 md:w-42" src="img/perbaikan.png">
                                        <div class="mt-3 sm:ml-3 sm:mt-0 lg:ml-0 lg:mt-3">
                                            <h3 class="text-2xl font-bold text-gray-900">Perbaikan</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Featured section -->
    <section aria-labelledby="comfort-heading" class="mx-auto max-w-7xl px-4  sm:px-6  lg:px-8">
        <div class="relative overflow-hidden rounded-lg">
            <div class="absolute inset-0">
                {{-- <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-feature-section-02.jpg"
                    alt="" class="h-full w-full object-cover object-center"> --}}
                <img src="img/lc.jpg" alt="" srcset="" class="h-full  object-cover object-center">
            </div>
            <div class="relative bg-gray-900 bg-opacity-75 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
                <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                    <h2 id="comfort-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                        Project</h2>
                    <p class="mt-3 text-xl text-white">Metera Teknik dengan bangga telah menjadi mitra andal dalam melayani
                        berbagai perusahaan industri terkemuka di Indonesia. Kepercayaan ini tercapai berkat komitmen kami
                        terhadap kualitas dan keandalan produk.</p>
                    <a href="/galery"
                        class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Tinjau</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Collection section -->
    <section aria-labelledby="collection-heading"
        class="mx-auto max-w-xl px-4 pt-24 sm:px-6 sm:pt-32 lg:max-w-7xl lg:px-8 mb-20">
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
                </a>
            @endforeach
        </div>
    </section>
@endsection

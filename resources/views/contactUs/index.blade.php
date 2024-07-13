@extends('layouts.app')

@section('content')
    @include('layouts.carousel')

    <div id="contact-section" class="mx-10 -mt-10">
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl space-y-16 divide-y divide-gray-100 lg:mx-0 lg:max-w-none">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-10 pt-16 lg:grid-cols-3">
                        <div>
                            <h2 class="text-3xl font-bold tracking-tight text-gray-900">Locations</h2>
                            <div>
                                <div class="mt-10">
                                    <img src="img/Logo.png" alt=""
                                        class="fill-current text-blue-500 md:w-72 md:h-72 w-32 h-32">
                                </div>
                                <div class="">
                                    <p class="mt-4 leading-7 text-gray-600 text-justify">Kami adalah pilihan utama Anda
                                        untuk
                                        peralatan
                                        teknik berkualitas, khususnya dalam distributor flowmeter, water meter, dan
                                        perlengkapan
                                        alat
                                        teknik. Dengan fokus pada performa tinggi, kami menyediakan berbagai peralatan
                                        laboratorium, industri, dan pengukuran aliran air.

                                        Kami bangga memberikan solusi inovatif dengan produk berkualitas tertinggi. Dengan
                                        tim
                                        berpengalaman, kami siap memberikan layanan responsif dan pengetahuan teknis
                                        mendalam kepada
                                        pelanggan kami. </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:col-span-2 lg:gap-8">
                            <div class="rounded-2xl bg-gray-50 p-10">
                                <h3 class="text-lg font-bold leading-7 text-gray-900">Office</h3>
                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-indigo-600 mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                </div>
                                <address class="mt-3 space-y-1 text-base not-italic leading-6 text-gray-600 font-semibold">
                                    <p>Jl. Angkasa No.06 Blok B10 Gunung Sahari Selatan Central Jakarta 10610</p>
                                    <p>GEDUNG MGK KEMAYORAN</p>
                                    <p>LT.GF Blok A5 No.8</p>
                                </address>
                            </div>
                            <div class="rounded-2xl bg-gray-50 p-10">
                                <h3 class="text-base font-bold leading-7 text-gray-900">Telepon</h3>
                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-indigo-600 mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                    </svg>

                                </div>
                                <address class="mt-3 space-y-1 text-base not-italic leading-6 text-gray-600 font-semibold">
                                    <p>085370194006</p>
                                </address>
                            </div>
                            <div class="rounded-2xl bg-gray-50 p-10">
                                <h3 class="text-base font-bold leading-7 text-gray-900">Email</h3>
                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-indigo-600 mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>

                                </div>
                                <address class="mt-3 space-y-1 text-base not-italic leading-6 text-gray-600 font-semibold">
                                    <p>salesmeterateknik@gmail.com</p>
                                </address>
                            </div>
                            <div class="rounded-2xl bg-gray-50 p-10">
                                <h3 class="text-base font-bold leading-7 text-gray-900">Media Sosial</h3>
                                <address class="mt-3 space-y-1 text-sm not-italic leading-6 text-gray-600 font-semibold">
                                    <div>
                                        <dt class="sr-only">Instagram</dt>
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50"
                                            height="50" viewBox="0 0 48 48" class="-m-3 -mx-0.5">
                                            <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38"
                                                cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#fd5"></stop>
                                                <stop offset=".328" stop-color="#ff543f"></stop>
                                                <stop offset=".348" stop-color="#fc5245"></stop>
                                                <stop offset=".504" stop-color="#e64771"></stop>
                                                <stop offset=".643" stop-color="#d53e91"></stop>
                                                <stop offset=".761" stop-color="#cc39a4"></stop>
                                                <stop offset=".841" stop-color="#c837ab"></stop>
                                            </radialGradient>
                                            <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                                d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                            </path>
                                            <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786"
                                                cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#4168c9"></stop>
                                                <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                            </radialGradient>
                                            <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                                d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                            </path>
                                            <path fill="#fff"
                                                d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                                            </path>
                                            <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                            <path fill="#fff"
                                                d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                                            </path>
                                        </svg>
                                        <dd class="mt-4"><a class=" text-base font-semibold text-gray-600"
                                                href="https://www.instagram.com/meterateknik">Instagram</a></dd>
                                    </div>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

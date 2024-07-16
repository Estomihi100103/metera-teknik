@extends('layouts.app')

@section('content')
    <div class="bg-white">
        <div aria-hidden="true" class="relative">
            <img src="img/service/calibration/landing-page.jpg" alt="" class="h-96 w-full object-cover object-center">
            <div class="absolute inset-0 bg-gradient-to-t from-white"></div>
        </div>

        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kalibrasi</h2>
                <p class="mt-4 text-gray-500 text-lg">Di Metera Teknik Indonesia, Kami menawarkan layanan kalibrasi presisi
                    menggunakan Flowlab canggih dengan kapasitas hingga 6500 m3/jam. Fasilitas kami dapat menguji berbagai
                    instrumen meter, mulai dari 2″ G40 hingga 12″ G4000, termasuk METER TURBIN GAS, METER ROTARI, dan METER
                    DIAFRAGMA. Proses kalibrasi kami dilengkapi dengan sertifikat LEGAS, menjamin kredibilitas tertinggi
                    untuk layanan kami.</p>
            </div>
        </div>
        <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kalibrasi </h2>
            </div>
            <div
                class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3 mb-20">
                <article
                    class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
                    <img src="img/service/calibration/landing-page.jpg" alt=""
                        class="absolute inset-0 -z-10 h-full w-full object-cover">
                    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-white">Kalibrasi CENTRIFUGAL PUMP
                    </h3>
                </article>

                <article
                    class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
                    {{-- <video width="640" height="360" controls class="absolute inset-0 -z-10 h-full w-full object-cover">
                        <source src="img/service/calibration/calibration-1.mp4" type="video/mp4"
                            class="absolute inset-0 -z-10 h-full w-full object-cover">
                        Your browser does not support the video tag.
                    </video> --}}
                    <iframe width="640" height="360" class="absolute inset-0 -z-10 h-full w-full object-cover"
                        src="https://youtube.com/embed/Nr6aLGO0bpk" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin">
                    </iframe>
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-white">Kalibrasi Flow Meter
                    </h3>
                </article>
                <article
                    class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
                    <iframe width="640" height="360" class="absolute inset-0 -z-10 h-full w-full object-cover"
                        src="https://youtube.com/embed/XJDoWB8omQ0?si=khN7F7MD7TbE-WFa" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin">
                    </iframe>
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-white">Kalibrasi Flow Meter
                    </h3>
                </article>

            </div>
        </div>
    </div>
@endsection

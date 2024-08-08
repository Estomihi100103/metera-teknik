<div class="mt-10 md:mt-0 ">
    <div class="px-6 text-xl text-gray-900 font-bold  text-center mt-0 md:mt-4 pb-2">
        <header class="text-center">
            <p class="mt-1 text-2xl font-extrabold text-gray-700 sm:text-5xl sm:tracking-tight lg:text-xl">
                Koleksi Terkini
            </p>
        </header>
    </div>
    <nav class="hs-accordion-group py-6 pl-6 pr-2 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
        <ul class="space-y-1.5">
            @foreach ($categories as $category)
                <li class="hs-accordion border-b border-gray-300 py-2 " id="accordion-{{ $category->id }}">
                    <button type="button"
                        class="hs-accordion-toggle  hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent w-full text-start flex items-center gap-x-3.5 py-2 text-lg font-semibold text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                        aria-expanded="false" aria-controls="accordion-content-{{ $category->id }}">
                        <span
                            class="whitespace-nowrap  rounded-full bg-gray-300 -ml-5 mr-2 px-2 py-0.5 text-center text-xs font-medium leading-5 text-gray-900 ring-1 ring-inset ring-gray-200">
                            {{ $category->brands->sum(function ($brand) {return $brand->products->count();}) }}
                        </span>
                        {{ $category->name }}

                        <svg class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                        <svg class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6" />
                        </svg>
                    </button>
                    <div id="accordion-content-{{ $category->id }}"
                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                        aria-labelledby="accordion-{{ $category->id }}">
                        <ul class="hs-accordion-group ps-3 pt-2" data-hs-accordion-always-open>
                            @foreach ($category->brands as $brand)
                                <li class="hs-accordion " id="sub-accordion-{{ $category->id }}-{{ $brand->id }}">
                                    <button type="button"
                                        class="hs-accordion-toggle hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent w-full text-start flex items-center gap-x-3.5 py-2 pl-2.5 text-sm font-semibold text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                        aria-expanded="false"
                                        aria-controls="sub-accordion-content-{{ $category->id }}-{{ $brand->id }}">
                                        <span
                                            class="whitespace-nowrap rounded-full bg-white -ml-5 py-0.5 px-1 text-center text-xs font-medium leading-5 text-gray-600 ring-1 ring-inset ring-gray-200">
                                            {{ $brand->products->count() }}
                                        </span>
                                        {{ $brand->name }}
                                        <svg class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                        <svg class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>
                                    </button>
                                    <div id="sub-accordion-content-{{ $category->id }}-{{ $brand->id }}"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                                        aria-labelledby="sub-accordion-{{ $category->id }}-{{ $brand->id }}">
                                        <ul class="pt-2 ps-2">
                                            @foreach ($brand->products as $product)
                                                <li class="list-disc">
                                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                                        href="/product/{{ $product->slug }}"> <span
                                                            class="text-gray-900 font-bold text-lg">*</span>
                                                        {{ $product->product_name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            @endforeach
        </ul>
    </nav>
</div>

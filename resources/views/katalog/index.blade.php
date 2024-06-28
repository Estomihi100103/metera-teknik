@extends('layouts.app')

@section('content')
    @include('layouts.carousel')
    <div
        class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-[1fr,3fr] lg:gap-x-8 lg:px-8">
        <!-- Product details -->
        <div class="lg:self-end">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 mb-5">Pelanggan Juga Membeli</h2>
            <div class="relative mt-2 rounded-md shadow-sm">

                <input type="text" name="" id="search"
                    class="block w-full rounded-full border-0 px-4 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    placeholder="Search category">
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>
            </div>
            <div class="mt-5">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kategori
                </h1>
            </div>
            <section aria-labelledby="information-heading" class="mt-4">
                <table class="min-w-full divide-y divide-gray-300">
                    <tbody id="categoryList" class="bg-white divide-y divide-gray-200">
                        @foreach ($categories as $category)
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-3">
                                    <div x-data="{ open: false }">
                                        <button type="button"
                                            class="hover:bg-gray-50 flex items-center w-full text-left rounded-md p-2 gap-x-3 text-sm leading-6 font-semibold text-gray-700"
                                            aria-controls="sub-menu-2" @click="open = !open" aria-expanded="false"
                                            x-bind:aria-expanded="open.toString()">
                                            <a href="/category/{{ $category->slug }}">
                                                <span
                                                    class="whitespace-nowrap rounded-full bg-white -ml-5 mr-2 px-2 py-0.5 text-center text-xs font-medium leading-5 text-gray-600 ring-1 ring-inset ring-gray-200">
                                                    {{ $category->products_count }}
                                                </span>
                                            </a>
                                            {{ $category->name }}
                                            <svg class="ml-auto h-5 w-5 shrink-0 text-gray-400" x-state:on="Expanded"
                                                x-state:off="Collapsed"
                                                :class="{ 'rotate-90 text-gray-500': open, 'text-gray-400': !(open) }"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                        <ul x-description="Expandable link section, show/hide based on state."
                                            class="mt-1 px-2" id="sub-menu-2" x-show="open" style="display: none;">
                                            @foreach ($category->products as $product)
                                                <li class=" list-disc">
                                                    <a href="/product/{{ $product->slug }}"
                                                        class="hover:bg-gray-50 block rounded-md py-2 pr-2 pl-9 text-sm leading-6 text-gray-700">
                                                        {{ $product->product_name }} </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>

        <div class="lg:row-span-2 lg:mt-0">
            <div class="border-b border-gray-200 pb-5">
                <h3 class="text-base font-semibold leading-6 text-gray-900">Katalog</h3>
                <p class="mt-2 max-w-4xl text-sm text-gray-500">Workcation is a property rental website. Etiam ullamcorper
                    massa viverra consequat, consectetur id nulla tempus. Fringilla egestas justo massa purus sagittis
                    malesuada. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum et sint molestiae suscipit,
                    eius deleniti molestias nemo eos laudantium laboriosam nam ipsam error? Distinctio ut at ab dolor a
                    nobis!</p>
            </div>
            <div>
                <ul>
                    @foreach ($pdfs as $pdf)
                        <li class="list-disc mt-4 text-indigo-600 ml-3">
                            <a href="{{ asset('storage/' . $pdf->tautan) }}"target="_blank">{{ $pdf->judul }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            const categoryList = document.getElementById('categoryList');
            const rows = categoryList.getElementsByTagName('tr');
            const originalRows = Array.from(rows); // Menyimpan referensi ke baris asli

            searchInput.addEventListener('input', function() {
                const query = this.value.toLowerCase();

                // Konversi HTMLCollection ke Array
                const rowsArray = Array.from(rows);

                // Urutkan berdasarkan kesesuaian dengan pencarian
                rowsArray.sort(function(a, b) {
                    const aText = a.textContent.toLowerCase();
                    const bText = b.textContent.toLowerCase();

                    if (aText.includes(query) && !bText.includes(query)) {
                        return -1;
                    }
                    if (!aText.includes(query) && bText.includes(query)) {
                        return 1;
                    }
                    return 0;
                });

                // Kosongkan isi tabel
                categoryList.innerHTML = '';

                // Tampilkan semua baris jika input kosong, atau tampilkan yang sesuai dengan pencarian
                if (query === '') {
                    originalRows.forEach(function(row) {
                        categoryList.appendChild(row);
                    });
                } else {
                    rowsArray.forEach(function(row) {
                        if (row.textContent.toLowerCase().includes(query)) {
                            categoryList.appendChild(row);
                        }
                    });
                }
            });
        });
    </script>
@endsection

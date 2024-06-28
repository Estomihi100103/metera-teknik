<!-- Mobile menu -->
<div x-show="open" class="relative z-40 lg:hidden"
x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog"
aria-modal="true" style="display: none;">
<div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition-opacity ease-linear duration-300"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state."
    class="fixed inset-0 bg-black bg-opacity-25" style="display: none;"></div>
<div class="fixed inset-0 z-40 flex">
    <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
        x-description="Off-canvas menu, show/hide based on off-canvas menu state."
        class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl"
        @click.away="open = false" style="display: none;">
        <div class="flex px-4 pb-2 pt-5">
            <button type="button"
                class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400"
                @click="open = false">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <div class="flow-root">
                <a href="/" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
            </div>
            <div class="flow-root">
                <a href="/product" class="-m-2 block p-2 font-medium text-gray-900">Product</a>
            </div>
            <div class="flow-root">
                <a href="/katalog" class="-m-2 block p-2 font-medium text-gray-900">Katalog</a>
            </div>
        </div>
        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <!-- Currency selector -->
        </div>
    </div>
</div>
</div>

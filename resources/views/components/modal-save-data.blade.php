<div x-show="open"
    x-transition:enter="transition duration-200 transform ease-out"
    x-transition:enter-start="scale-75"
    x-transition:leave="transition duration-100 transform ease-in"
    x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.5); display:none">
    <div class="relative grid gap-5 bg-white overflow-hidden rounded-xl w-1/2 h-auto z-50 py-10 px-20" @click.away="open=false">
        <div class="absolute top-3 right-3 flex items-center justify-end">
            <a href="#" @click="open=false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </a>
        </div>

        <div class="flex flex-col gap-10">
            <header class="text-center">
                <h3 class="text-3xl text-utama font-bold" x-text="header?.title"></h3>
                <h4 class="text-base font-medium text-center text-gray-800" x-text="header?.subtitle"></h4>
            </header>

            <section class="grid grid-cols-2 gap-5 items-start">
                <template x-for="value in data">
                    <div class="grid" :class="{'col-span-2' : value.title.toLowerCase() === 'description'}">
                        <h6 class="text-black font-bold" x-text="value.title"></h6>
                        <h5 class="text-utama" x-text="value.content || '-'"></h4>
                    </div>
                </template>
            </section>
        </div>

        <div class="flex items-center justify-center gap-2">
            <x-button type="button" label="BACK" variant="gray" @click="open=false" />

            <x-button label="SAVE" variant="primary" />
        </div>
    </div>
</div>
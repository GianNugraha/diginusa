<div x-show="open"
    x-transition:enter="transition duration-200 transform ease-out"
    x-transition:enter-start="scale-75"
    x-transition:leave="transition duration-100 transform ease-in"
    x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.5); display:none">
    <div class="grid gap-5 bg-white overflow-hidden rounded-xl w-96 h-auto z-50 p-5" @click.away="open=false">
        <div class="flex items-center justify-end">
            <a href="#" @click="open=false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </a>
        </div>

        <div class="flex flex-col gap-5 items-center justify-center">
            <span>
                <img class="logo-brand w-32 h-32" src="{{url('assets/images/logoKedua.png')}}">
            </span>

            <h2 class="text-3xl font-bold">MASDEX</h2>
            <p class="text-base font-medium text-center text-gray-800">Do you want to save the data ?</p>
        </div>

        <div class="flex items-center justify-center gap-2">
            <x-button type="button" label="BACK" variant="gray" @click="open=false" />

            <x-button label="SAVE" variant="primary" />
        </div>
    </div>
</div>
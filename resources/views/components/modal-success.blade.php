<div x-show="open" @click.away="open = false"  x-init="setTimeout(() => open = false, 8000)" id="1"
    x-transition:enter="transition duration-200 transform ease-out"
    x-transition:enter-start="scale-75"
    x-transition:leave="transition duration-100 transform ease-in"
    x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.2); display: none">
    <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
        <div class="modal-header flex bg-light text-utama font-semibold items-center justify-end py-4 px-4">
            <a href="#" @click="open=false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </a>
        </div>

        <div class="p-7 flex flex-col items-center justify-center modal-body text-utama">
            <span class="w-18 h-18 mb-2 rounded-full overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" viewBox="0 0 175.978 175.978">
                    <g id="Group_3162" data-name="Group 3162" transform="translate(-926.25 -335.154)">
                      <path id="Stroke_1" data-name="Stroke 1" d="M84.489,0A84.489,84.489,0,1,1,0,84.489,84.491,84.491,0,0,1,84.489,0Z" transform="translate(929.75 338.654)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="7"/>
                      <path id="Stroke_3" data-name="Stroke 3" d="M0,21.675,21.684,43.35,65.034,0" transform="translate(981.717 401.468)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="7"/>
                    </g>
                  </svg>
            </span>

            <h2 class="text-3xl text-darkGray font-bold mb-4">Confirm</h2>
            <p class="text-base font-medium text-center text-darkGray uppercase">Simpan Data ?</p>
                <x-button label="OKE" @click="open = false" variant="primary" class="w-full mt-3" />
            {{-- <button @click="open=false" type="button" class="btn-primary w-full mt-5 focus:outline-none">
                OKE
            </button> --}}
        </div>
        
    </div>
</div>
<div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
    x-transition:enter="transition duration-200 transform ease-out"
    x-transition:enter-start="scale-75"
    x-transition:leave="transition duration-100 transform ease-in"
    x-transition:leave-end="opacity-0 scale-90" class="overlay-modal fixed items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.5); display:none">
    <div class="modal relative grid bg-white overflow-hidden rounded-xl w-96 h-96 z-50">
        <div class="modal-header flex bg-light text-utama font-semibold items-center justify-between py-4 px-4">
            <div><span class="text-lg">Date Range Search</span></div>
            <div>
                <a href="#" @click="open=false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="modal-body p-5">
            <form action="" class="grid gap-5">
                <x-input-form label="Start Date" type="date" name="tanggal-awal" />

                <x-input-form label="End Date" type="date" name="tanggal-akhir" />
                
                <x-button label="Search Data" variant="primary" />
            </form>
        </div>
    </div>
</div>
{{-- Map Modal --}}
<div x-show="open" x-init="setTimeout(() => show = false, 8000)" id="1" x-transition:enter="transition duration-200 transform ease-out" x-transition:enter-start="scale-75" x-transition:leave="transition duration-100 transform ease-in" x-transition:leave-end="opacity-0 scale-90"  class="fixed z-50 top-0 left-0 right-0 bottom-0 grid justify-center items-center" style="background-color: rgba(0,0,0,0.2)">
    <div class=" bg-white p-5 grid gap-5">
        <div>
            <div id="calendar"></div>
        </div>
        <div class="flex justify-end gap-5">
            <x-button label="Simpan" onclick="return false" variant="primary" @click="open=false"></x-button>
        </div>
    </div>
</div>

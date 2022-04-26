{{-- Map Modal --}}
<div x-show="openMap" @click.away="openMap = false" id="1" x-transition:enter="transition duration-200 transform ease-out" x-transition:enter-start="scale-75" x-transition:leave="transition duration-100 transform ease-in" x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen inset-0" style="background-color: rgba(0,0,0,0.2); display:none">
    <div class="modal relative bg-white overflow-hidden rounded-xl w-auto h-auto z-50 p-5">
        <div class="grid gap-5">
            <div id="map" style="width: 700px; height: 300px"></div>
            <div class="flex justify-end gap-5">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
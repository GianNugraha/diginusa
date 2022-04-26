@props(['message'=>'You have to add attribute message'])

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
                <svg xmlns="http://www.w3.org/2000/svg" width="149.471" height="139.16" viewBox="0 0 159.471 139.16">
                    <g id="Icon_feather-alert-triangle" data-name="Icon feather-alert-triangle" transform="translate(2.857 0.654)">
                      <path id="Path_980" data-name="Path 980" d="M64.672,11.215,4.24,112.1a14.27,14.27,0,0,0,12.2,21.4H137.305a14.27,14.27,0,0,0,12.2-21.4L89.074,11.215a14.27,14.27,0,0,0-24.4,0Z" transform="translate(0 0)" fill="none" stroke="#fa1f35" stroke-linecap="round" stroke-linejoin="round" stroke-width="10"/>
                      <path id="Path_981" data-name="Path 981" d="M18,13.5V42.039" transform="translate(58.873 34.388)" fill="none" stroke="#fa1f35" stroke-linecap="round" stroke-linejoin="round" stroke-width="10"/>
                      <path id="Path_982" data-name="Path 982" d="M18,25.5h0" transform="translate(58.873 79.467)" fill="none" stroke="#fa1f35" stroke-linecap="round" stroke-linejoin="round" stroke-width="10"/>
                    </g>
                </svg>
            </span>

            <h2 class="text-3xl font-bold">Alert !</h2>
            <p class="text-base font-medium text-center text-gray-800">{{ $message }}</p>
        </div>

        <div class="flex items-center justify-center gap-2">
            <x-button type="button" label="BACK" variant="gray" @click="open=false" />

            <x-button type="submit" label="YES" variant="quaternary" />
        </div>
    </div>
</div>
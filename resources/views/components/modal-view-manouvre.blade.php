@props(['collections'=>[], 'src'=>null])

<div x-show="open"
    x-transition:enter="transition duration-200 transform ease-out"
    x-transition:enter-start="scale-75"
    x-transition:leave="transition duration-100 transform ease-in"
    x-transition:leave-end="opacity-0 scale-90" class="overlay-modal fixed items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.5); display:none">
    <div class="modal relative grid bg-white overflow-hidden rounded-xl z-50 p-5 gap-5 w-1/2" @click.away="open = false">
        <h3 class="text-utama">Detail Manouvre</h3>
        <div class="absolute top-0 right-0 py-2 px-2">
            <div>
                <a href="#" @click="open=false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
        </div>

        <section class="grid grid-cols-2 gap-x-8 gap-y-2 bg-gray-200 p-5 rounded-md">
            <template x-for="info in data">
                <article class="flex">
                    <p class="w-44 text-utama" x-text="info.title"></p>
                    <p class="text-darkGray flex-1" x-text="info.value"></p>
                </article>
            </template>
        </section>

        <section>
            <iframe allowfullscreen="true" :src="src" width="100%" height="300px">
            </iframe>
        </section>
    </div>
</div>

@push('after_scripts')
<script>
    function getData(el){
        const value = el.parentElement.parentElement.parentElement.dataset.value
        const valueJson = JSON.parse(value)
        const voyageContainer = document.getElementById('voyage-detail')
        
        const result = [
            {title: 'Uploaded By', value: valueJson['uploaded-by']},
            {title: 'Coordinate Location', value: valueJson['coordinate']},
            {title: 'SPOG Number', value: valueJson['spog-number']},
            {title: 'Reason for Number', value: valueJson['manouvre-reason']},
            {title: 'Date Uploaded SPOG', value: valueJson['date-uploaded']},
            {title: 'Date Manouvre', value: valueJson['date-manouvre']},
        ]
        
        voyageContainer._x_dataStack[0].data = result
        voyageContainer._x_dataStack[0].src = valueJson.srcUrl
    }
</script>
@endpush
@props(['select'=>[], 'data'=> []])

<div x-show="open" id="1"
    x-transition:enter="transition duration-200 transform ease-out"
    x-transition:enter-start="scale-75"
    x-transition:leave="transition duration-100 transform ease-in"
    x-transition:leave-end="opacity-0 scale-90" class="overlay-modal fixed items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.5); display:none">
    <div class="modal relative grid bg-white overflow-hidden rounded-xl z-50 p-5 gap-2" @click.away="open = false">
        <div class="absolute top-0 right-0 py-2 px-2">
            <div>
                <a href="#" @click="open=false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
        </div>

        <section class="flex justify-start gap-5">
            <x-input-form name="search2" placeholder="Search" icon="search" />

            <x-input-form name="sortir" type="select" icon='true' class="w-60">
                <option value="">Sortir</option>
                <option value="">Sortir</option>
            </x-input-form>
        </section>

        <x-table id="table-2" :head="['Ship Name', 'Call Sign', 'MMSI', 'IMO', 'GT', 'LOA', 'Width', 'Ship Type']" action="no-action">
            @foreach ($select as $item)
                <tr class="whitespace-nowrap text-xs">
                    <td class="whitespace-nowrap">
                        <x-input-choice type="radio" name="data_kapal[]" value='{"id": "{{$item->id}}" ,"IMO":"{{$item->imo}}", "Nama Kapal":"{{$item->ship_name}}", "Agent":"PT. Pelindo", "Call Sign":"{{$item->call_sign}}", "GT":"{{$item->gt}}", "MMSI":"{{$item->mmsi}}", "Length":"{{$item->length}} Meter", "Width":"{{$item->width}} Meter", "Tipe Sensor":"Ublok Neo 6m", "Tipe Kapal":"Ship Cargo", "Bendera":"{{$item->flag}}", "Maksimal Draft":"{{$item->max_draft}}"}' />
                    </td>
                    <td>{{$item->ship_name}}</td>
                    <td>{{$item->call_sign}}</td>
                    <td>{{$item->mmsi}}</td>
                    <td>{{$item->imo}}</td>
                    <td>{{$item->gt}}</td>
                    <td>{{$item->loa}} Meter</td>
                    <td>{{$item->width}} Meter</td>
                    <td>Ublok Neo 6m</td>
                </tr>
            @endforeach
        </x-table>

        <span class="flex justify-end">
            <x-button label="Select" href="#" variant="primary" onclick="{{ $select === 'multiple' ? 'addDataToTableKapal()' : 'addDataToInput()' }}" @click="open=false" />
        </span>
    </div>
</div>

@push('after_scripts')
<script>
    function addDataToTableKapal(){
        const kapalTerpilih = document.querySelectorAll('input[name="data_kapal[]"][type=checkbox]:checked')
        
        const bodyTableKapal = document.querySelector('#table-3 > tbody')
        const empty = bodyTableKapal.querySelector('.dataTables_empty')?.parentElement
        bodyTableKapal.innerHTML = ''
        console.log(kapalTerpilih, bodyTableKapal)
        if(empty){
            empty.remove()
        }
        // document.getElementById('section-tiga').innerHTML = ''
        kapalTerpilih.forEach((element, i) => {
            const data = JSON.parse(element.value)
            const tr = document.createElement('tr')
            tr.setAttribute('data-ship', element.value)
            tr.innerHTML = `
                <td>${i + 1}</td>
                <td>${data['Nama Kapal']}</td>
                <td>${data['Tipe Kapal']}</td>
                <td>${data['GT']}</td>
                <td>${data['Call Sign']}</td>
                <td class="flex items-center justify-center">
                    <x-button-action-table type='delete' onclick="deleteRowTable(this)" />
                </td>
            `
            bodyTableKapal.appendChild(tr)
        });
    }
    function addDataToInput(){
        const kapalTerpilih = document.querySelectorAll('input[name="data_kapal[]"][type=radio]:checked')
        
        const agenKapal = document.getElementById('agen_kapal');
        const namaKapal = document.getElementById('nama_kapal');
        const imo = document.getElementById('imo');
        const callSign = document.getElementById('call_sign');
        const bendera = document.getElementById('bendera');
        const mmsi = document.getElementById('mmsi');
        const maxDraft = document.getElementById('maksimal_draft');
        console.log([kapalTerpilih])
        kapalTerpilih.forEach((element, i) => {
            const data = JSON.parse(element.value)
            agenKapal.value = data['id']
            namaKapal.value = data['Nama Kapal']
            imo.value = data['IMO']
            callSign.value = data['Call Sign']
            bendera.value = data['Bendera']
            mmsi.value = data['MMSI']
            maxDraft.value = data['Maksimal Draft']
        });
    }
    function  deleteRowTable(el){
        const kapalTerpilih = document.querySelectorAll('input[name="data_kapal[]"][type=checkbox]:checked')
        kapalTerpilih.forEach(selectedShip=> {
            if(selectedShip.value === el.parentElement.parentElement.dataset.ship){
                selectedShip.checked = false   
            }
        })
        el.parentElement.parentElement.remove()
    }
</script>
@endpush
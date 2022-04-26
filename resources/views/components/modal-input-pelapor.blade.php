<div x-show="open" id="1"
    x-transition:enter="transition duration-200 transform ease-out"
    x-transition:enter-start="scale-75"
    x-transition:leave="transition duration-100 transform ease-in"
    x-transition:leave-end="opacity-0 scale-90" class="overlay-modal fixed items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.5); display:none">
    <div class="modal relative grid bg-white overflow-hidden rounded-xl z-50 p-5 gap-2 w-1/2" @click.away="open = false">
        <div class="absolute top-0 right-0 py-2 px-2">
            <div>
                <a href="#" @click="open=false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
        </div>

        <section class="grid grid-cols-2 gap-5" id="input-informan">
            <x-input-form label="Informan Name" name="nama_pelapor" />
            <x-input-form label="Agency" name="agensi" />
            <x-input-form label="Reporting Contact" name="kontak_pelapor" />
            <x-input-form label="Report Date" name="tanggal_laporan" type="date" />
            <x-input-form label="Additional Info" name="informasi_tambahan" type="textarea" class="col-span-2" />
        </section>

        <span class="flex justify-end">
            <x-button x-show="type==='tambah'" label="Add" href="#" variant="primary" @click="open=false, addDataInformer()"  />
            <x-button x-show="type==='edit'" id="btn-save" label='Update' href="#" variant="primary" @click="open=false" />
        </span>
    </div>
</div>

@push('after_scripts')
<script>
    let currElement = null;
    
    const name = document.querySelector("#input-informan input[name='nama_pelapor']")
    const agensi = document.querySelector("#input-informan input[name=agensi]")
    const kontakPelapor = document.querySelector("#input-informan input[name=kontak_pelapor]")
    const tanggalLapor = document.querySelector("#input-informan input[name=tanggal_laporan]")
    const informasiTambahan = document.querySelector("#input-informan textarea[name=informasi_tambahan]")

    function addDataInformer(){
        const value = {
            name:name.value,
            agensi:agensi.value,
            kontakPelapor:kontakPelapor.value,
            tanggalLapor:tanggalLapor.value,
            informasiTambahan:informasiTambahan.value
        }

        const bodyTableInforman = document.querySelector('#table-1 > tbody')
        const empty = bodyTableInforman.querySelector('.dataTables_empty')?.parentElement

        if(empty){
            empty.remove()
        }

        const trElement = document.createElement('tr')
        trElement.setAttribute('data-value', JSON.stringify(value))
        trElement.innerHTML = `
            <td>#</td>
            <td><input type="text" name="nama_pelapor[]" readonly value='${value.name}' /></td>
            <td><input type="text" name="tanggal_lapor[]" readonly value='${value.tanggalLapor}' /></td>
            <td><input type="text" name="informasi_tambahan[]" readonly value='${value.informasiTambahan}' /></td>
            <td class="flex items-center gap-5 justify-center">
                <x-button-action-table type="edit" @click="$dispatch('notify'), type='edit'" onclick=editDataInforman(this) />
                <x-button-action-table type="delete" onclick="deleteInformanRowTable(this)" />
            </td>
        `

        bodyTableInforman.appendChild(trElement)
    }

    function deleteInformanRowTable(el){
        el.parentElement.parentElement.remove()
    }

    function editDataInforman(objValue){
        objValueParsed = JSON.parse(objValue.parentElement.parentElement.dataset.value)

        name.value = objValueParsed.name
        agensi.value = objValueParsed.agensi
        kontakPelapor.value = objValueParsed.kontakPelapor
        tanggalLapor.value = objValueParsed.tanggalLapor
        informasiTambahan.value = objValueParsed.informasiTambahan

        const btn = document.getElementById('btn-save')
        currElement = objValue.parentElement.parentElement

        btn.addEventListener('click', function (){
            updateDataInformer(this, currElement);
        })
    }

    function editHandler(e){
        e.preventDefault();
        updateDataInformer(this, currElement);
    }

    function updateDataInformer(newData, el){
        const name = newData.parentElement.parentElement.querySelector("#input-informan input[name='nama_pelapor']").value
        const agensi = newData.parentElement.parentElement.querySelector("#input-informan input[name=agensi]").value
        const kontakPelapor = newData.parentElement.parentElement.querySelector("#input-informan input[name=kontak_pelapor]").value
        const tanggalLapor = newData.parentElement.parentElement.querySelector("#input-informan input[name=tanggal_laporan]").value
        const informasiTambahan = newData.parentElement.parentElement.querySelector("#input-informan textarea[name=informasi_tambahan]").value

        el.querySelector('input[name="nama_pelapor[]"]').value = name
        el.querySelector('input[name="tanggal_lapor[]"]').value = tanggalLapor
        el.querySelector('input[name="informasi_tambahan[]"]').value = informasiTambahan
        el.dataset.value = JSON.stringify({name, agensi, kontakPelapor, tanggalLapor, informasiTambahan})
    }

    function clearFormInforman(){
        name.value = ''
        agensi.value = ''
        kontakPelapor.value = ''
        tanggalLapor.value = ''
        informasiTambahan.value = ''
    }
</script>
@endpush
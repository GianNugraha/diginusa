<x-app-layout>
    <div class="bg-white rounded-xl p-5">
        <form action="{{ route('laporan-keuangan.kas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-input-form type="hidden" name="id_transaksi" value="{{$id_transaksi}}" />
        @if($lemparan == 'kas-masuk')
        <x-input-form type="hidden" name="status_kas" value="1" />
        @else
        <x-input-form type="hidden" name="status_kas" value="0" />
        @endif
        <div class="flex flex-col gap-10 bg-white rounded-xl p-5 text-darkGray">
        <h3 class="uppercase" style="font-size: 24px !important;">{{ $title ?? $lemparan}}</h3>
            <div class="grid grid-cols-2 gap-5 font-bold">
            
                <x-input-form label="Nama Akun " name="nama_akun[]" />

                <x-input-form label="Nilai Nominal Akun " id="idInputAngka" name="nominal[]" placeholder="Rp. ..." onkeypress="return hanyaAngka(event)"/>

                
                
            </div>
            <div id="content">
                
                </div>
                <x-button href="#" label="Tambah Inputan " variant="primary" onclick="addRow()" />

            <div class="flex justify-between items-center" x-data="{open: false}">
                <x-button href="{{ url()->previous() }}" label="< Batal" color="text-darkGray"/>
                <x-button href="#" label="Simpan" variant="primary" @click="open = true" />
                <x-modal-success />
            </div>
        </div>
        </form>   
    </div>
    

    <script>
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
        
            return false;
            return true;
        }
        
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#idInputAngka').keypress(function(event)  {
                var charCode = (event.which) ? event.which : event.keyCode
                if ((charCode >= 48 && charCode <= 57)
                    || charCode == 46)
                    return true;
                return false;
            });
        });
    </script>
    <script>
        function addRow() {
        const div = document.createElement('div');

        div.className = 'row';

        div.innerHTML = `
        <div class="grid grid-cols-2 gap-5 font-bold">
            
                <x-input-form label="Nama Akun " name="nama_akun[]" />

                <x-input-form label="Nilai Nominal Akun " id="idInputAngka" name="nominal[]" placeholder="Rp. ..." onkeypress="return hanyaAngka(event)"/>

                
                
            </div>
            <x-button label="Hapus Inputan" variant="primary" onclick="removeRow(this)" />
        `;

        document.getElementById('content').appendChild(div);
        }

        function removeRow(input) {
            document.getElementById('content').removeChild(input.parentNode);
        }
    </script>
</x-app-layout>
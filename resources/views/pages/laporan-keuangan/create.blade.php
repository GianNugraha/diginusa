<x-app-layout>
    <div class="bg-white rounded-xl p-5">
        <div class="flex flex-col gap-10 bg-white rounded-xl p-5 text-darkGray">
        <h3 class="uppercase" style="font-size: 24px !important;">{{ $title ?? 'Laporan Keuangan' }}</h3>
        <form action="{{ route('kas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="grid grid-cols-2 gap-5 font-bold">

                <x-input-form label="Nama Laporan Keuangan" name="nama_laporan" />
                
                <x-input-form type="date" label="Tanggal Lapor" name="tanggal_lapor" />
            </div>

            <div class="flex justify-between items-center" x-data="{open: false}">
                <x-button href="#" label="< Batal" color="text-darkGray"/>
                <x-button label="Simpan" href="#"  variant="primary" @click="open = true" />
                <x-modal-success />
            </div>
        </form>
        </div>
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
</x-app-layout>
<x-app-layout>
    <x-content-container>
        <h1 class="uppercase text-utama" style="font-size: 24px !important;">{{ $title ?? 'Detail Laporan' }}</h1>
        <section class="flex gap-10">
            <div class="grid gap-5 text-darkGray">

                <form class="grid rounded-md overflow-hidden border border-lightGray" method="POST" x-data="{open: false}">
                    <div class="border border-lightGray p-5">
                        <h3>Deskripsi</h3>
                    </div>
                    <div class="border border-lightGray p-5 grid gap-5">
                        <x-input-form type="text" label="Nama Laporan Keuangan" disabled value="{{$lap_keu[0]->nama_lap_keuangan}}"/>
                        <x-input-form type="date" label="Tanggal Lapor" disabled value="{{$lap_keu[0]->tgl_pembuatan_laporan}}"/>
                    </div>
                </form>
            </div>
            <div class="grid font-bold flex-1 rounded-md overflow-hidden shadow-md">
                <div class="grid grid-cols-2 gap-5 p-10 items-start" style="background-color: #F8F8F8">
            
                    @if($kas_masuk != NULL)
                    <h4>KAS MASUK</h4>
                    <h4>Rp. {{number_format($sum_kas_masuk[0]->jumlah, 0, '', '.')}}</h4>
                        @foreach($kas_masuk as $item)
                        <x-info-article mode="reverse" title="{{$item->nama_akun}}" content="Rp. {{ number_format($item->nominal, 0, '', '.')}}"  />
                        @endforeach
                    @else
                    <h4>KAS MASUK</h4>
                    <h4>-</h4>
                    <a href="{{ URL('/laporan-keuangan/kas-masuk/'.$lap_keu[0]->id) }}" class="text-utama hover:border-utama border-b"><x-button label="Buat Kas Masuk" type="button" variant="primary"  /></a>
                    @endif
                </div>
            </div>
            <div class="grid font-bold flex-1 rounded-md overflow-hidden shadow-md">

                <div class="grid grid-cols-2 gap-5 p-10 items-start" style="background-color: #F8F8F8">
                    
                    @if($kas_keluar != NULL)
                    <h4>KAS KELUAR</h4>
                    <h4>Rp. {{number_format($sum_kas_keluar[0]->jumlah, 0, '', '.')}}</h4>
                        @foreach($kas_keluar as $item)
                        <x-info-article mode="reverse" title="{{$item->nama_akun}}" content="Rp. {{ number_format($item->nominal, 0, '', '.')}}"  />
                        @endforeach
                    @else
                    <h4>KAS KELUAR</h4>
                    <h4>Rp. -</h4>
                        <a href="{{ URL('/laporan-keuangan/kas-keluar/'.$lap_keu[0]->id) }}" class="text-utama hover:border-utama border-b"><x-button label="Buat Kas Keluar" type="button" variant="primary"  /></a>
                    @endif
    
                </div>
            </div>
        </section>
        <div>
            @if($sum_kas_masuk[0]->jumlah != NULL and $sum_kas_keluar[0]->jumlah != NULL)
                @if($sum_kas_masuk[0]->jumlah == $sum_kas_keluar[0]->jumlah)
                <x-paid-status status="Balance" />
                @elseif($sum_kas_masuk[0]->jumlah > $sum_kas_keluar[0]->jumlah)
                <x-paid-status status="Bagus" />
                @elseif($sum_kas_masuk[0]->jumlah < $sum_kas_keluar[0]->jumlah)
                <x-paid-status status="Tidak Bagus" />
                @endif
            @else
            <x-paid-status status="Isi Kas Masuk / Keluar terlebih dahulu" />
            @endif
        </div>
        <span class="flex justify-start px-5">
            <a href="{{route('laporan-keuangan.index')}}" class="text-utama hover:border-utama border-b">Back</a>
        </span>
    </x-content-container>
    

    <script>
        // const eyeHide = document.querySelector('#password + span #eye-hide');
        // const eyeShow = document.querySelector('#password + span #eye-show');
    
        // eyeHide.addEventListener('click', function(e){
        //     e.preventDefault();
        //     this.parentElement.previousElementSibling.type = 'password';
        //     this.style.display = 'none';
        //     this.parentElement.children[1].style.display = 'block';
        // })
        // eyeShow.addEventListener('click', function(e){
        //     e.preventDefault();
        //     this.parentElement.previousElementSibling.type = 'text';
        //     this.style.display = 'none';
        //     this.parentElement.children[0].style.display = 'block';
        // })
    </script>
</x-app-layout>
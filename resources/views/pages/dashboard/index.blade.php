<x-app-layout>


    <section class="rounded-md bg-white shadow-md flex overflow-hidden">
        <span class="bg-utama w-8"></span>
        <div class="flex justify-between p-10 flex-1 items-center">
            <article>
                <h4 class="font-bold italic uppercase">Selamat Datang di Sistem pelaporan keuangan sederhana</h4>
                <p class="font-bold" style="font-size: 1.5rem !important">Test Diginusa Studio</p>
            </article>
        </div>
    </section>
    {{--
    <section class="grid grid-cols-3 gap-10">
        <x-card-total title="Laporan Keuangan" total="100" type="bill" route="{{ route('laporan-keuangan.index') }}" />
        
    </section>
    --}}
    <x-card-total title="Ini Hanya landing Page !" route="{{ route('page.development') }}">
        <div class="p-5">
            <h5>Untuk melakukan Transaksii, silahkan pilih menu Laporan Keuangan di halaman menu sebelah kiri ! </h5>
        </div>
    </x-card-total>
</x-app-layout>
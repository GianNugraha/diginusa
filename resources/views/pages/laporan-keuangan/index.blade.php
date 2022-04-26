<x-app-layout>
    <x-content-container>
        <h1 class="uppercase" style="font-size: 24px !important;">{{ $title ?? 'LAPORAN KEUANGAN' }}</h1>
        <section>
            <div class="flex flex-col-reverse lg:flex-row gap-5">
                <div class="w-full xl:w-1/2 2xl:w-1/2 flex items-center gap-2">
                    <x-input-form name="search" placeholder="Search" icon="search" />
                </div>
                @if(session()->get('role') == 0)
                <div  x-data="{ dropdownOpen: false }" class="w-full lg:w-1/2 flex items-center justify-end">
                    <div class="flex">
                        <x-button label="Buat Laporan Keuangan" href="{{ route('laporan-keuangan.create') }}"  variant="outline" color="text-utama">
                            <x-slot name="iconEnd">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#fff">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                            </x-slot>
                        </x-button>
                    </div>
                </div>
                @endif
            </div>
    
            {{-- Table --}}
            @if(session()->get('role') == 0)
            <div class="overflow-x-auto overflow-y-auto">
                <div class="my-6">
                    <x-table :head="['Nama Laporan', 'Tanggal Pembuatan', 'Status', 'Tambah']">
                        @foreach($lap_keu as $i => $item)
                            <tr>
                                <td>{{ $i +1 }}</td>
                                <td>{{$item->nama_lap_keuangan}}</td>
                                <td>{{$item->tgl_pembuatan_laporan}}</td>
                                @if($kasmasuk[$i][0]->jumlah != NULL && $kaskeluar[$i][0]->jumlah != NULL)

                                    @if($kasmasuk[$i][0]->jumlah == $kaskeluar[$i][0]->jumlah)
                                    <td><x-paid-status status="Balance" /></td>
                                    @elseif($kasmasuk[$i][0]->jumlah > $kaskeluar[$i][0]->jumlah)
                                    <td><x-paid-status status="Bagus" /></td>
                                    @elseif($kasmasuk[$i][0]->jumlah < $kaskeluar[$i][0]->jumlah)
                                    <td><x-paid-status status="Tidak Bagus" /></td>
                                    @endif
                                @else
                                    <td><x-paid-status status="Belum Di isi" /></td>
                                @endif
                                <td>
                                    <div  x-data="{ dropdownOpen: false }" class="w-full lg:w-1/2 flex items-center ">
                                        <div class="flex">
                                            <x-button @click="dropdownOpen = !dropdownOpen" label="Laporan" href="#"  variant="outline" color="text-utama">
                                                <x-slot name="iconEnd">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#fff">
                                                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </x-slot>
                                            </x-button>
                                        </div>
                                        <div x-show="dropdownOpen" class="absolute mt-20 py-2 pb-0 overflow-hidden w-48 bg-white rounded-md shadow-xl z-20" style="display: none" x-data="{open: false}">
                                            <a href="{{ URL('/laporan-keuangan/kas-masuk/'.$item->id) }}" class="flex space-x-4 px-4 py-2 text-sm capitalize text-darkGray hover:bg-utama hover:text-white transition-all">
                                                <span class="w-3/4">Kas Masuk</span>
                                            </a>
                                            <a href="{{ URL('/laporan-keuangan/kas-keluar/'.$item->id) }}" class="flex space-x-4 px-4 py-2 text-sm capitalize text-darkGray hover:bg-utama hover:text-white transition-all">
                                                <span class="w-3/4">Kas Keluar</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="{{route('laporan-keuangan.details', $item->id) }}"> <x-button-action-table style="background-color:#2e2eb8" type="see" />
                                </td>
                            </tr>
                        @endforeach
                    </x-table>
                </div>
            </div>
            @else
            <div class="overflow-x-auto overflow-y-auto">
                <div class="my-6">
                    <x-table :head="['Nama Laporan', 'Tanggal Pembuatan', 'Nama User', 'Nominal']">
                        @php 
                        $no = 1;
                        @endphp
                        @foreach($kaskeluar as $i)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{$i->nama_lap_keuangan}}</td>
                                <td>{{$i->tgl_pembuatan_laporan}}</td>
                                <td>{{$i->fullname}}</td>
                                
                                @if($i->SumNominal($i->id, 0) != NULL || $i->SumNominal($i->id, 1) != NULL )

                                    @if($i->SumNominal($i->id, 1) == $i->SumNominal($i->id, 0))
                                    <td><x-paid-status status="Balance" /></td>
                                    @elseif($i->SumNominal($i->id, 1) > $i->SumNominal($i->id, 0))
                                    <td><x-paid-status status="Bagus" /></td>
                                    @elseif($i->SumNominal($i->id, 1) < $i->SumNominal($i->id, 0))
                                    <td><x-paid-status status="Tidak Bagus" /></td>
                                    @endif
                                @else
                                    <td><x-paid-status status="Belum Di isi" /></td>
                                @endif
                                {{--
                                <td>
                                    <div  x-data="{ dropdownOpen: false }" class="w-full lg:w-1/2 flex items-center ">
                                        <div class="flex">
                                            <x-button @click="dropdownOpen = !dropdownOpen" label="Laporan" href="#"  variant="outline" color="text-utama">
                                                <x-slot name="iconEnd">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#fff">
                                                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </x-slot>
                                            </x-button>
                                        </div>
                                        <div x-show="dropdownOpen" class="absolute mt-20 py-2 pb-0 overflow-hidden w-48 bg-white rounded-md shadow-xl z-20" style="display: none" x-data="{open: false}">
                                            <a href="{{ URL('/laporan-keuangan/kas-masuk/'.$item->id) }}" class="flex space-x-4 px-4 py-2 text-sm capitalize text-darkGray hover:bg-utama hover:text-white transition-all">
                                                <span class="w-3/4">Kas Masuk</span>
                                            </a>
                                            <a href="{{ URL('/laporan-keuangan/kas-keluar/'.$item->id) }}" class="flex space-x-4 px-4 py-2 text-sm capitalize text-darkGray hover:bg-utama hover:text-white transition-all">
                                                <span class="w-3/4">Kas Keluar</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                --}}
                                <td class="text-center">
                                    <a href="{{route('laporan-keuangan.details', $i->id) }}"> <x-button-action-table style="background-color:#2e2eb8" type="see" />
                                </td>
                            </tr>
                        @endforeach
                    </x-table>
                </div>
            </div>
            @endif
        </section>
    </x-content-container>
</x-app-layout>
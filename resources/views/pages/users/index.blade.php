<x-app-layout>
    <h1 class="uppercase" style="font-size: 24px !important;">{{ $title ?? '' }}</h1>
    <div class=" bg-white rounded-xl p-5">
        {{-- Search Bar --}}
        
        <div class="flex flex-col-reverse lg:flex-row gap-5">
            <div class="w-full xl:w-1/2 2xl:w-1/2 flex items-center gap-2">
                <form action="" class="w-full xl:w-96 2xl:w-96">
                    {{-- Search DataTable --}}
                    <x-input-form name="search" placeholder="Cari Data">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </x-slot>
                    </x-input-form>
                    {{-- End Search DataTable --}}
                </form>
                
                <x-button variant="iconOnlyPrimary">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 27 18">
                            <path id="Icon_material-filter-list" data-name="Icon material-filter-list" d="M15,27h6V24H15ZM4.5,9v3h27V9ZM9,19.5H27v-3H9Z" transform="translate(-4.5 -9)" fill="#f6f6f6"/>
                        </svg>
                    </x-slot>
                </x-button>

                <div x-data="{ open: false }" class="relative">
                    {{-- Search Date --}}
                    <x-button variant="iconOnlyPrimary" @click="open = true">
                        <x-slot name="icon">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </x-slot>
                    </x-button>
                    {{-- End Search Date --}}

                    {{-- Modal Pick Date --}}
                    <x-modal-date />
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex items-center justify-end">
                {{-- Tambah Data --}}
                <x-button label="Tambah Data" href="{{ route('users.create') }}" variant="outline" color="text-utama">
                    <x-slot name="iconEnd">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#fff">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </x-slot>
                </x-button>
                {{-- End Tambah Data --}}
            </div>
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto overflow-y-auto">
            <div class="my-6">
                <x-table :head="['Nama User', 'NIP', 'Jabatan User', 'Level Akun']" dummy="true"/>
            </div>
        </div>
    </div>
</x-app-layout>
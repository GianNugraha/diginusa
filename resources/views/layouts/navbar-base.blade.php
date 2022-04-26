<div class="grid grid-cols-2 gap-4">
    <div class="flex items-center">
        {{-- <img src="{{ asset('assets/media/icon-menu.svg') }}" alt="icon"
            class="md:block hidden cursor-pointer content-direct w-12"> --}}
        <button type="button" @click="sideOpen = !sideOpen" class="md:flex focus:outline-none hidden  items-center justify-center cursor-pointer content-direct h-10 w-10 bg-white hover:bg-utama hover:text-white duration-100 p-2 rounded-lg transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div class="flex flex-col ml-5">
            <h5>Test Diginusa</h5>
            <p class="pxsmall text-gray-700">Sistem Laporan keuangan sederhana</p>
        </div>
    </div>
    <div class="flex items-center justify-end">

        <div class="flex justify-center items-center space-x-5 ml-8">
            
            <div x-data="{ dropdownOpen: false }" class="relative">
                <div class="flex">
                    <div @click="dropdownOpen = !dropdownOpen" class="flex items-center cursor-pointer justify-center overflow-hidden w-10 h-10 rounded-full">
                        <img src="{{ asset('assets/icons/svg/user.svg') }}">
                    </div>
                    <div class="flex flex-col items-start mx-3 cursor-pointer" @click="dropdownOpen = !dropdownOpen">
                        <h6 class="font-regular capitalize pt-2">{{ session()->get('fullname'); }}</h6>
                        <!-- <p class="pxsmall">{{ session()->get('role'); }}</p> -->
                    </div>
                    <button @click="dropdownOpen = !dropdownOpen"
                        class="relative z-10 block rounded-md cursor-pointer focus:outline-none">
                        <svg class="h-5 w-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                <div x-show="dropdownOpen" class="absolute right-0 mt-2 pt-2 pb-0 overflow-hidden w-48 bg-white rounded-md shadow-xl z-20" style="display: none" x-data="{open: false}">
                    <!-- <a href="{{ route('user.profile', session()->get('userid')) }}" class="flex space-x-4 px-4 py-2 text-sm capitalize text-darkGray hover:bg-utama hover:text-white transition-all">
                        <span class="ico flex items-center justify-center w-1/4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="w-3/4">Profile</span>
                    </a> -->
                    <a href="#" class="flex space-x-4 px-4 py-2 text-sm capitalize text-darkGray hover:bg-utama hover:text-white transition-all" @click="open=true">
                        <span class="ico flex items-center justify-center w-1/4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </span>
                        <span class="w-3/4">Logout</span>
                    </a>
                    
                    <x-modal-logout />
                </div>
            </div>
        </div>
    </div>
</div>


{{-- alert session info --}}
@if(session()->has('error'))
    <x-alert variant="error" :message="session()->get('error')" />
@endif
    
@if(session()->has('success'))
    <x-alert variant="success" :message="session()->get('success')" />
@endif
    
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <x-alert variant="error" :message="$error" />
    @endforeach
@endif

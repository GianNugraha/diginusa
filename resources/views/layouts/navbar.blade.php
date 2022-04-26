<div class="grid grid-cols-2 gap-4">
    <div class="flex items-center">
        {{-- <img src="{{ asset('assets/media/icon-menu.svg') }}" alt="icon"
            class="md:block hidden cursor-pointer content-direct w-12"> --}}
        <button type="button" class="md:flex focus:outline-none hidden  items-center justify-center cursor-pointer content-direct h-10 w-10 bg-white hover:bg-blue-1 hover:text-black duration-100 p-2 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
        </button>
        <div class="flex flex-col ml-5">
            <h5>SIMLOG</h5>
            <p class="pxsmall text-gray-700">System Logistic | Disnav Tg. Priok</p>
        </div>
    </div>
    <div class="flex items-center justify-end">

        <div class="flex justify-center items-center space-x-5 ml-8">
            <div x-data="{ dropdownOpen: false }" class="relative">
                <div class="flex relative">
                    <div @click="dropdownOpen = !dropdownOpen" class="flex  items-center cursor-pointer justify-center overflow-hidden w-10 h-10 rounded-full bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25.446" height="26.325" viewBox="0 0 25.446 26.325">
                            <g id="Group" transform="translate(0.65 0.65)">
                              <path id="Vector" d="M0,19.685V9.15a9.15,9.15,0,0,1,18.3,0V19.685H0Z" transform="translate(2.93)" fill="none" stroke="#333" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.3" stroke-dasharray="0 0"/>
                              <path id="Vector-2" data-name="Vector" d="M0,0H24.146" transform="translate(0 19.685)" fill="none" stroke="#333" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.3" stroke-dasharray="0 0"/>
                              <path id="Vector-3" data-name="Vector" d="M5.381,0A2.691,2.691,0,0,1,2.69,2.69,2.683,2.683,0,0,1,0,0" transform="translate(9.376 22.335)" fill="none" stroke="#333" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.3" stroke-dasharray="0 0"/>
                            </g>
                          </svg> 
                          <span class="absolute top-0 right-2 z-30">
                            <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-purple-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-purple-500"></span>
                          </span>                         
                    </div>
                </div>

                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                <div x-show="dropdownOpen" class="absolute right-0 mt-2 w-96 bg-white rounded-md shadow-md z-20">
                    <div class="notif-head flex items-center justify-center px-4 py-5">
                        <h5 class="font-semibold">Notifications (100)</h5>
                    </div>
                    <div class="notif-body max-h-96 overflow-y-auto overflow-x-hidden">
                        @for ($i = 0; $i < 100; $i++)
                        <a href="#" class="flex flex-col space-y-3 px-10 py-6 text-sm bg-gray-100  hover:bg-blue-400 hover:text-white">
                            <h6 class="font-bold">Permintaan Barang</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, perspiciatis sed. Sunt blanditiis vitae sapiente adipisci praesentium in ipsum repudiandae.</p>
                        </a>
                        @endfor
                    </div>
                    <div class="notif-foot flex items-center justify-center px-4 py-5">
                        <a href="#" class="font-semibold text-sm text-primary hover:underline">See All</a>
                    </div>
                </div>
            </div>
            <div x-data="{ dropdownOpen: false }" class="relative">
                <div class="flex">
                    <div @click="dropdownOpen = !dropdownOpen" class="flex items-center cursor-pointer justify-center overflow-hidden w-10 h-10 rounded-full">
                        <img src="https://picsum.photos/200/300?random=1">
                    </div>
                    <div class="flex flex-col items-start mx-3 cursor-pointer" @click="dropdownOpen = !dropdownOpen">
                        <h6 class="font-regular">user</h6>
                        <p class="pxsmall">Super Admin</p>
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

                <div x-show="dropdownOpen" class="absolute right-0 mt-2 pt-2 pb-0 overflow-hidden w-48 bg-white rounded-md shadow-xl z-20">
                    <a href="#" class="flex space-x-4 px-4 py-2 text-sm capitalize text-black hover:bg-blue-500 hover:text-white">
                        <span class="ico flex items-center justify-center w-1/4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="w-3/4">Profile</span>
                    </a>
                    <a href="#" class="flex space-x-4 px-4 py-2 text-sm capitalize text-white bg-red-600 hover:bg-red-700 hover:text-white">
                        <span class="ico flex items-center justify-center w-1/4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </span>
                        <span class="w-3/4">Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- alert session info --}}
@if(session()->has('error'))
<div class="w-full my-2 relative flex flex-col space-y-2 items-center justify-center" x-data="{ open: true }">
    <div class="px-7 py-5 flex items-center justify-between w-full  rounded-md bg-red-500" x-show="open">
        <div class="flex items-center space-x-3 ">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                  </svg>
            </div>
            <div>
                <h3 class="text-gray-800 text-lg font-medium">{{ session()->get('error') }}</h3>
            </div>
        </div>
        <div class="flex items-center">
            <button type="button" class="focus:outline-none" @click="open = false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
            </button>
        </div>
    </div>
</div>
@endif
@if(session()->has('success'))
<div class="w-full my-2 relative flex flex-col space-y-2 items-center justify-center" x-data="{ open: true }">
    <div class="px-7 py-5 flex items-center justify-between w-full  rounded-md bg-green-400" x-show="open">
        <div class="flex items-center space-x-3 ">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
            </div>
            <div>
                <h3 class="text-gray-800 text-lg font-medium">{{ session()->get('success') }}</h3>
            </div>
        </div>
        <div class="flex items-center">
            <button type="button" class="focus:outline-none" @click="open = false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
            </button>
        </div>
    </div>
</div>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="w-full my-2 relative flex flex-col space-y-2 items-center justify-center" x-data="{ open: true }">
            <div class="px-7 py-5 flex items-center justify-between w-full  rounded-md bg-red-500" x-show="open">
                <div class="flex items-center space-x-3 ">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                          </svg>
                    </div>
                    <div>
                        <h3 class="text-gray-800 text-lg font-medium">{{ $error }}</h3>
                    </div>
                </div>
                <div class="flex items-center">
                    <button type="button" class="focus:outline-none" @click="open = false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                    </button>
                </div>
            </div>
        </div>        
    @endforeach
@endif
{{-- <div class="sidebar lg:py-8 md:py-5 md:block hidden"> --}}
    <div class="fixed pb-28 top-0 bg-utama left-0 bottom-0 z-20 overflow-hidden transition-all md:block hidden w-72" :class="{'w-72':sideOpen, 'w-20':!sideOpen}">
        {{-- Logo Header Sidebar --}}
        <div class="logo-side-bar justify-center text-white px-6 lg:py-6 md:py-4 flex gap-5">
            <img src="{{ asset('assets/images/logoUtama.png') }}" class="w-20">
        </div>
    
        {{-- Menu Sidebar --}}
        <div class="flex flex-col justify-between pb-32 h-full">
          <ul class="scroll-menu overflow-y-scroll h-full">
          {{-- <ul class="overflow-y-scroll h-sideLG" :class="{'h-sideLG': sideOpen, 'h-sideXL': !sideOpen}"> --}}

            @foreach ($lists as $list)
                @if ($list['childs'])
                <li class="mt-5" x-data="{open: false}" :class="{'mt-0': !sideOpen, 'mt-5': sideOpen}">
                    <div class=" icon-link flex justify-between items-center" :class="{'justify-center': !sideOpen, 'justify-between': sideOpen}" style="background-color: white; color:black">
                        <a class="flex items-center text-darkGray gap-3 pl-10 pr-3 py-1">
                            {{-- <i class="bx bx-collection"></i> --}}
                            <span class="link_name font-bold" :class="{'hidden': !sideOpen}">{{ $list['name'] }}</span>
                        </a>
                        {{-- <i class="bx bxs-chevron-down arrow pr-3 text-darkGray" :class="{'hidden': !sideOpen}"></i> --}}
                    </div>
                    <ul class="sub-menu">
                        @foreach ($list['childs'] as $menu)
                        @if ($menu['childs'])
                        <li class="transition-all" :class="{'flex':!sideOpen, 'justify-center':!sideOpen}" x-data="{open: false}">
                            <a href="#" class="hover:bg-utamaHover flex justify-between items-center text-white gap-3 pl-10 pr-3 py-3" :class="{'pr-3':sideOpen, 'pl-10':sideOpen}" @click="open=!open">
                                <span class="flex gap-3 items-center">
                                    {{-- <i class="bx bx-collection"></i>
                                    --}}
                                    @if ($menu['icon'])
                                        <img class="w-6" src="{{ asset('assets/icons/svg/sidebar/'.$menu['icon'].'.svg') }}" alt="menu icon">
                                    @endif
                                    <span class="" :class="{'hidden': !sideOpen}">{{ $menu['name'] }}</span>
                                </span>
                                <i class="bx bxs-chevron-down arrow transition-all" :class="{'hidden': !sideOpen, 'transform':open , 'origin-center':open, 'rotate-180':open}"></i>
                            </a>
                            <ul class="sub-menu" x-show="open">
                                @foreach ($menu['childs'] as $submenu)
                                <li class="hover:bg-utamaHover text-white {{ Request::routeIs(substr($submenu['link'], 1).'.*') ? 'bg-utamaHover' : '' }}" :class="{'flex':!sideOpen, 'justify-center':!sideOpen}">
                                    <a class="py-3 pr-3 pl-20 flex items-center gap-3" href="{{ $submenu['link'] }}" :class="{'pr-3':sideOpen, 'pl-20':sideOpen}">
                                        {{-- <i class="bx bx-collection"></i> --}}
                                        @if ($submenu['icon'])
                                            <img class="w-6" src="{{ asset('assets/icons/svg/sidebar/'.$submenu['icon'].'.svg') }}" alt="sub menu icon">
                                        @endif
                                        <span class="link_name font-semibold" :class="{'hidden': !sideOpen}">{{ $submenu['name'] }}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @else
                        <li class="transition-all cursor-pointer hover:bg-utamaHover text-white {{ Request::routeIs(substr($menu['link'], 1).'.*') ? 'bg-utamaHover' : '' }}">
                            <a href="{{ $menu['link'] }}" class="flex items-center gap-3 pl-10 pr-3 py-3" :class="{'justify-center': !sideOpen, 'pr-3':sideOpen, 'pl-10':sideOpen}">
                                {{-- <i class="bx bx-collection"></i> --}}
                                @if ($menu['icon'])
                                    <img class="w-6" src="{{ asset('assets/icons/svg/sidebar/'.$menu['icon'].'.svg') }}" alt="menu icon">
                                @endif
                                <span class="link_name font-semibold" :class="{'hidden': !sideOpen}">{{ $menu['name'] }}</span>
                            </a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </li>
                @else
                <li class="transition-all cursor-pointer hover:bg-utamaHover text-darkGray {{ Request::routeIs(substr($list['link'], 1).'.*') ? 'bg-utamaHover' : '' }}">
                    <a href="{{ $list['link'] }}" class="flex items-center gap-3 pl-10 pr-3 py-3" :class="{'justify-center': !sideOpen, 'pr-3':sideOpen, 'pl-10':sideOpen}">
                        {{-- <i class="bx bx-collection"></i> --}}
                        <img class="w-6" src="{{ asset('assets/icons/svg/sidebar/'.$list['icon'].'.svg') }}" alt="">
                        <span class="link_name font-semibold" :class="{'hidden': !sideOpen}">{{ $list['name'] }}</span>
                    </a>
                </li>
                @endif
            @endforeach
          </ul>
        </div>
        {{-- End Menu Sidebar --}}
        
        {{-- Button Bottom Sidebar --}}
        <div class="absolute bottom-5 grid p-2 w-full" :class="{'p-0': !sideOpen, 'p-2': sideOpen}">
            <x-button href="{{route('logout')}}" label="Logout" variant="secondary" x-show="sideOpen">
                <x-slot name="icon">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>                                                      
                </x-slot>
            </x-button>
    
            <x-button href="{{route('logout')}}" variant="secondary" color="text-white" x-show="!sideOpen" style="display: none">
                <x-slot name="icon">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>                                                      
                </x-slot>
            </x-button>
        </div>
    </div>
    
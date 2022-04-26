<x-app-layout>

    @php
        $menuHome = [
            ['title'=>'Nota Tagih', 'icon'=>'nota-tagih', 'route'=>route('development.index')],
            ['title'=>'Kwitansi', 'icon'=>'kwitansi', 'route'=>route('development.index')],
            ['title'=>'SPB', 'icon'=>'spb', 'route'=>route('development.index')],
            ['title'=>'Warta Kapal', 'icon'=>'warta-kapal', 'route'=>route('development.index')],
            ['title'=>'Monitoring PNBP', 'icon'=>'monitoring-pnbp', 'route'=>route('development.index')],
            ['title'=>'Infografis', 'icon'=>'infografis', 'route'=>route('development.index')],
            ['title'=>'User Management', 'icon'=>'user-management', 'route'=>route('development.index')],
            ['title'=>'User Level', 'icon'=>'user-level', 'route'=>route('development.index')],
        ]
    @endphp

    <section class="grid grid-cols-4 gap-10">
        @foreach ($menuHome as $item)
            <x-content-container class="grid items-center justify-items-center">
                <h4 class="whitespace-nowrap">{{ $item['title'] }}</h4>
                <a href="{{ $item['route'] }}">
                    <img src="{{ asset('assets/icons/svg/home/'.$item["icon"].'.svg') }}" alt="Icon Card">
                </a>
            </x-content-container>
        @endforeach
    </section>

</x-app-layout>
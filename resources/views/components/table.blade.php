@props(['head'=>['tes1', 'tes2', 'tes3'], 'data'=>null, 'action'=>'', 'dummy'=>false, 'id'=>'table'])

<table id="{{ $id }}" class="table-auto my-3 w-full rounded-t-md overflow-hidden" data-ordering="true" data-paging="true"  data-searching="true">
    <thead class="">
        <tr class="whitespace-nowrap">
            {{-- Default Number Head --}}
            <th class="text-left bg-utama px-4 py-3 text-white">#</th>

            {{-- Headings Content --}}
            @foreach ($head as $value)
            @if (strtolower($value) === 'hidden')
            <th class="text-left bg-utama px-4 py-3 text-white column-hidden" style="display: none" >{{ $value }}</th>   
            @else
            <th class="text-left bg-utama px-4 py-3 text-white">{{ $value }}</th>   
            @endif
            @endforeach

            {{-- Default Action Head --}}
            @if ($action !== 'no-action')
                <th class="text-center bg-utama px-4 py-3 text-white">Action</th>
            @endif
        </tr>
    </thead>
    <tbody class="">
        @if ($dummy)
            @for ($row = 1; $row <= 5; $row++)
                <tr>
                    <td>{{$row}}</td>

                    {{-- Kolom untuk Data --}}
                    @for ($col = 1; $col <= count($head); $col++)
                        <td @click="openMap=true" class="px-2 py-2.5">
                            <a href="{{ Request::url().'/detail/'.$row }}">
                                Data Contoh Field {{ $col }} di Baris {{ $row }}
                            </a>
                        </td>
                    @endfor

                    {{-- Kolom untuk Action --}}
                    @if ($action !== 'no-action')
                        {{-- Handle Checklist --}}
                        @if ($action === 'checklist')
                            <td class="">
                                <div class="flex items-center justify-center gap-2">
                                    <x-input-choice type="checkbox" name="tes" onchange="console.log('yeay')" />
                                </div>
                            </td>
                        @else
                        {{-- Handle Edit dan Delete --}}
                            <td class="">
                                <div class="flex items-center justify-center gap-2">
                                    {{-- Edit Action --}}
                                    <x-button-action-table type="edit" route="{{ Request::url().'/edit/'.$row }}" />

                                    {{-- Delete Action --}}
                                    <x-button-action-table type="delete" @click="open=true; routeDelete='{{ route(Request::path().'.delete', $row) }}'" />                  
                                </div>
                            </td>
                        @endif
                    @endif
                </tr>
            @endfor
        @else
            {{ $slot }}
        @endif
    </tbody>
</table>
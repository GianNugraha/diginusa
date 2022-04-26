@props(['name'=>'', 'label'=>'', 'type'=>'text', 'icon'=>null, 'value'=>'', 'readonly'=>false, 'searchable'=>true, 'autocomplete'=>'off', 'required'=>false])

{{-- Untuk input definisikan name pada props saat pemanggilan komponen --}}

<label {{ $attributes->only('class')->merge(['class'=>'flex flex-col gap-2 font-bold']) }}>
    @if ($label)
        <div class="flex">
            {{ $label }}
            @if ($required)
            <span class="text-lightRed">*</span>
            @endif
        </div>
    @endif
    
    {{-- Type Radio --}}
    @if ($type === 'radio' || $type === 'checkbox')
        <span class="relative flex gap-10 font-normal">
            {{ $slot }}
        </span>

    {{-- Type File --}}
    @elseif($type === "file")
        <label for="{{ $name }}" class="bg-blue-100 col-span-2 p-5">
            <input type="file" id="{{ $name }}" name="{{ $name }}" style="display: none" {{ $attributes->except('class') }} onchange="fileUploadHandler(this)">
            <span class="grid justify-center justify-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="97.066" height="118" viewBox="0 0 97.066 118">
                    <g id="upload" transform="translate(-776.481 -457)">
                      <path id="Path_343" data-name="Path 343" d="M79.321,26.1c0-.258.043-.517.043-.775A25.009,25.009,0,0,0,31.7,14.427,12.866,12.866,0,0,0,13.152,23.9a19.6,19.6,0,0,0,6.24,38.113H41.6V44.788H31.156L48.533,26.765l17.377,18H55.466V61.993h23.9a17.949,17.949,0,0,0-.043-35.9Z" transform="translate(776.481 457)" fill="#43425d" opacity="0.1"/>
                      <text id="Upload_a_file_here_" data-name="Upload a file here
                  " transform="translate(824 553)" fill="#4d4f5c" font-size="12" font-family="SourceSansPro-Regular, Source Sans Pro" opacity="0.5"><tspan x="-43.866" y="0">Upload a file here</tspan><tspan x="0" y="17"></tspan></text>
                    </g>
                </svg>
                <p class="hidden font-medium -mt-16 text-center"></p>
                <button type="button" class="focus:outline-none bg-blue-500 py-2 px-10 rounded-md text-white hover:bg-blue-400" onclick="document.getElementById('{{ $name }}').click()">Upload</button>
            </span>
        </label>

    {{-- Type text, password, textarea, select --}}
    @else
        <span class="{{ $searchable && $type == 'select' ? 'relative' : 'flex' }} flex-1 {{ $type === 'textarea' ? 'border-1' : 'border-1' }} @if($readonly)border-lightGray text-white @endif">
            {{-- Type Select --}}
            @if ($type === 'select')
                <select name="{{ $name }}" id="{{ $name }}" class="appearance-none w-full h-full relative p-2 {{ $icon && !$searchable ? 'rounded-l-md' : 'rounded-md' }} {{ $searchable ? 'select2' : '' }} @if($readonly) bg-lightGray @else bg-white border border-utama @endif" {{ $readonly ? 'readonly disabled' : '' }} {{ $attributes }}>
                    {{ $slot }}
                </select>
                @if ($icon)
                <span class="flex items-center rounded-r-md p-2 bg-utama {{ $searchable ? 'absolute top-0 bottom-0 right-0' : '' }}">
                    {{-- {{$icon}} --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14.798" viewBox="0 0 26.087 14.798">
                        <path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.549,13.5H25.126a1.752,1.752,0,0,1,1.237,2.992L15.079,27.785a1.758,1.758,0,0,1-2.483,0L1.312,16.492A1.752,1.752,0,0,1,2.549,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"/>
                    </svg>
                </span>
                @endif

            @elseif($type === 'textarea')
            {{-- Type TextArea --}}
                <textarea name="{{ $name }}" id="{{ $name }}" class="w-full h-full p-2 @if($readonly) bg-lightGray @else bg-white border border-utama rounded-md @endif" autocomplete="{{ $autocomplete }}" {{ $readonly ? 'readonly' : '' }} {{ $attributes }}>{{ old("$name", $value) }}</textarea>

            @elseif($type === 'password')
            {{-- Type Password --}}
                <input type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}" {{ $readonly ? 'readonly' : '' }} class="w-full show-hide-pw h-full p-2 relative @if($readonly) bg-lightGray @else bg-white border border-utama @endif rounded-l-md" {{ $attributes }}>

                <span id="toggle-pw" class="flex items-center rounded-r-md p-2 bg-utama text-white">
                    {{-- Icon untuk Password Show --}}
                    <svg class="eye-show hidden" xmlns="http://www.w3.org/2000/svg" width="26.721" height="17.814" viewBox="0 0 26.721 17.814">
                        <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M26.56,12.73a14.88,14.88,0,0,0-13.2-8.23,14.882,14.882,0,0,0-13.2,8.23,1.5,1.5,0,0,0,0,1.354,14.88,14.88,0,0,0,13.2,8.23,14.882,14.882,0,0,0,13.2-8.23A1.5,1.5,0,0,0,26.56,12.73Zm-13.2,7.358a6.68,6.68,0,1,1,6.68-6.68A6.68,6.68,0,0,1,13.361,20.088Zm0-11.134a4.422,4.422,0,0,0-1.174.176,2.22,2.22,0,0,1-3.1,3.1,4.443,4.443,0,1,0,4.278-3.279Z" transform="translate(0 -4.5)" fill="currentColor"/>
                    </svg>
                    {{-- Icon untuk Password Hide --}}
                    <svg class="eye-hide" xmlns="http://www.w3.org/2000/svg" width="28.721" height="19.814" viewBox="0 0 45 36">
                        <path id="Icon_awesome-eye-slash" data-name="Icon awesome-eye-slash" d="M22.5,28.125a10.087,10.087,0,0,1-10.048-9.359l-7.376-5.7a23.435,23.435,0,0,0-2.582,3.909,2.275,2.275,0,0,0,0,2.052A22.552,22.552,0,0,0,22.5,31.5a21.84,21.84,0,0,0,5.477-.735l-3.649-2.823a10.134,10.134,0,0,1-1.828.184ZM44.565,32.21,36.792,26.2a23.291,23.291,0,0,0,5.713-7.177,2.275,2.275,0,0,0,0-2.052A22.552,22.552,0,0,0,22.5,4.5,21.667,21.667,0,0,0,12.142,7.151L3.2.237a1.125,1.125,0,0,0-1.579.2L.237,2.211a1.125,1.125,0,0,0,.2,1.579L41.8,35.763a1.125,1.125,0,0,0,1.579-.2l1.381-1.777a1.125,1.125,0,0,0-.2-1.579ZM31.648,22.226,28.884,20.09a6.663,6.663,0,0,0-8.164-8.573,3.35,3.35,0,0,1,.655,1.984,3.279,3.279,0,0,1-.108.7l-5.176-4A10.006,10.006,0,0,1,22.5,7.875,10.119,10.119,0,0,1,32.625,18a9.885,9.885,0,0,1-.977,4.226Z" transform="translate(0 0)" fill="currentColor"/>
                    </svg>  
                </span>
            @else
            {{-- Type Default Text --}}
                <input type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $name }}" value="{{ old("$name", $value) }}" {{ $readonly ? 'readonly' : '' }} class="w-full h-full p-2 relative {{ $icon ? 'rounded-l-md' : 'rounded-md' }} @if($readonly) bg-lightGray @else bg-white border border-utama @endif" autocomplete="{{ $autocomplete }}" {{ $attributes }}>

                @if ($icon)

                <span class="flex items-center whitespace-nowrap justify-center rounded-r-md p-2 bg-utama text-white" style="min-width: 50px">
                    @if ($icon === 'search')
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    @else
                    {{$icon}}
                    @endif
                </span>
                
                @endif
            @endif
        </span>
    @endif
    @error($name)
        <p class="text-red-600 font-light" x-data="{show:true}" x-show="show" x-init="setTimeout(() => show = false, 5000)">{{ $message }}</p>
    @enderror
</label>


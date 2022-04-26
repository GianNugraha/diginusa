<x-app-layout>
    <x-content-container>
        <h1 class="uppercase text-utama" style="font-size: 24px !important;">{{ $title ?? 'Profile' }}</h1>
        <section class="flex gap-10">
            <div class="grid gap-5 text-darkGray">
                <div class="rounded-xl overflow-hidden h-52 relative" style="max-width: fit-content; min-width: -webkit-fill-available;">
                    <label for="change-picture" class="w-full h-full object-cover cursor-pointer grid items-center">
                        <img id="image-preview" src="{{$users->url_photo}}" alt="Photo Profile" width="100%">
                        <input type="file" name="foto-profile" id="change-picture" style="display: none" onchange="changeImageHandler(this, 'image-preview')">
                        <p class="absolute top-1/2 left-1/2 z-20 transform -translate-x-1/2 -translate-y-1/2 text-white flex gap-2 justify-center items-center w-full h-full" style="background: rgba(0,0,0, .5)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21.002" height="21.002" viewBox="0 0 21.002 21.002">
                                <g id="Icon_feather-upload" data-name="Icon feather-upload" transform="translate(-3 -3)">
                                  <path id="Path_985" data-name="Path 985" d="M22.5,22.5v4a2,2,0,0,1-2,2H6.5a2,2,0,0,1-2-2v-4" transform="translate(0 -5.999)" fill="none" stroke="#ececec" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                  <path id="Path_986" data-name="Path 986" d="M20.5,9.5l-5-5-5,5" transform="translate(-2)" fill="none" stroke="#ececec" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                  <path id="Path_987" data-name="Path 987" d="M18,4.5v12" transform="translate(-4.499)" fill="none" stroke="#ececec" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                </g>
                            </svg>
                            Change Picture
                        </p>
                    </label>
                </div>

                <form action="{{ route('user.change-password') }}" class="grid rounded-md overflow-hidden border border-lightGray" method="POST" x-data="{open: false}">
                    @csrf
                    <div class="border border-lightGray p-5">
                        <h3>Change Password</h3>
                    </div>
                    <div class="border border-lightGray p-5 grid gap-5">
                        <x-input-form type="password" label="New Password" name="password" placeholder="Password" />
                        <x-input-form type="password" label="Retype Password" name="password_confirmation" placeholder="Retype Password" />
                        <x-button label="Change" type="button" variant="primary" @click="open = true" />
                    </div>
                    <x-modal-save />
                </form>
            </div>

            <div class="grid font-bold flex-1 rounded-md overflow-hidden shadow-md">
                @if (session()->get('role') != 'Disnav')
                    <div class="p-10 flex items-center" style="background-color: #EAEAEA">
                        <img src="{{ $users->url_logo }}" alt="Logo PT" width="80px">
                        <div class="text-center flex-1">
                            <p class="text-darkGray">Shipping Agent</p>
                            <h3 class="text-utama">{{ $users->nama_kantor }}</h3>
                        </div>
                    </div>
                @endif

                <div class="grid grid-cols-2 gap-5 p-10 items-start" style="background-color: #F8F8F8">
                    @if (session()->get('role') != 'Disnav')
                        @php
                            $contohData = [
                                "Full Name"=> $users->nama_user,
                                "Company NPWP"=>$users->npwp,
                                "Office Unit"=>"$users->unit_kantor",
                                "Company Contact"=>$users->telepon_kantor,
                                "Email"=>$users->email,
                                "Company Address"=>$users->alamat_kantor,
                            ]
                        @endphp
                    @else
                        @php
                        $contohData = [
                            "Full Name"=> $users->nama_lengkap,
                            "Email"=>$users->email,
                        ]
                        @endphp
                    @endif

                    @foreach ($contohData as $key => $value)
                    <x-info-article mode="reverse" title="{{ $key }}" content="{{ $value }}" />
                        {{-- <article class="text-darkGray {{ $key === 'Company Address' ? 'col-span-2' : '' }}">
                            <h3 class="font-bold mb-2">{{ $key }}</h3>
                            <p class="font-light">{{ $value }}</p>
                        </article> --}}
                    @endforeach
                </div>
            </div>
        </section>
        <span class="flex justify-start px-5">
            <a href="/" class="text-utama hover:border-utama border-b">Back</a>
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

        function changeImageHandler(inputEl, imgEl){
            const imagePreview = document.getElementById(imgEl);
            const srcImgUploaded = inputEl.files[0]
            const objUrl = URL.createObjectURL(srcImgUploaded)
            
            imagePreview.setAttribute('src', objUrl)
        }
    </script>
</x-app-layout>
<x-app-layout>
    <div class="bg-white rounded-xl p-5">
        <div class="flex flex-col gap-10 bg-white rounded-xl p-5 text-darkGray">

            <div class="flex gap-5">
                <div class="ava grid gap-2">
                    <div class="rounded-xl overflow-hidden flex items-center justify-center h-52 w-52">
                        <img src="https://picsum.photos/200/300?random=1" alt="User Photo">
                    </div>
                    <x-button label="Update Profile Photo" variant="primary"></x-button>
                </div>
                <div class="ava-info flex flex-col justify-center gap-5 text-utama ">
                    <h1 class="font-bold">User Tester</h1>
                    <h3>Super Admin</h3>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-5 font-bold">
                <x-input-form label="User Name" name="nama_user">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28.261" height="16.031" viewBox="0 0 28.261 16.031">
                            <path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"/>
                        </svg>
                    </x-slot>
                </x-input-form>
                
                <x-input-form label="NIP" name="nip" />
                
                <x-input-form label="Position type="select" name="jabatan_user">
                    <option selected disabled>Select Position</option>
                    <option value="jabatan" name="jabatan">Jabatan</option>
                    <option value="jabatan" jabatan="jabatan">Jabatan</option>

                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28.261" height="16.031" viewBox="0 0 28.261 16.031">
                            <path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"/>
                        </svg>
                    </x-slot>
                </x-input-form>

                <x-input-form label="Account Level" type="select" name="level_akun">
                    <option selected disabled>Select Account Level</option>
                    <option value="level" name="level">Level Akun</option>
                    <option value="level" name="level">Level Akun</option>

                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28.261" height="16.031" viewBox="0 0 28.261 16.031">
                            <path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"/>
                        </svg>
                    </x-slot>
                </x-input-form>
                
                <x-input-form label="Phone Number" name="phone" />

                <x-input-form label="Password" type="password" name="password" />
            </div>

            <div class="flex justify-between items-center" x-data="{open: false}">
                <x-button href="#" label="< Back" color="text-darkGray"/>
                <x-button label="Save" variant="primary" @click="open = true" />
                <x-modal-success />
            </div>
        </div>
    </div>
    

    <script>
        const eyeHide = document.querySelector('#password + span #eye-hide');
        const eyeShow = document.querySelector('#password + span #eye-show');
    
        eyeHide.addEventListener('click', function(e){
            e.preventDefault();
            this.parentElement.previousElementSibling.type = 'password';
            this.style.display = 'none';
            this.parentElement.children[1].style.display = 'block';
        })
        eyeShow.addEventListener('click', function(e){
            e.preventDefault();
            this.parentElement.previousElementSibling.type = 'text';
            this.style.display = 'none';
            this.parentElement.children[0].style.display = 'block';
        })
    </script>
</x-app-layout>
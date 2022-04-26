<x-auth-layout>
    <div class="w-full h-screen rounded card-auth flex flex-col justify-center items-center">

        {{-- Header --}}
        <div class="w-full h-auto py-2 lg:py-4 flex flex-col justify-center items-center header text-white">
            <img class="w-16 lg:w-24" src="/assets/images/logoUtama.png">
            <h1 class="mt-10 text-xl xl:text-3xl 2xl:text-5xl font-bold">Reset Your Password?</h1>
            <p class="text-center mt-2">Enter the email address associated with your account.</p>
        </div>

        {{-- Forms --}}
        <div class="w-full h-auto px-3 xl:px-5 2xl:px-24 lg:pb-0 pt-5 lg:pt-2 body">
            <form action="/" method="get">
                
                <div class="flex flex-col mt-5 lg:mt-8 lg:mb-3 form-group">
                    <div class="flex justify-center items-center relative input-group w-full text-darkGray">
                        <input type="email" name="email"
                            class="w-full py-4 pr-4 lg:pr-8 pl-14 lg:pl-16 text-sm lg:text-lg font-bold rounded-xl outline-none active form-control"
                            id="" placeholder="Your Email" autocomplete="off">
                        <span class="absolute flex items-center justify-center h-full py-3 px-5 lg:px-6 inset-y-0 left-0">
                            <img class="w-4 lg:w-5" src="/assets/icons/svg/email.svg">
                        </span>
                    </div>
                    <span class="hidden mt-3 pl-2 text-red-600 font-base">
                        Info here !
                    </span>
                </div>
                <div class="flex flex-col items-center justify-center mb-3 gap-6 mt-10 lg:mt-10 lg:mb-3  form-group">
                    <button type="submit" class="text-white flex items-center justify-center shadow-xl w-full lg:w-auto focus:outline-none bg-dark py-3 lg:py-3 xl:px-16 2xl:px-20 rounded-lg font-medium text-sm xl:text-base 2xl:text-lg">Reset Password</button>

                    <a href="/login" class="hover:underline mt-4 hover:font-bold hover:text-black text-white">Login</a>
                </div>

                
                <button class="hidden modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full">Open Modal</button>
                
            </form>

            {{-- alert session info --}}
            @if(session()->has('error'))
                <x-alert variant="error" message="Error Message" />
            @endif

            @if(session()->has('success'))
                <x-alert variant="success" message="Success Message" />
            @endif
        </div>

        <!--Modal-->
        @if(session()->has('success'))
        <div x-data="{ open: true }">
            <div class="modal  fixed w-full h-full top-0 left-0 flex items-center justify-center" x-show="open">
                <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-80"></div>
        
                <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-100 overflow-y-auto">

                    <!-- Add margin if you want to see some of the overlay behind the modal-->
                    <div class="modal-content py-4 text-left px-6">
                        <!--modal title-->
                        <div class="flex justify-between items-center pb-3">
                            <p class="text-2xl font-bold"></p>
                            <div class="modal-close cursor-pointer z-50">
                                <svg @click="open = false" class=" fill-current text-black font-bold" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 18 18">
                                    <path
                                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        {{-- modal header --}}
                        <div class="modal-header w-full flex items-center justify-center py-2">
                            <img class="w-16 lg:w-24" src="/assets/images/logoKedua.png">
                        </div>
                        {{-- modal body --}}
                        <div class="modal-body w-full text-center p-4">
                            <h2 class="text-lg lg:text-2xl font-bold">Password Reset Request Sent !</h2>
                            <p>Open your email account to get the change password link.</p>
                        </div>
                        {{-- modal- foooter --}}
                        <div class="modal-footer w-full flex justify-center py-4">
                            <button type="button" @click="open = false" class="flex focus:outline-none items-center justify-center px-4 p-3 rounded-lg w-full bg-utama text-white hover:bg-utamaHover">Close</button>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>
</x-auth-layout>

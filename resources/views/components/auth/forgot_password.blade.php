@extends('layouts.auth', ['title' => 'Reset Password - SIMLOG'])

@section('content')
<div class="w-full h-screen rounded card-auth flex flex-col justify-center items-center">

    {{-- Header --}}
    <div class="w-full h-auto py-2 lg:py-4 block flex flex-col justify-center items-center header">
        <img class="w-16 lg:w-24" src="/assets/images/simlog-logo-dark.png">
        <h1 class="mt-10 text-xl xl:text-3xl 2xl:text-5xl font-bold">Reset Password ?</h1>
        <p class="text-center mt-2">Enter Your Account Email Correctly.</p>
    </div>

    {{-- Forms --}}
    <div class="w-full h-auto px-3 xl:px-5 2xl:px-24 lg:pb-0 pt-5 lg:pt-2 body">
        <form action="/" method="get">
            
            <div class="flex flex-col mt-5 lg:mt-8 lg:mb-3 form-group">
                <div class="flex justify-center items-center relative input-group w-full">
                    <input type="text" name="email"
                        class="w-full py-4 pr-4 lg:pr-8 pl-14 lg:pl-16 text-sm lg:text-lg font-bold rounded-xl outline-none active form-control"
                        id="" placeholder="Email address..." autocomplete="off">
                    <span class="absolute flex items-center justify-center h-full py-3 px-5 lg:px-6 inset-y-0 left-0">
                        <img class="w-4 lg:w-5" src="/assets/icons/svg/email.svg">
                    </span>
                </div>
                <span class="hidden mt-3 pl-2 text-red-600 font-base">
                    Info here !
                </span>
            </div>
            <div class="flex flex-col items-center justify-center mb-3 gap-6 mt-10 lg:mt-10 lg:mb-3  form-group">
                <button type="submit" class=" btn-primary shadow-md w-52">Reset Password</button>

                <a href="/login" class="text-primary hover:underline mt-4 hover:font-bold hover:text-black">Login</a>
            </div>

            
            <button class="hidden modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full">Open Modal</button>
            
        </form>

        {{-- alert session info --}}
        @if(session()->has('error'))
        <div class="w-full relative flex flex-col space-y-2 items-center justify-center" x-data="{ open: true }">
            <div class="px-7 py-5 flex items-center justify-between w-full max-w-md  rounded-md bg-red-400" x-show="open">
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
        <div class="w-full relative flex flex-col space-y-2 items-center justify-center" x-data="{ open: true }">
            <div class="px-7 py-5 flex items-center justify-between w-full max-w-md  rounded-md bg-green-200" x-show="open">
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
                        <img class="w-16 lg:w-24" src="/assets/images/simlog-logo-dark.png">
                    </div>
                    {{-- modal body --}}
                    <div class="modal-body w-full text-center p-4">
                        <h2 class="text-lg lg:text-2xl font-bold">Password Reset Request Sent !</h2>
                        <p>Open your email account to get the change password link.</p>
                    </div>
                    {{-- modal- foooter --}}
                    <div class="modal-footer w-full flex justify-center py-4">
                        <button type="button" @click="open = false" class="flex focus:outline-none items-center justify-center px-4 p-3 rounded-lg w-full bg-gray-900 text-white hover:bg-gray-700">Close</button>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    @endif

</div>
@endsection

@push('active.teams')
active
@endpush

@push('before_styles')

@endpush

@push('after_styles')

@endpush

@push('before_scripts')
<script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
    
     
  </script>
@endpush

@push('after_scripts')

@endpush

@push('before_scripts_utility')

@endpush

@push('after_scripts_utility')

@endpush

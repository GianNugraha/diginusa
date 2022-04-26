<x-auth-layout>
    <div class="w-full h-full rounded card-auth text-white">

        {{-- Header --}}
        <div class="w-full h-full py-2 lg:py-4 flex flex-col justify-center items-center header">
            <img class="w-16 lg:w-24" src="{{url('assets/images/logoUtama.png')}}">

            <img src="{{url('assets/images/500.png')}}" class="" alt="">
            <h1 class="text-4xl lg:text-6xl">Internal Server 
                Error</h1>
            <p class="text-lg text-center font-medium mb-0 lg:mb-20 mt-5">All of our server are busy right now </p>
            <a href="/" class="flex text-white items-center justify-center shadow-xl w-full lg:w-auto focus:outline-none bg-dark py-3 lg:py-3 xl:px-16 2xl:px-20 rounded-lg font-medium text-sm xl:text-base 2xl:text-lg">Back to Home</a>
        </div>
    </div>
</x-auth-layout>
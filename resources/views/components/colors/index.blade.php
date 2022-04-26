@extends("layouts.main", ['title' => 'Colors'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5">

    <div class="bg-white rounded-xl flex-col p-5">
        <h3>Colors</h3>
        <div class="bg-danger flex w-full items-center justify-center p-4 space-x-3 ">
            <span class="text-light text-lg font-normal">Background: bg-danger | color: text-danger</span>
        </div>
        <div class="bg-success flex w-full items-center justify-center p-4 space-x-3 ">
            <span class="text-light text-lg font-normal">Background: bg-success | color: text-success</span>
        </div>
        <div class="bg-warning flex w-full items-center justify-center p-4 space-x-3 ">
            <span class="text-light text-lg font-normal">Background: bg-warning | color: text-warning</span>
        </div>
        <div class="bg-primary flex w-full items-center justify-center p-4 space-x-3 ">
            <span class="text-light text-lg font-normal">Background: bg-primary | color: text-primary</span>
        </div>
        <div class="bg-secondary flex w-full items-center justify-center p-4 space-x-3 ">
            <span class="text-light text-lg font-normal">Background: bg-secondary | color: text-secondary</span>
        </div>
        <div class="bg-dark flex w-full items-center justify-center p-4 space-x-3 ">
            <span class="text-light text-lg font-normal">Background: bg-dark | color: text-dark</span>
        </div>
        <div class="bg-disabled flex w-full items-center justify-center p-4 space-x-3 ">
            <span class="text-light text-lg font-normal">Background: bg-disabled | color: text-disabled</span>
        </div>
        <div class="bg-light flex w-full items-center justify-center p-4 space-x-3 ">
            <span class="text-dark text-lg font-normal">Background: bg-light | color: text-light</span>
        </div>

    </div>

</section>

@endsection

@push('bofore_style')
@endpush
@push('after_style')
@endpush
@push('bofore_scripts')
@endpush
@push('after_scripts')
@endpush
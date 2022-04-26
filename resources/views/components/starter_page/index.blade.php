@extends("layouts.main", ['title' => 'Starter Page'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5">

    <div class=" bg-white rounded-xl p-5">
        <div class="flex flex-col space-y-3">Starter Page</div>
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
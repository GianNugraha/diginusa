@extends("layouts.main", ['title' => 'Buttons'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">

    <div class="bg-white w-full flex-col space-y-10 rounded-xl p-5">

        {{-- button solid --}}
        <div class="flex flex-col space-y-2">
            <h3>Button Small Size</h3>
            <div class="w-full flex flex-wrap items-center gap-3">
                <a href="#" class="btn-sm-primary">Button Primary</a>
                <a href="#" class="btn-sm-secondary">Button Secondary</a>
                <a href="#" class="btn-sm-success">Button Success</a>
                <a href="#" class="btn-sm-warning">Button Warning</a>
                <a href="#" class="btn-sm-danger">Button Danger</a>
                <a href="#" class="btn-sm-dark">Button Dark</a>
                <a href="#" class="btn-sm-disabled">Button Disabled</a>
                <a href="#" class="btn-sm-light">Button Light</a>
            </div>
        </div>
        <div class="flex flex-col space-y-2">
            <h3>Button Normal Size</h3>
            <div class="w-full flex flex-wrap items-center gap-3">
                <a href="#" class="btn-primary">Button Primary</a>
                <a href="#" class="btn-secondary">Button Secondary</a>
                <a href="#" class="btn-success">Button Success</a>
                <a href="#" class="btn-warning">Button Warning</a>
                <a href="#" class="btn-danger">Button Danger</a>
                <a href="#" class="btn-dark">Button Dark</a>
                <a href="#" class="btn-disabled">Button Disabled</a>
                <a href="#" class="btn-light">Button Light</a>
            </div>
        </div>
        <div class="flex flex-col space-y-2">
            <h3>Button Large Size</h3>
            <div class="w-full flex flex-wrap items-center gap-3">
                <a href="#" class="btn-lg-primary">Button Primary</a>
                <a href="#" class="btn-lg-secondary">Button Secondary</a>
                <a href="#" class="btn-lg-success">Button Success</a>
                <a href="#" class="btn-lg-warning">Button Warning</a>
                <a href="#" class="btn-lg-danger">Button Danger</a>
                <a href="#" class="btn-lg-dark">Button Dark</a>
                <a href="#" class="btn-lg-disabled">Button Disabled</a>
                <a href="#" class="btn-lg-light">Button Light</a>
            </div>
        </div>

        {{-- button outline --}}
        <div class="flex flex-col space-y-2">
            <h3>Button Outline Small Size</h3>
            <div class="w-full flex flex-wrap items-center gap-3">
                <a href="#" class="btn-outline-sm-primary">Button Primary</a>
                <a href="#" class="btn-outline-sm-secondary">Button Secondary</a>
                <a href="#" class="btn-outline-sm-success">Button Success</a>
                <a href="#" class="btn-outline-sm-warning">Button Warning</a>
                <a href="#" class="btn-outline-sm-danger">Button Danger</a>
                <a href="#" class="btn-outline-sm-dark">Button Dark</a>
                <a href="#" class="btn-outline-sm-disabled">Button Disabled</a>
            </div>
        </div>
        <div class="flex flex-col space-y-2">
            <h3>Button Outline Normal Size</h3>
            <div class="w-full flex flex-wrap items-center gap-3">
                <a href="#" class="btn-outline-primary">Button Primary</a>
                <a href="#" class="btn-outline-secondary">Button Secondary</a>
                <a href="#" class="btn-outline-success">Button Success</a>
                <a href="#" class="btn-outline-warning">Button Warning</a>
                <a href="#" class="btn-outline-danger">Button Danger</a>
                <a href="#" class="btn-outline-dark">Button Dark</a>
                <a href="#" class="btn-outline-disabled">Button Disabled</a>
            </div>
        </div>
        <div class="flex flex-col space-y-2">
            <h3>Button Outline Large Size</h3>
            <div class="w-full flex flex-wrap items-center gap-3">
                <a href="#" class="btn-outline-lg-primary">Button Primary</a>
                <a href="#" class="btn-outline-lg-secondary">Button Secondary</a>
                <a href="#" class="btn-outline-lg-success">Button Success</a>
                <a href="#" class="btn-outline-lg-warning">Button Warning</a>
                <a href="#" class="btn-outline-lg-danger">Button Danger</a>
                <a href="#" class="btn-outline-lg-dark">Button Dark</a>
                <a href="#" class="btn-outline-lg-disabled">Button Disabled</a>
            </div>
        </div>

        {{-- button cap --}}
        <div class="flex flex-col space-y-2">
            <h3>Button Cap Small Size</h3>
            <div class="w-full flex flex-wrap items-center gap-3">

                <a href="#" class="btn-sm-cap-primary">
                    <span class="label-button">Button Primary</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-sm-cap-secondary">
                    <span class="label-button">Button secondary</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-sm-cap-success">
                    <span class="label-button">Button success</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-sm-cap-warning">
                    <span class="label-button">Button warning</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-sm-cap-danger">
                    <span class="label-button">Button danger</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-sm-cap-dark">
                    <span class="label-button">Button dark</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>

            </div>
        </div>
        <div class="flex flex-col space-y-2">
            <h3>Button Cap Normal Size</h3>
            <div class="w-full flex flex-wrap items-center gap-3">

                <a href="#" class="btn-cap-primary">
                    <span class="label-button">Button Primary</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-cap-secondary">
                    <span class="label-button">Button secondary</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-cap-success">
                    <span class="label-button">Button success</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-cap-warning">
                    <span class="label-button">Button warning</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-cap-danger">
                    <span class="label-button">Button danger</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-cap-dark">
                    <span class="label-button">Button dark</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>

            </div>
        </div>
        <div class="flex flex-col space-y-2">
            <h3>Button Cap Large Size</h3>
            <div class="w-full flex flex-wrap items-center gap-3">

                <a href="#" class="btn-lg-cap-primary">
                    <span class="label-button">Button Primary</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-lg-cap-secondary">
                    <span class="label-button">Button secondary</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-lg-cap-success">
                    <span class="label-button">Button success</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-lg-cap-warning">
                    <span class="label-button">Button warning</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-lg-cap-danger">
                    <span class="label-button">Button danger</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
                <a href="#" class="btn-lg-cap-dark">
                    <span class="label-button">Button dark</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>

            </div>
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
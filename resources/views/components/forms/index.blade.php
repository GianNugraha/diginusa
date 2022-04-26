@extends("layouts.main", ['title' => 'Forms'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">

    <div class="flex flex-col bg-white rounded-xl p-5">
        <h3 class="mb-2">Form 1 Column</h3>
        <form action="" class="flex flex-wrap space-y-5">
            <div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Label</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
                </div>
            </div>
            <div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Label</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
                </div>
            </div>
            <div class="flex items-center w-full justify-end">
                <button type="submit" class="btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <div class="flex flex-col bg-white rounded-xl p-5">
        <h3 class="mb-2">Form 2 Column</h3>
        <form action="" class="flex flex-wrap space-y-5">
            <div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Label</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
                </div>
                <div class="form-group">
                    <label class="label-form-dark">Label</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
                </div>
            </div>
            <div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Label</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
                </div>
                <div class="form-group">
                    <label class="label-form-dark">Label</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
                </div>
            </div>
            <div class="flex items-center w-full justify-end">
                <button type="submit" class="btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <div class="flex flex-col bg-white rounded-xl p-5">
        <h3 class="mb-2">Form 3 Column</h3>
        <form action="" class="flex flex-wrap space-y-5">
            <div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Label</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
                </div>
                <div class="form-group">
                    <label class="label-form-dark">Label</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
                </div>
                <div class="form-group">
                    <label class="label-form-dark">Label</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
                </div>
            </div>
            <div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Label</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
                </div>
                <div class="form-group">
                    <label class="label-form-dark">Label</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
                </div>
                <div class="form-group">
                    <label class="label-form-dark">Label</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
                </div>
            </div>
            <div class="flex items-center w-full justify-end">
                <button type="submit" class="btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <div class="flex flex-col bg-white rounded-xl p-5">
        <h3 class="mb-2">Form Example</h3>
        <form action="" class="flex flex-wrap space-y-5">
            <div class="flex items-center w-full space-x-5">
                <div class="form-group flex items-center space-x-6">
                    <div class="flex items-center space-x-2">
                        <input type="radio"  class="form-control-danger" name="" id="radio">
                        <label for="radio">raio</label>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="form-check form-check-secondary">
                            <input type="checkbox" id="chckbx" value="" name="menu[]" class="" >
                            <svg class="icon-chck hidden fill-current icon-secondary" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        </div>
                        <label for="chckbx">checkbox</label>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="form-check form-check-primary">
                            <input type="checkbox" id="chckbx" value="" name="menu[]" class="" >
                            <svg class="icon-chck hidden fill-current icon-primary" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        </div>
                        <label for="chckbx">checkbox</label>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="form-check form-check-danger">
                            <input type="checkbox" id="chckbx" value="" name="menu[]" class="" >
                            <svg class="icon-chck hidden fill-current icon-danger" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        </div>
                        <label for="chckbx">checkbox</label>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="form-check form-check-success">
                            <input type="checkbox" id="chckbx" value="" name="menu[]" class="" >
                            <svg class="icon-chck hidden fill-current icon-success" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        </div>
                        <label for="chckbx">checkbox</label>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="form-check form-check-warning">
                            <input type="checkbox" id="chckbx" value="" name="menu[]" class="" >
                            <svg class="icon-chck hidden fill-current icon-warning" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        </div>
                        <label for="chckbx">checkbox</label>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="form-check form-check-disabled">
                            <input type="checkbox" id="chckbx" value="" name="menu[]" class="" >
                            <svg class="icon-chck hidden fill-current icon-disabled" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        </div>
                        <label for="chckbx">checkbox</label>
                    </div>
                </div>
            </div>
            <div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Select</label>
                    <select class="form-control-primary">
                        <option value="#" selected> -- Select Form --</option>
                        <option value="#">Item 1</option>
                        <option value="#">Item 2</option>
                        <option value="#">Item 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label-form-dark">Disabled</label>
                    <input type="text" class="form-control-disabled" placeholder="Disabled" disabled>
                </div>
                <div class="form-group">
                    <label class="label-form-dark">Label</label>
                    <input type="date" class="form-control-secondary" placeholder="Text">
                </div>
            </div>
            <div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Datetime Local</label>
                    <input type="datetime-local" class="form-control-secondary" placeholder="Text">
                </div>
                <div class="form-group">
                    <label class="label-form-dark">File</label>
                    <input type="file" class="form-control-secondary" placeholder="File">
                </div>
                <div class="form-group">
                    <label class="label-form-dark">Password</label>
                    <input type="password" class="form-control-secondary" placeholder="Password">
                </div>
            </div>
            <div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Email</label>
                    <input type="email" class="form-control-secondary" placeholder="Email">
                </div>
                <div class="form-group">
                    <label class="label-form-dark">File Append</label>
                    <div class="form-group-append">
                        <input type="file" class="form-control-secondary input-form h-full" placeholder="Email">
                        <span class="append-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                              </svg>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="label-form-dark">Append Form</label>
                    <div class="form-group-append">
                        <input type="date" class="form-control-secondary input-form h-full" placeholder="Email">
                        <span class="append-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                              </svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Select</label>
                    <div class="form-group-append">
                        <select class="form-control-primary input-form h-full">
                            <option value="#" selected> -- Select Form --</option>
                            <option value="#">Item 1</option>
                            <option value="#">Item 2</option>
                            <option value="#">Item 3</option>
                        </select>
                        <span class="append-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28.261 16.031">
                                <path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"/>
                              </svg>
                              
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="label-form-dark">Input Number</label>
                    <input type="number" class="form-control-secondary input-form h-full" placeholder="0" min="0">
                </div>
            </div>
            <div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Select</label>
                    <div class="form-group-append">
                        <select class="form-control-primary input-form h-full">
                            <option value="#" selected> -- Select Form --</option>
                            <option value="#">Item 1</option>
                            <option value="#">Item 2</option>
                            <option value="#">Item 3</option>
                        </select>
                        <span class="append-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28.261 16.031">
                                <path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"/>
                              </svg>
                              
                        </span>
                    </div>
                </div>

                <div class="relative form-group">
                    <label class="label-form-dark">Select2 Library</label>
                    <select name="" class="select2 mt-1 appearance-none px-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md h-10 border border-blue-400">
                        <option value="#" selected> -- Select Form --</option>
                        <option value="#">Item 1</option>
                        <option value="#">Item 2</option>
                        <option value="#">Item 3</option>
                    </select>
                    <img class="absolute right-0 top-0 w-10" src="{{ asset('assets/media/icon-arrow.svg') }}" alt="">
                </div>
            </div>
            <div class="flex items-center w-full space-x-5">
                <div class="relative form-group">
                    <label class="label-form-dark">Select2 Library</label>
                    <div class="form-group-append">
                        <select name="" class="select2 mt-1 appearance-none px-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md h-10 border border-blue-400">
                            <option value="#" selected> -- Select Form --</option>
                            <optgroup label="Kategori 1">
                                <option value="#">Item 1</option>
                                <option value="#">Item 2</option>
                                <option value="#">Item 3</option>
                            </optgroup>
                            <optgroup label="Kategori 2">
                                <option value="#">Item 1</option>
                                <option value="#">Item 2</option>
                                <option value="#">Item 3</option>
                            </optgroup>
                        </select>
                        <span class="append-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28.261 16.031">
                                <path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Image</label>
                    <div class="form-preview-image">
                        <input type="file" id="uploadFile" multiple accept="image/*" class="updoc form-control-secondary input-image-prefiew h-full" placeholder="file">

                        <div class="flex flex-row w-full items-center justify-center mb-3 rounded-md space-x-3 p-2" id="imgPrev"></div>
                        <div class="flex flex-col justify-center items-center space-y-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="87.269" height="55.755" viewBox="0 0 87.269 55.755">
                                <path id="Path_343" data-name="Path 343" d="M71.315,23.464c0-.232.039-.465.039-.7a22.485,22.485,0,0,0-42.855-9.8,11.567,11.567,0,0,0-16.675,8.518,17.625,17.625,0,0,0,5.61,34.266H37.4V40.268H28.012l15.623-16.2L59.257,40.248H49.868V55.736H71.354a16.137,16.137,0,0,0-.039-32.272Z" fill="#43425d" opacity="0.1"/>
                              </svg>
                              <h5 class="text-gray-600">Upload File Here</h5>
                              <button class="btn-sm-primary focus:outline-none" onclick="$('#uploadFile').click();" type="button">Chose File</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center w-full justify-end">
                <button type="submit" class="btn-primary">Submit</button>
            </div>
        </form>
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
<x-app-layout>
    <!-- component -->
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl text-gray-600">Create Printer</h2>
                <p class="text-gray-500 mb-6">Form is mobile responsive. Give it a try.</p>

                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Printer Details</p>
                            <p>Please fill out all the fields.</p>
                        </div>

                        <div class="lg:col-span-2 mb-3">

                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('order_data.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="customer" class="form-label">Teljes név</label>
                                                <input type="text" name="customer" id="customer" class="form-control @if($errors->has('customer')) is-invalid @endif" value="{{old('customer')}}">
                                                {{--<!-- <small class="text-info d-none" id="responseTextHolder">Suggestion: <span id="responseText"></span></small> -->--}}
                                                @error('customer')
                                                    <small class="text-danger">*{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="born_name" class="form-label">Születési név</label>
                                                <input type="text" name="born_name" id="born_name" class="form-control @if($errors->has('born_name')) is-invalid @endif" value="{{old('born_name')}}">
                                                {{--<!-- <small class="text-info d-none" id="responseTextHolder">Suggestion: <span id="responseText"></span></small> -->--}}
                                                @error('born_name')
                                                    <small class="text-danger">*{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="customer_birth_day" class="form-label">Születési dátum</label>
                                                <input type="datetime-local" name="customer_birth_day" id="customer_birth_day" class="form-control @if($errors->has('customer_birth_day')) is-invalid @endif" value="{{old('customer_birth_day')}}">
                                                @error('customer_birth_day')
                                                    <small class="text-danger">*{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="id_card_expire_date" class="form-label">Személyi igazolvány lejárati dátum</label>
                                                <input type="datetime-local" name="id_card_expire_date" id="id_card_expire_date" class="form-control @if($errors->has('id_card_expire_date')) is-invalid @endif" value="{{old('id_card_expire_date')}}">
                                                @error('id_card_expire_date')
                                                    <small class="text-danger">*{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="id_card_exhibition_place" class="form-label">Kiállítási szerv</label>
                                                <input type="text" name="id_card_exhibition_place" id="id_card_exhibition_place" class="form-control @if($errors->has('id_card_exhibition_place')) is-invalid @endif" value="{{old('born_name')}}">
                                                {{--<!-- <small class="text-info d-none" id="responseTextHolder">Suggestion: <span id="responseText"></span></small> -->--}}
                                                @error('id_card_exhibition_place')
                                                    <small class="text-danger">*{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Lakcím</label>
                                                <input type="text" name="address" id="address"
                                                    class="form-control @if($errors->has('address')) is-invalid @endif" value="{{old('address')}}">
                                                @error('address')
                                                    <small class="text-danger">*{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="longDescription" class="form-label">Long Description</label>
                                                <input type="text" name="longDescription" id="longDescription" class="form-control @if($errors->has('longDescription')) is-invalid @endif" value="{{old('longDescription')}}">
                                                @error('longDescription')
                                                    <small class="text-danger">*{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-5">
                                                <label for="thumbnail" class="form-label">Event Image</label>
                                                <input type="file" name="thumbnail" id="thumbnail" class="form-control @if($errors->has('thumbnail')) is-invalid @endif">
                                                @error('thumbnail')
                                                    <small class="text-danger">*{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 text-center">
                                                <button type="submit" class="btn btn-danger w-75">Create</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <div class="text-gray-600 md:col-span-5">

                                <div class="relative mb-6">
                                    <label for="labels-range-input" >Drumm Unit <span id="drummchange"></span></label>
                                    <input id="labels-range-input" onchange="drummchange(this)" oninput="drummchange(this)" type="range" value="0" min="0" max="100" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">0%</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/2 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">50%</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">100%</span>
                                </div>
                            </div>
                            <div class="text-gray-600 md:col-span-5">
                                <div class="relative mb-6">
                                    <label for="labels-range-input" >Tonner <span id="donerchange"></span></label>
                                    <input id="labels-range-input" onchange="donerchange(this)" oninput="donerchange(this)" type="range" value="0" min="0" max="100" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">0%</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/2 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">50%</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">100%</span>
                                </div>
                            </div>
                            <div class="md:col-span-5">
                                <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover photo</label>
                                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                        </svg>
                                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                            <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-5">
                                <label for="docs">Documentation</label>
                                <textarea type="text" id="docs" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder=""></textarea>
                            </div>

                            <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
<script>
     function donerchange(element){
        var val = element.value;
        document.getElementById('donerchange').innerHTML = val+"%";
    }
     function drummchange(element){
         var val = element.value;
         document.getElementById('drummchange').innerHTML = val+"%";
     }
</script>
</x-app-layout>

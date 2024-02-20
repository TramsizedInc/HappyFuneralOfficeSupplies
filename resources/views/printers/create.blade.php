<x-app-layout>
    <!-- component -->
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <form action="{{ route('printers.store') }}" method="POST" enctype="multipart/form-data" class="container max-w-screen-lg mx-auto">
            @csrf
            @method('POST')
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
                                <div class="md:col-span-5 mb-3">
                                    <select name="office_id" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" data-te-select-init>
                                        @foreach(\App\Models\Office::all() as $office)
                                            <option value="{{$office->id}}">{{$office->zip_code}} {{$office->city}}, {{$office->street}} {{$office->house_number}}.</option>
                                        @endforeach
                                    </select>
                                    <label data-te-select-label-ref for="brand">Brand</label>
                                </div>
                                <div class="md:col-span-5 mb-3">
                                    <select name="brand" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" data-te-select-init>
                                        @foreach(\App\Models\Brand::all() as $brand)
                                            <option value="{{$brand->name}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                    <label data-te-select-label-ref for="brand">Brand</label>
                                </div>
                                <div class="md:col-span-5 mb-3">

                                    <select name="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" data-te-select-init>
                                        @foreach(\App\Models\PrinterType::all() as $printer)
                                            <option value="{{$printer->name}}">{{$printer->name}}</option>
                                        @endforeach
                                    </select>
                                    <label data-te-select-label-ref for="type">Type</label>
                                </div>




                                <div class="text-gray-600 md:col-span-5">

                                <div class="relative mb-6">
                                    <label for="labels-range-input" >Drumm Unit <span id="drummchange"></span></label>
                                    <input name="drumm_percent" id="labels-range-input" onchange="drummchange(this)" oninput="drummchange(this)" type="range" value="0" min="0" max="100" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">0%</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/2 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">50%</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">100%</span>
                                </div>
                            </div>
                            <div class="text-gray-600 md:col-span-5">
                                <div class="relative mb-6">
                                    <label for="labels-range-input" >Toner <span id="donerchange"></span></label>
                                    <input name="toner_percent" id="labels-range-input" onchange="donerchange(this)" oninput="donerchange(this)" type="range" value="0" min="0" max="100" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">0%</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/2 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">50%</span>

                                </div><span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">100%</span>
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
                                                <input id="file-upload" name="picture" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-5">
                                <label for="docs">Documentation</label>
                                <textarea name="documentation" type="text" id="docs" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder=""></textarea>
                            </div>

                            <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

</form>
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

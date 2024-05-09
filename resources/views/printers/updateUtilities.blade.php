<x-app-layout>

    <div class="bg-white">
        <div class="pt-6">
            <nav aria-label="Breadcrumb">
                <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="{{route('dashboard')}}" class="mr-2 text-sm font-medium text-gray-900">{{\App\Models\Office::all()->find($printer->office_id)->office_name}}</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-2 text-sm font-medium text-gray-900">Nyomtatók</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>

                    <li class="text-sm">
                        <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">{{$printer->type}}</a>
                    </li>
                </ol>
            </nav>


            <!-- Product info -->
            <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Le Írás</h1>
                </div>

                <!-- Options -->
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <h2 class="sr-only">Termék Információ</h2>
                    <p class="text-3xl tracking-tight text-vgray-900">{{$printer->type}}</p>
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="{{asset('storage/picture/'.$printer->picture)}}" alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
                    </div>
                    <form action="{{route('printers.update',$printer)}}" method="POST" enctype="multipart/form-data" class="mt-10">
                        @csrf
                        @method('PUT')
                        <div>
                            <div class="text-gray-600 md:col-span-5">
                                <div class="relative mb-6">
                                    <label for="labels-range-input" >Dobb Egység <span id="drummchange">{{$printer->drumm_percent}}%</span></label>
                                    <input name="drumm_percent" id="labels-range-input" onchange="drummchange(this)" oninput="drummchange(this)" type="range" value="{{$printer->drumm_percent}}" min="0" max="100" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">0%</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/2 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">50%</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">100%</span>
                                </div>
                            </div>
                            <div class="text-gray-600 md:col-span-5">
                                <div class="relative mb-6">
                                    <label for="labels-range-input" >Toner Egység<span id="donerchange">{{$printer->toner_percent}}%</span></label>
                                    <input name="toner_percent" id="labels-range-input" onchange="donerchange(this)" oninput="donerchange(this)" type="range" value="{{$printer->toner_percent}}" min="0" max="100" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">0%</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/2 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">50%</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">100%</span>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Frissités</button>
                    </form>
                </div>

                <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                    <!-- Description and details -->
                    <div>
                        <div class="space-y-6">
                            <p class="text-base text-gray-900">{{$printer->documentation}}</p>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h3 class="text-sm font-medium text-gray-900">Le Írás</h3>

                        <div class="m-5">
                            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                <li class="text-gray-400"><span class="text-gray-600">{{$printer->brand}}</span></li>
                                <li class="text-gray-400"><span class="text-gray-600">{{$printer->type}}</span></li>
                                <li class="text-gray-400"><span class="text-gray-600">Last Update: {{$printer->updated_at}}</span></li>
                            </ul>
                        </div>
                    </div>
                    <img src="{{asset('storage/panda.png')}}">

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

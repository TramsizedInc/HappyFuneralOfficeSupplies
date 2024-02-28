<x-app-layout>


    <!-- component -->
    <div class="min-h-screen p-6 flex items-center justify-center">
        <form action="{{ route('checkModels.store') }}" method="POST" enctype="multipart/form-data" class="container max-w-screen-lg mx-auto">
            @csrf
            @method('POST')
            <div>
                <h2 class="font-semibold text-xl text-gray-600">Csekk létrehozás</h2>
                <p class="text-gray-500 mb-6">Az oldal reszponzív, próbáld ki!</p>
                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">

                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Csekk Adatok</p>
                            <p>Töltsd ki az összes mezőt!</p>
                            <img src="{{asset('storage/panda.png')}}">
                        </div>

                        <div class="lg:col-span-2 mb-3">

                            <div class="grid gap-6 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">

                                <div class="sm:col-span-6">
                                    <label for="office_id" class="block text-sm font-medium leading-6 text-gray-900">Iroda</label>
                                    <div class="mt-2">
                                        <select id="office_id" name="office_id" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" data-te-select-init>
                                            @foreach(\App\Models\Office::all() as $office)
                                                <option value="{{$office->id}}">{{$office->zip_code}} {{$office->city}}, {{$office->street}} {{$office->house_number}}.</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <div class="sm:col-span-6">
                                    <label for="office_id" class="block text-sm font-medium leading-6 text-gray-900">Csekk típusok</label>
                                    <div class="mt-2">
                                        <select id="office_id" name="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" data-te-select-init>
                                            @foreach(\App\Models\CheckType::all() as $checkType)
                                                <option value="{{$checkType->name}}">{{$checkType->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>


                                <div class="sm:col-span-3">
                                    <label class="block text-sm font-medium leading-6 text-gray-900" for="exhibition_date"
                                    >Kiállítási dátum</label>
                                    <div class="mt-2">
                                        <input datetimepicker id="exhibition_date" name="exhibition_date" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none date-flatpickr" type="text" placeholder="Válassz időpontot" />

                                    </div>

                                </div>
                                <div class="sm:col-span-3">

                                    <label class="block text-sm font-medium leading-6 text-gray-900" for="expire_date"
                                    >Lejárati dátum</label>
                                    <div class="mt-2">
                                        <input datetimepicker id="expire_date" name="expire_date" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none date-flatpickr" type="text" placeholder="Válassz időpontot" />
                                    </div>

                                </div>

                                <div class="sm:col-span-3">
                                    <label for="hs-input-with-leading-and-trailing-icon" class="block text-sm font-medium mb-3 dark:text-white">Befizetésre váró összeg</label>
                                    <div class="relative">
                                        <input name="amount_to_be_paid" type="text" id="hs-input-with-leading-and-trailing-icon"  class="px-4 ps-9 pe-16 block w-full border-gray-300 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="0.00">
                                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3">
                                                <span class="text-gray-500">
                                                    <svg class="h-5 w-5 text-gray-400"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="7" y="9" width="14" height="10" rx="2" />  <circle cx="14" cy="14" r="2" />  <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" /></svg>
                                                </span>
                                        </div>
                                        <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none z-20 pe-4">
                                            <span class="text-gray-500">FT</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="customer_code" class="block text-sm font-medium leading-6 text-gray-900">Ügyfél kód</label>
                                    <div class="mt-2">
                                        <input type="text" name="customer_code" id="customer_code" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="street" class="block text-sm font-medium leading-6 text-gray-900">Utca név</label>
                                    <div class="mt-2">
                                        <input type="text" name="street_name" id="street" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="house_number" class="block text-sm font-medium leading-6 text-gray-900">Irányítószám</label>
                                    <div class="mt-2">
                                        <input type="text" name="zip_code" id="house_number" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="hs-input-with-leading-and-trailing-icon" class="block text-sm font-medium mb-3 dark:text-white">Összeg használva</label>
                                    <div class="relative">
                                        <input name="amount_used" type="text" id="hs-input-with-leading-and-trailing-icon"  class="px-4 ps-9 pe-16 block w-full border-gray-300 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="0.00">
                                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3">
                                                <span class="text-gray-500">
                                                    <svg class="h-5 w-5 text-gray-400"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="7" y="9" width="14" height="10" rx="2" />  <circle cx="14" cy="14" r="2" />  <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" /></svg>
                                                </span>
                                        </div>
                                        <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none z-20 pe-4">
                                            <span class="text-gray-500">FT</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label class="block text-sm font-medium leading-6 text-gray-900" for="yearly_check_date"
                                    >Évi csekk dátum</label>
                                    <div class="mt-2">
                                        <input datetimepicker id="yearly_check_date" name="yearly_check_date" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none date-flatpickr" type="text" placeholder="Válassz időpontot" />
                                    </div>
                                </div>

                                <div class="md:col-span-6 text-right">
                                    <div class="inline-flex items-end">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Kész</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

</form>
        </div>


</x-app-layout>

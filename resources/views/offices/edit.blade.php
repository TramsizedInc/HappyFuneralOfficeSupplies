@extends('layouts.app')

@section('content')
    <!-- component -->
    <div class="min-h-screen p-6 flex items-center justify-center">
        <form action="{{ route('offices.update',$office) }}" method="POST" enctype="multipart/form-data" class="container max-w-screen-lg mx-auto">
            @csrf
            @method('PUT')
            <div>
                <h2 class="font-semibold text-xl text-gray-600">Iroda módosítása</h2>
                <p class="text-gray-500 mb-6">Az oldal reszponzív, próbáld ki!</p>
                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">

                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Iroda Adatok</p>
                            <p>Töltsd ki az összes mezőt!</p>
                            <img src="{{asset('storage/panda.png')}}">
                        </div>

                        <div class="lg:col-span-2 mb-3">

                            <div class="grid gap-6 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">

                                <div class="sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Iroda név</label>
                                    <div class="mt-2">
                                        <input type="text" name="office_name" value="{{$office->office_name}}" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Iroda vezető</label>
                                    <div class="mt-2">
                                        <input type="text" name="office_manager" value="{{$office->office_manager}}" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="zip_code" class="block text-sm font-medium leading-6 text-gray-900">Irányítószám</label>
                                    <div class="mt-2">
                                        <input type="text" name="zip_code" id="zip_code" value="{{$office->zip_code}}" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Város</label>
                                    <div class="mt-2">
                                        <input type="text" name="city" id="city" autocomplete="given-name" value="{{$office->city}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="street" class="block text-sm font-medium leading-6 text-gray-900">Utca név</label>
                                    <div class="mt-2">
                                        <input type="text" name="street" id="street" value="{{$office->street}}" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="house_number" class="block text-sm font-medium leading-6 text-gray-900">Ház szám</label>
                                    <div class="mt-2">
                                        <input type="text" name="house_number" id="house_number" value="{{$office->house_number}}" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="number_of_workers" class="block text-sm font-medium leading-6 text-gray-900">Dolgozók száma</label>
                                    <div class="mt-2">
                                        <input type="number" name="number_of_workers" value="{{$office->number_of_workers}}" id="number_of_workers" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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


@endsection

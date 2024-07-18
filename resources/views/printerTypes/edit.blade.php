<!-- component -->
<div class="min-h-screen p-6 flex items-center justify-center">
    <form action="{{ route('printerTypes.update',$printerType) }}" method="POST" enctype="multipart/form-data" class="container max-w-screen-lg mx-auto">
        @csrf
        @method('PUT')
        <div>
            <h2 class="font-semibold text-xl text-gray-600">Nyomtató Típus modosítása</h2>
            <p class="text-gray-500 mb-6">Az oldal reszponzív, próbáld ki!</p>
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">

                    <div class="text-gray-600">
                        <p class="font-medium text-lg">Nyomtató Típus Adatok</p>
                        <p>Töltsd ki az összes mezőt!</p>
                        <img src="{{asset('storage/panda.png')}}">
                    </div>

                    <div class="lg:col-span-2 mb-3">

                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                            <div class="md:col-span-5">
                                <label for="docs">Nyomtató típus</label>
                                <input type="text" name="name" id="docs" value="{{$printerType->name}}" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Nyomtató típus">
                            </div>

                            <div class="md:col-span-5 text-right">
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

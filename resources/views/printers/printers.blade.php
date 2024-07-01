<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="grid grid-cols-4 py-3 px-4">
        <div class="mr-3 relative max-w-xs">
            <label class="sr-only">Search</label>
            <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search" class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Search for items">
            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                <svg class="h-4 w-4 text-gray-400" xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            </div>
        </div>

    </div>

    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class=" border rounded-sm bg-white divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">

                    <div class="overflow-hidden">
                        <table class="table-auto min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Márka</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Típus</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Kép</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Utoljára Modósitva</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Toner Százalék</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Dobb Egység Százalék</th>
                                <th scope="col" colspan="3" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach(\App\Models\Printer::all() as $printer)
                                @if($printer->office()->value('id') == \Illuminate\Support\Facades\Auth::user()->office_id)

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{$printer->brand}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$printer->type}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            <img class="h-10 max-w-10" src="{{asset('storage/picture/'.$printer->picture)}}" alt="image description">
                                        </td>
                                        <td class="px-6 py-4 text-justify text-sm text-gray-800 dark:text-gray-200">{{$printer->updated_at}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$printer->toner_percent}}%</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$printer->drumm_percent}}%</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <form action="{{route('printers.updateUtilities',$printer)}}" method="GET">
                                                @csrf
                                                <button type="submit" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Modósitás</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="py-1 px-4">
                        <nav class="flex justify-center space-x-1">
                            <button type="button" class="p-2.5 inline-flex items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Elöző</span>
                            </button>
                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10" aria-current="page">1</button>
                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10">2</button>
                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10">3</button>
                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10" disabled>...</button>
                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10">8</button>
                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10">9</button>
                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10">10</button>
                            <button type="button" class="p-2.5 inline-flex items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                <span class="sr-only">Következő</span>
                                <span aria-hidden="true">»</span>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div><x-app-layout>
        <x-slot name="header">
            <h2 class="fw-semibold fs-4 text-dark-800 text-light-200">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <div class="row py-3 px-4">
            <div class="col-md-3 mb-3">
                <label class="visually-hidden">Search</label>
                <div class="input-group">
                    <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search" class="form-control" placeholder="Search for items">
                    <span class="input-group-text">
                        <svg class="bi bi-search" width="16" height="16" fill="currentColor" xmlns="https://www.w3.org/2000/svg">
                            <path d="M11.742 10.344l3.868 3.868c.196.196.196.512 0 .708l-.708.708a.5.5 0 0 1-.708 0l-3.868-3.868a6.5 6.5 0 1 1 .708-.708zm-6.492 1.992a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11z"/>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    
        <div class="d-flex flex-column">
            <div class="overflow-auto">
                <div class="table-responsive">
                    <div class="table border rounded bg-white table-hover">
                        <table class="table align-middle">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-uppercase text-secondary">Márka</th>
                                    <th scope="col" class="px-6 py-3 text-start text-uppercase text-secondary">Típus</th>
                                    <th scope="col" class="px-6 py-3 text-start text-uppercase text-secondary">Kép</th>
                                    <th scope="col" class="px-6 py-3 text-start text-uppercase text-secondary">Utoljára Modósitva</th>
                                    <th scope="col" class="px-6 py-3 text-start text-uppercase text-secondary">Toner Százalék</th>
                                    <th scope="col" class="px-6 py-3 text-start text-uppercase text-secondary">Dobb Egység Százalék</th>
                                    <th scope="col" colspan="3" class="px-6 py-3 text-end text-uppercase text-secondary">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Models\Printer::all() as $printer)
                                    @if($printer->office()->value('id') == \Illuminate\Support\Facades\Auth::user()->office_id)
                                        <tr>
                                            <td class="px-6 py-4 text-dark-800">{{$printer->brand}}</td>
                                            <td class="px-6 py-4 text-dark-800">{{$printer->type}}</td>
                                            <td class="px-6 py-4 text-dark-800">
                                                <img class="img-thumbnail h-10" src="{{asset('storage/picture/'.$printer->picture)}}" alt="image description">
                                            </td>
                                            <td class="px-6 py-4 text-dark-800">{{$printer->updated_at}}</td>
                                            <td class="px-6 py-4 text-dark-800">{{$printer->toner_percent}}%</td>
                                            <td class="px-6 py-4 text-dark-800">{{$printer->drumm_percent}}%</td>
                                            <td class="px-6 py-4 text-end">
                                                <form action="{{route('printers.updateUtilities',$printer)}}" method="GET">
                                                    @csrf
                                                    <button type="submit" class="btn btn-link text-decoration-none text-primary">Modósitás</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="py-3 px-4">
                        <nav class="d-flex justify-content-center">
                            <ul class="pagination">
                                <li class="page-item">
                                    <button class="page-link" aria-label="Elöző">
                                        <span aria-hidden="true">«</span>
                                    </button>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <button class="page-link">1</button>
                                </li>
                                <li class="page-item">
                                    <button class="page-link">2</button>
                                </li>
                                <li class="page-item">
                                    <button class="page-link">3</button>
                                </li>
                                <li class="page-item disabled">
                                    <button class="page-link">...</button>
                                </li>
                                <li class="page-item">
                                    <button class="page-link">8</button>
                                </li>
                                <li class="page-item">
                                    <button class="page-link">9</button>
                                </li>
                                <li class="page-item">
                                    <button class="page-link">10</button>
                                </li>
                                <li class="page-item">
                                    <button class="page-link" aria-label="Következő">
                                        <span aria-hidden="true">»</span>
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    

</x-app-layout>

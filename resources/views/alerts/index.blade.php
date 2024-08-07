<x-app-layout>

    <div class="grid grid-cols-4 py-3 px-4">
        <div class="mr-3 relative max-w-xs">
            <label class="sr-only">Search</label>
            <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search" class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Search for items">
            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                <svg class="h-4 w-4 text-gray-400" xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            </div>
        </div>

        <div class="mr-3">

            <select id="offices" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Iroda 1</option>
                <option value="US">Iroda 2</option>
                <option value="CA">Iroda 3</option>
                <option value="FR">Iroda 4</option>
                <option value="DE">Iroda 5</option>
            </select>

        </div>

    </div>
    <div class="text-start px-6 py-4 whitespace-nowrap text-sm font-medium">

        <a  href="{{route('printers.create')}}" type="button" class="items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Create</a>
    </div>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">

                    <div class="overflow-hidden">
                        <table class="table-auto min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Brand</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Type</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Picture</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="py-1 px-4">
                        <nav class="flex justify-center space-x-1">
                            <button type="button" class="p-2.5 inline-flex items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10" aria-current="page">1</button>
                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10">2</button>
                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10">3</button>
                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10" disabled>...</button>
                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10">8</button>
                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10">9</button>
                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10">10</button>
                            <button type="button" class="p-2.5 inline-flex items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                <span class="sr-only">Next</span>
                                <span aria-hidden="true">»</span>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

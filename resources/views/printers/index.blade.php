<x-app-layout>

    <div class="row py-3 px-4 justify-content-center">
        <div class="col-6  me-3 position-relative">
            <label class="visually-hidden">Keresés</label>
            <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search"
                class="form-control py-2 ps-5" placeholder="Search for items">
        </div>
    </div>


    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="text-start px-6 py-4">
                <a href="{{ route('printers.create') }}" type="button" class="btn btn-primary">
                    Létrehozás
                </a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="d-flex flex-column">
                <div class="overflow-auto">
                    <div class="p-3 min-w-100 align-middle">
                        <div class="table-responsive bg-white border rounded-sm">
                            <table class="table table-striped">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Márka
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Típus
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Kép
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Létrehozva
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Utoljára
                                            Modósitva</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Toner
                                            Százalék</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Dobb
                                            Egység
                                            Százalék</th>
                                        <th scope="col" colspan="3"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (\App\Models\Printer::all() as $printer)
                                        <tr>
                                            <td class="px-6 py-4 text-sm text-dark">
                                                {{ $printer->brand }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-dark">
                                                {{ $printer->type }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-dark">
                                                <img class="h-10 w-10"
                                                    src="{{ asset('storage/picture/' . $printer->picture) }}"
                                                    alt="image description">
                                            </td>
                                            <td class="px-6 py-4 text-sm text-dark">
                                                {{ $printer->created_at }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-dark">
                                                {{ $printer->updated_at }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-dark">
                                                {{ $printer->toner_percent }}%
                                            </td>
                                            <td class="px-6 py-4 text-sm text-dark">
                                                {{ $printer->drumm_percent }}%
                                            </td>
                                            <td class="px-6 py-4 text-end text-sm">
                                                <button type="button"
                                                    class="btn btn-link text-decoration-none text-primary">Nézzet</button>
                                            </td>
                                            <td class="px-6 py-4 text-end text-sm">
                                                <form action="{{ route('printers.edit', $printer) }}">
                                                    <button type="submit"
                                                        class="btn btn-link text-decoration-none text-primary">Módositás</button>
                                                </form>
                                            </td>
                                            <td class="px-6 py-4 text-end text-sm">
                                                <form method="POST" action="{{ route('printers.destroy', $printer) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-link text-decoration-none text-primary">Törlés</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="py-1 px-4">
                                <nav class="d-flex justify-content-center">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <button class="page-link" type="button" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </button>
                                        </li>
                                        <li class="page-item active" aria-current="page">
                                            <button class="page-link" type="button">1</button>
                                        </li>
                                        <li class="page-item">
                                            <button class="page-link" type="button">2</button>
                                        </li>
                                        <li class="page-item">
                                            <button class="page-link" type="button">3</button>
                                        </li>
                                        <li class="page-item disabled">
                                            <button class="page-link" type="button">...</button>
                                        </li>
                                        <li class="page-item">
                                            <button class="page-link" type="button">8</button>
                                        </li>
                                        <li class="page-item">
                                            <button class="page-link" type="button">9</button>
                                        </li>
                                        <li class="page-item">
                                            <button class="page-link" type="button">10</button>
                                        </li>
                                        <li class="page-item">
                                            <button class="page-link" type="button" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                            </button>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>

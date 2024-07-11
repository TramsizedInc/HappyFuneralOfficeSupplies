<x-app-layout>

    <div class="row justify-content-center py-3 px-4">
        <div class="col-xl-2 col-xxl-2 col-lg-3 col-md-2 col-sm-2 col-xs-2"></div>
        <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-4 col-xs-2">
            <div class="input-group">
                <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search"
                    class="form-control pe-3" placeholder="Search for items">
                <span class="input-group-text">
                    <i class="fa fa-search"></i> <!-- Updated icon class -->
                </span>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-3 col-xs-2"> <!-- Column for the button -->
            <a href="{{ route('printers.create') }}" class="btn btn-primary">Létrehozás</a>
        </div>
    </div>

    


    <div class="row mt-5 justify-content-center">
        <div class="col-xxl-6 col-xl-8 col-lg-8 col-md-12 col-sm-12">
            <div class="d-flex flex-column">
                <div class="overflow-auto">
                    <div class="table-responsive">
                        <div class="table table-responsive bg-dark border border-dark rounded">
                            <table class="table table-dark">
                                <thead class="table-dark text-white">
                                    <tr>
                                        <th scope="col"
                                            class="px-3 py-3 text-start text-sm fw-medium text-uppercase small d-sm-table-cell d-none fs-6">
                                            Márka
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-start text-sm fw-medium text-uppercase small d-sm-table-cell d-none fs-6">
                                            Típus
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-start text-sm fw-medium text-uppercase small d-sm-table-cell d-none fs-6">
                                            Kép
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-start text-sm fw-medium text-uppercase small fs-6">
                                            Létrehozva
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-start text-sm fw-medium text-uppercase small fs-6">
                                            Utoljára Modósitva
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-start text-sm fw-medium text-uppercase small fs-6">
                                            Toner Százalék
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-start text-sm fw-medium text-uppercase small fs-6">
                                            Dobb Egység Százalék
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-start overflow-visible fw-medium text-uppercase small d-none d-sm-table-cell fs-6">
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

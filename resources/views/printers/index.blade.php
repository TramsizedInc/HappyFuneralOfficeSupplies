<x-app-layout>



    <div id=list>
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
                <a href="{{ route('printers.create') }}" class="btn btn-primary"><i class="fas fa-plus p-2"></i> Új
                    nyomtató hozzáadása</a>
            </div>
        </div>




        <div class="row mt-5 justify-content-center">
            <div class="col-xxl-auto col-xl-9 col-lg-10 col-md-12 col-sm-12 col-xs-12">
                <div class="d-flex flex-column">
                    <div class="overflow-auto">
                        <div id="table-custom" class="table table-responsive bg-dark border border-dark rounded">
                            <table class="table table-dark">
                                <thead class="table-dark text-white">
                                    <tr class="text-center align-middle">
                                        <th scope="col"
                                            class="border-end align-middle col-4 border-secondary text-secondary">
                                            Márka</th>
                                        <th scope="col"
                                            class="text-nowrap border-end border-secondary text-secondary">Típus</th>
                                        <th scope="col"
                                            class="text-nowrap border-end border-secondary text-secondary">Kép</th>
                                        <th scope="col"
                                            class="text-nowrap text-nowrap border-end border-secondary text-secondary">
                                            Kihelyezés
                                            Dátuma</th>
                                        <th scope="col"
                                            class="text-nowrap border-end border-secondary text-secondary">Utolsó
                                            Frissítés</th>
                                        <th scope="col"
                                            class="text-nowrap border-end border-secondary text-secondary">Toner
                                            Százalék</th>
                                        <th scope="col"
                                            class="text-nowrap border-end border-secondary text-secondary">Dob Egység
                                            Százalék</th>
                                        <th scope="col"
                                            class="border-end border-secondary d-xxl-table-cel text-center text-secondary">
                                            Műveletek</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (\App\Models\Printer::all() as $printer)
                                        <tr class="align-middle">
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ $printer->brand }}</td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ $printer->type }}</td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                <img class="img-fluid"
                                                    src="{{ asset('storage/picture/' . $printer->picture) }}"
                                                    alt="Nyomtató kép">
                                            </td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ $printer->created_at }}</td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ $printer->updated_at }}</td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ $printer->toner_percent }}%</td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ $printer->drumm_percent }}%</td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-200">
                                                <div class="d-flex justify-content-between align-items-center">

                                                    <a href="{{ route('printers.show', ['printer' => $printer->id]) }}" class="btn btn-success btn-sm me-2">Megnézés</a>

                                                    <form action="{{ route('printers.edit', $printer) }}"
                                                        class="d-inline-block ms-2">
                                                        <button type="submit"
                                                            class="btn btn-warning btn-sm">Szerkesztés</button>
                                                    </form>
                                                    <form method="POST"
                                                        action="{{ route('printers.destroy', $printer) }}"
                                                        class="d-inline-block ms-2">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm">Törlés</button>
                                                    </form>
                                                </div>
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

<x-app-layout>

    <div class="row justify-content-center py-3 px-4">
        <div class="col-2"></div>
        <div class="col-3"> <!-- Column for the input -->
            <div class="input-group">
                <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search"
                    class="form-control pe-3" placeholder="Search for items">
                <span class="input-group-text">
                    <i class="fa fa-search"></i> <!-- Updated icon class -->
                </span>
            </div>
        </div>
        <div class="col-3"> <!-- Column for the button -->
            <a href="{{ route('printerTypes.create') }}" class="btn btn-primary">Létrehozás</a>
        </div>
    </div>




    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="d-flex flex-column">
                <div class="overflow-auto">
                    <div class="table-responsive">
                        <div class="table table-responsive bg-dark border border-dark rounded">
                            <table class="table table-dark caption-top">
                                <caption
                                    class="border-bottom border-secondary text-uppercase fs-2 text-center text-danger">
                                    Nyomtató típusok</caption>

                                <thead>
                                    <tr class="table-dark">
                                        <th scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50">
                                            Nyomtató típus</th>
                                        <th scope="col"
                                            class="bg-dark text-center text-uppercase border-end border-secondary text-secondary w-25">
                                            Módosítás
                                        </th>
                                        <th scope="col"
                                            class="bg-dark text-center text-uppercase text-secondary w-25">Törlés
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (\App\Models\PrinterType::all() as $printerType)
                                        <tr>

                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ $printerType->name }}</td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary  text-center w-25">
                                                <form action="{{ route('printerTypes.edit', $printerType) }}">
                                                    <button type="submit"
                                                        class="btn btn-warning text-decoration-none">Módosítás</button>
                                                </form>
                                            </td>
                                            <td class="bg-dark  table-secondary text-center w-25">
                                                <form method="POST"
                                                    action="{{ route('printerTypes.destroy', $printerType) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger text-decoration-none">Törlés</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="py-3  px-4">
                                <nav class="d-flex bg-dark justify-content-center">
                                    <ul class="pagination bg-dark ">
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
            </div>
        </div>
    </div>


</x-app-layout>

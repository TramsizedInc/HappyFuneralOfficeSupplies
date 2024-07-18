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
            <div class="col-xxl-10 col-xl-9 col-lg-10 col-md-12 col-sm-12 col-xs-12">
                <div class="d-flex flex-column">
                    <div class="overflow-auto">
                        <div class="table-responsive">
                            <div class="table table-responsive bg-dark border border-dark rounded">
                                <table class="table table-dark">
                                    <thead class="table-dark text-white">
                                        <tr class="text-center align-middle">
                                            <th id="wrap" scope="col" colspan="1"
                                                class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary">
                                                Márka
                                            </th>
                                            <th scope="col" colspan="1"
                                                class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary">
                                                Típus
                                            </th>
                                            <th scope="col" colspan="1"
                                                class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary">
                                                Kép
                                            </th>
                                            <th scope="col" colspan="1"
                                                class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary">
                                                Kihelyezve
                                            </th>
                                            <th scope="col" colspan="1"
                                                class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary">
                                                Kellék Modósítva
                                            </th>
                                            <th scope="col" colspan="1"
                                                class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary">
                                                Toner Százalék
                                            </th>
                                            <th scope="col" colspan="1"
                                                class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary">
                                                Dob Egység Százalék
                                            </th>
                                            <th></th>
                                            <th scope="col" colspan="2"
                                                class="border-end border-secondary d-xxl-table-cell  w-200 text-secondary" style="width: 40%">
                                                Gombok
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (\App\Models\Printer::all() as $printer)
                                            <tr>
                                                <td
                                                    class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                    {{ $printer->brand }}
                                                </td>
                                                <td
                                                    class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                    {{ $printer->type }}
                                                </td>
                                                <td
                                                    class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                    <img class="h-10 w-10"
                                                        src="{{ asset('storage/picture/' . $printer->picture) }}"
                                                        alt="image description">
                                                </td>
                                                <td
                                                    class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                    {{ $printer->created_at }}
                                                </td>
                                                <td
                                                    class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                    {{ $printer->updated_at }}
                                                </td>
                                                <td
                                                    class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                    {{ $printer->toner_percent }}%
                                                </td>
                                                <td
                                                    class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                    {{ $printer->drumm_percent }}%
                                                </td>
                                                <td></td>
                                                <td colspan="2"
                                                    class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-200">
                                                    <button type="button" class="btn btn-success">Nézzet</button>


                                                    <form action="{{ route('printers.edit', $printer) }}">
                                                        <button type="submit"
                                                            class="btn btn-warning">Módositás</button>
                                                    </form>


                                                    <form method="POST"
                                                        action="{{ route('printers.destroy', $printer) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Törlés</button>
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
            </div>
</x-app-layout>

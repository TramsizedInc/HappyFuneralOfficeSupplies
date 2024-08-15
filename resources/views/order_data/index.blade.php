@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-2 col-xxl-2 col-lg-3 col-md-2 col-sm-2 col-xs-2"></div>
            <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-4 col-xs-2">
                <div class="input-group">
                    <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search"
                        class="form-control pe-3" placeholder="Search for items">
                    <span class="input-group-text">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-3 col-xs-2">
                <a href="{{ route('deceaseds.create') }}" class="btn btn-primary"><i class="fas fa-plus p-2"></i> Új
                    Temetés felvétele</a>
            </div>
        </div>

        <div class="row mt-5 justify-content-center">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-4">
                <div class="d-flex overflow-visible flex-column">
                    <div class="overflow-visible">
                        <div class="table-responsive">
                            <table class="table table-dark modern-table caption-top" style="max-width: fit-content;">
                                <caption class="border-bottom border-secondary text-uppercase fs-2 text-center text-danger">
                                    Temetések</caption>
                                <thead>
                                    <tr class="table-dark text-center align-middle">
                                        <th data-label="Temetés Azonosító" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50 text-nowrap">
                                            Temetés Azonosító</th>
                                        <th data-label="Megrendelő neve" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50 text-nowrap">
                                            Megrendelő neve</th>
                                        <th data-label="Megrendelő szem.ig. száma" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50 text-nowrap">
                                            Megrendelő szem.ig. száma</th>
                                        <th data-label="Elhunyt neve" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50 text-nowrap">
                                            Elhunyt neve</th>
                                        <th data-label="Urna típusa" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50 text-nowrap">
                                            Urna típusa</th>
                                        <th data-label="Halál helye" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50 text-nowrap">
                                            Halál helye</th>
                                        <th data-label="Felvétel ideje" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50 text-nowrap">
                                            Felvétel ideje</th>
                                        <th data-label="Állapot" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-secondary">Állapot
                                        </th>
                                        <th scope="col"
                                            class="border-end border-secondary d-xxl-table-cel text-center text-secondary">
                                            Műveletek</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-gray-50 dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($orderdatas as $item)
                                        <tr id="smallTable" class="align-middle">
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ $item->inner_uuid }}</td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ \App\Models\CustomerData::all()->find($item->customer_data_id)->customer_name_prefix }}
                                                {{ \App\Models\CustomerData::all()->find($item->customer_data_id)->customer_last_name }}
                                                {{ \App\Models\CustomerData::all()->find($item->customer_data_id)->customer_first_name }}
                                            </td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ \App\Models\CustomerData::all()->find($item->customer_data_id)->id_card_number }}
                                            </td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ \App\Models\Deceased_data::all()->find($item->deceased_data_id)->deceased_name }}
                                            </td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ \App\Models\Urn_k_i_a_data::all()->find($item->_urn_k_i_a_datas_id)->urn_inside_form }}
                                            </td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ \App\Models\BirthCertificate::all()->find($item->birth_certificate_id)->death_place }}
                                            </td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ $item->created_at }}</td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                            </td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-200">
                                                <div id="actions"
                                                    class="smallTable d-flex justify-content-between align-items-center">
                                                    <a id="action_btn" href="#"
                                                        class="btn btn-success btn-sm me-2">Megnézés</a>
                                                    <form action="#" class="d-inline-block ms-2">
                                                        <a href="#" id="action_btn" type="submit"
                                                            class="btn btn-warning btn-sm">Szerkesztés</a>
                                                    </form>
                                                    <form action="#" class="d-inline-block ms-2">
                                                        <a href="#" id="action_btn" type="submit"
                                                            class="btn btn-danger btn-sm">Törlés</a>
                                                    </form>
                                                    <a href="/hutes-ido/{{ $item->id }}" id="cooling_bill"
                                                        type="submit" class="btn btn-info btn-sm">Ajánlat Kéres</a>
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
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#hs-table-with-pagination-search').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('.table-responsive tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            $('#action_btn').on('click', function(e) {
                e.preventDefault();
                toastr.info('Ez a funkció még fejlesztés alatt áll', 'A következő verzióban már működik');
            });

            $('#cooling_bill').on('click', function(e) {
                e.preventDefault();
                toastr.warning('Csak teljesen kitöltött adatokkal működik');
                setTimeout(() => {
                    window.location.href =$(this).attr('href');
                }, 5000);
            });
        });
    </script>
@endsection

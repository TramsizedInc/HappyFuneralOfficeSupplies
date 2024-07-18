<x-app-layout>
    <div class="row justify-content-center">
        <div class="col-xl-2 col-xxl-2 col-lg-3 col-md-2 col-sm-2 col-xs-2"></div>
        <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-4 col-xs-2"> <!-- Column for the input -->
            <div class="input-group">
                <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search"
                    class="form-control pe-3" placeholder="Search for items">
                <span class="input-group-text">
                    <i class="fa fa-search"></i> <!-- Updated icon class -->
                </span>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-3 col-xs-2"> <!-- Column for the button -->
            <a href="{{ route('deceaseds.create') }}" class="btn btn-primary">Létrehozás</a>
        </div>
    </div>

    <div class="row mt-5 justify-content-center">
        <div class="col-xxl-8 col-xl-10 col-lg-10 col-md-12 col-sm-12">
            <div class="d-flex overflow-hidden flex-column">
                <div class="overflow-hidden">
                    <div class="table-responsive">
                        <div class="table table-responsive bg-dark border border-dark rounded">
                            <table class="table table-dark caption-top">
                                <caption
                                    class="border-bottom border-secondary text-uppercase fs-2 text-center text-danger">
                                    Temetések</caption>
                                <thead>
                                    <tr class="table-dark text-center align-middle">
                                        <th id="wrap" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50 text-nowrap">
                                            Temetés
                                            száma</th>
                                        <th id="wrap" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50 text-nowrap">
                                            Megrendelő neve</th>
                                        <th id="wrap" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50 text-nowrap">
                                            Megrendelő szem.ig. száma</th>
                                        <th id="wrap" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50 text-nowrap">
                                            Elhunyt
                                            neve</th>
                                        <th id="wrap" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50 text-nowrap">
                                            Urna
                                            típusa</th>
                                        <th id="wrap" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50 text-nowrap">
                                            Halál
                                            helye</th>
                                        <th id="wrap" scope="col"
                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50 text-nowrap">
                                            Felvétel
                                            ideje</th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-gray-50 dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($orderdatas as $item)
                                        <tr>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ $item->id }}</td>
                                            <td
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                {{ \App\Models\CustomerData::all()->find($item->customer_data_id)->customer }}
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

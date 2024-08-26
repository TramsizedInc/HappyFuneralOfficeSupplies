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


        <div class="row mt-5 justify-content-center w-100">

            <div class="table-responsive">
                <table class="table table-dark caption-top">
                    <caption class="border-bottom border-secondary text-uppercase fs-2 text-center text-danger">
                        Temetések</caption>
                    <thead>
                        <tr class="text-center align-middle">
                            <!-- Columns -->
                            <th class="bg-dark text-center border-end border-secondary text-uppercase text-secondary">
                                Temetés Azonosító</th>
                            <th class="bg-dark text-center border-end border-secondary text-uppercase text-secondary">
                                Megrendelő neve</th>
                            <th class="bg-dark text-center border-end border-secondary text-uppercase text-secondary">
                                Megrendelő szem.ig. száma</th>
                            <th class="bg-dark text-center border-end border-secondary text-uppercase text-secondary">
                                Elhunyt neve</th>
                            <th class="bg-dark text-center border-end border-secondary text-uppercase text-secondary">
                                Urna típusa</th>
                            <th class="bg-dark text-center border-end border-secondary text-uppercase text-secondary">
                                Halál helye</th>
                            <th class="bg-dark text-center border-end border-secondary text-uppercase text-secondary">
                                Felvétel ideje</th>
                            <th class="bg-dark text-center border-end border-secondary text-secondary">Állapot</th>
                            <th class="border-end border-secondary text-center text-secondary">Műveletek</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderdatas as $item)
                            <tr class="align-middle">
                                <!-- Cells -->
                                <td class="bg-dark border-end border-secondary text-secondary text-center">
                                    {{ $item->inner_uuid }}</td>
                                <td class="bg-dark border-end border-secondary text-secondary text-center">
                                    {{ \App\Models\CustomerData::all()->find($item->customer_data_id)->customer_name_prefix }}
                                    {{ \App\Models\CustomerData::all()->find($item->customer_data_id)->customer_last_name }}
                                    {{ \App\Models\CustomerData::all()->find($item->customer_data_id)->customer_first_name }}
                                </td>
                                <td class="bg-dark border-end border-secondary text-secondary text-center">
                                    {{ \App\Models\CustomerData::all()->find($item->customer_data_id)->id_card_number }}
                                </td>
                                <td class="bg-dark border-end border-secondary text-secondary text-center">
                                    {{ \App\Models\Deceased_data::all()->find($item->deceased_data_id)->deceased_name_prefix }}
                                    {{ \App\Models\Deceased_data::all()->find($item->deceased_data_id)->deceased_last_name }}
                                    {{ \App\Models\Deceased_data::all()->find($item->deceased_data_id)->deceased_first_name }}
                                </td>
                                <td class="bg-dark border-end border-secondary text-secondary text-center">
                                    {{ \App\Models\Urn_k_i_a_data::all()->find($item->_urn_k_i_a_datas_id)->urn_inside_form }}
                                </td>
                                <td class="bg-dark border-end border-secondary text-secondary text-center">
                                    {{ \App\Models\BirthCertificate::all()->find($item->birth_certificate_id)->death_place }}
                                </td>
                                <td class="bg-dark border-end border-secondary text-secondary text-center">
                                    {{ $item->created_at }}</td>
                                <td class="bg-dark border-end border-secondary text-secondary text-center" >
                                    {{ \App\Http\Controllers\OrderDataController::get_state($item->id) }}
                                    
                                </td>
                                <td class="bg-dark border-end border-secondary text-secondary text-center w-200">
                                    <div class="d-flex flex-column align-items-center">
                                        <a href="{{ route('orderdata.show' ,['orderdatum' =>$item->id])}}" class="btn btn-success btn-md  mb-2">Megnézés</a>
                                        
                                        <form action="{{ route('orderdata.edit',['orderdatum'=>$item->id]) }}" class="d-inline-block ms-2">
                                            <button type="submit" class="btn btn-warning btn-md   mb-2">Szerkesztés</button>
                                        </form>
                                        <form action="#" class="d-inline-block ms-2">
                                            <button type="submit" class="btn btn-danger btn-md mb-2" style="width: 100% ">Törlés</button>
                                        </form>
                                        <a href="/hutesido-kalkulator/{{ $item->id }}" type="submit"
                                            class="btn btn-info btn-md ">Ajánlat Kéres</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
                    window.location.href = $(this).attr('href');
                }, 5000);
            });
        });
    </script>
@endsection

@extends('layouts.app')

@section('content')
    <!--Section container -->
    <div class="row mb-1 justify-content-evenly">
        <div class="col-md-11 pt-2 flex-container justify-content-evenly">
            <h1 class="title ms-5 text-white font-weight-bold">
                Elhunyt felvétele
            </h1>
            <h1 class="subtitle  ms-5 text-white font-weight-bold" id="orderdata_order_uuid">{{ $deceased_uuid }}</h1>

            <form class=" pe-0" id="orderdata_form" method="POST" action="{{ route('orderdata.store') }}">
                @csrf
                @method('POST')
                <input class="subtitle d-none ms-5 text-white font-weight-bold" value="{{ $deceased_uuid }}"
                    name="inner_uuid"></input>
                <button class="btn save-btn btn-lg btn-warning" type="submit" id="save_all_forms">
                    Tárolás
                </button>
            </form>

            <a id="order_request_btn" class="btn me-2 next-btn btn-lg btn-success" type="submit">
                Ajánlat kérése
            </a>
        </div>



        <section class="row mt-0 p-5 pt-0 g-5">
            <!-- Customer Data Section -->
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div id='section1' class="card bg-dark text-white">
                    <div class="card-header">
                        <h2 class="card-title text-center font-weight-bold">Megrendelő adatai</h2>
                    </div>
                    <div class="card-body mt-2">
                        <form id="customer_form" action="{{ route('customer.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <input class="subtitle d-none ms-5 text-white font-weight-bold" value="{{ $deceased_uuid }}"
                                    id="customer_order_uuid" name="order_uuid"></input>
                                <div class="col-md-4">
                                    <select class="form-select bg-secondary " id="customer_name_prefix"
                                        name="customer_name_prefix" type="text" placeholder="Előtag">
                                        <option value="Előtag" selected disabled hidden>Előtag</option>
                                        <option value="Nincs">Nincs</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Id.">Id.</option>
                                        <option value="Ifj.">Ifj.</option>
                                        <option value="Özv.">Özv.</option>
                                        <option value="Phd">Phd.</option>
                                        <option value="Prof.">Prof.</option>
                                    </select>

                                </div>
                                <div class="col-md-4">
                                    <input class="form-control bg-secondary text-white" id="customer_last_name"
                                        name="customer_last_name" type="text" placeholder="Vezeték neve">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control bg-secondary text-white" id="customer_first_name"
                                        name="customer_first_name" type="text" placeholder="Kereszt neve">
                                </div>

                                <div class="col-md-6 ">
                                    <div class="input-group border-end-secondary">
                                        <input type="text" class="form-control bg-secondary text-white" id="born_name"
                                            name="born_name" placeholder="Születési neve">
                                        <div class="input-group-text bg-secondary border-start-0 ">
                                            <input type="checkbox" class="form-check-input ms-1 align-items-center"
                                                name="sameName" id="sameName">
                                            <label class="form-check-label" for="sameName">Ua.</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="mother_name" name="mother_name"
                                        type="text" placeholder="Anyja neve" />
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control bg-secondary text-white" id="born_place" name="birth_place"
                                        type="text" placeholder="Születési helye" />
                                </div>

                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="bg-secondary form-control input-group-text">Születési
                                                ideje</span>
                                        </div>
                                        <input class="form-control bg-secondary" name="birth_day" id="birth_day"
                                            type="date" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <input class="form-control bg-secondary text-white" id="id_card_number"
                                        name="id_card_number" type="text" placeholder="Szig. száma" />
                                </div>

                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text form-control bg-secondary">Szig. érvényességi
                                                ideje</span>
                                        </div>
                                        <input class="form-control bg-secondary" id="id_card_expire_date"
                                            name="id_card_expire_date" type="date"
                                            placeholder="Szig. érvényességi ideje" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="customer_id_card_number"
                                        name="customer_id_card_number" type="text"
                                        placeholder="Megrendelő személyi száma">
                                </div>


                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="id_card_exhibition_place"
                                        name="id_card_exhibition_place" type="text"
                                        placeholder="Szig. kiállítási helye" />
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="exhibiting_office"
                                        name="exhibiting_office" type="text" placeholder="Szig. kiállító hatóság" />
                                </div>


                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <select class="form-select bg-secondary">
                                                <option selected>+36</option>
                                            </select>
                                        </div>
                                        <input type="text" id="phone-input"
                                            class="form-control bg-secondary text-white" name="mobile_number"
                                            placeholder="" data-mask="(99) 999-9999" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" id="email" name="email"
                                        class="form-control bg-secondary text-white" placeholder="Email" />
                                </div>
                            </div>
                            <div class="card-footer border-top border-primray mt-2">
                                <div class="card-header">
                                    <h5 class="card-title text-start">Megrendelő lakcím adatai</h5>
                                </div>
                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="address_id_number"
                                            name="address_id_number" type="text"
                                            placeholder="Lakcím igazolvány száma" />
                                    </div>



                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="nation" name="nation"
                                            type="text" placeholder="Ország" />
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="zip_code"
                                            name="zip_code" type="text" placeholder="Irányítószám" />
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="city" name="city"
                                            type="text" placeholder="Város">
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="street" name="street"
                                            type="text" placeholder="Utca" />
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="house_number"
                                            name="house_number" type="text" placeholder="Házszám">
                                    </div>
                                </div>
                                <div class="text-center sticky-bottom mt-3">
                                    <button class="btn btn-secondary d-none" type="submit">Kész</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Deceased Data Section -->
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div id='section2' class="card bg-dark text-white mb-4">
                    <div class="card-header">
                        <h2 class="card-title text-center font-weight-bold">Elhunyt adatai</h2>
                    </div>
                    <div class="card-body mt-2">

                        <form id="deceased_form" action="{{ route('deceaseds.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <input class="subtitle d-none ms-5 text-white font-weight-bold"
                                    value="{{ $deceased_uuid }}" id="deceased_order_uuid" name="order_uuid"></input>
                                <div class="col-md-4">
                                    <select class="form-select bg-secondary " id="deceased_name_prefix"
                                        name="deceased_name_prefix" type="text" placeholder="Előtag">
                                        <option value="(Nincs)" selected>Előtag</option>
                                        <option value="(Nincs)">Nincs</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Id.">Id.</option>
                                        <option value="Ifj.">Ifj.</option>
                                        <option value="Özv.">Özv.</option>
                                        <option value="Phd">Phd.</option>
                                        <option value="Prof.">Prof.</option>

                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control bg-secondary text-white" id="deceased_last_name"
                                        name="deceased_last_name" type="text" placeholder="Vezeték neve">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control bg-secondary text-white" id="deceased_first_name"
                                        name="deceased_first_name" type="text" placeholder="Kereszt neve">
                                </div>

                                <div class="col-md-6">
                                    <div class="input-group border-end-secondary">
                                        <input type="text" class="form-control bg-secondary text-white"
                                            id="birth_name" name="birth_name" placeholder="Születési neve">
                                        <div class="input-group-text bg-secondary border-start-0">
                                            <input type="checkbox" class="form-check-input ms-1 align-items-center"
                                                name="deceased_sameName" id="deceased_sameName">
                                            <label class="form-check-label" for="deceased_sameName">Ua.</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" type="text"
                                        name="social_security_number" id="social_security_number" placeholder="TAJ szám">
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="mother_name"
                                        name="mother_name" type="text" placeholder="Anyja neve" />
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="birth_place"
                                        name="birth_place" type="text" placeholder="Születési helye" />
                                </div>


                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-secondary">Születési ideje</span>
                                        </div>
                                        <input class="form-control bg-secondary" name="birth_day" id="birth_day"
                                            type="date" placeholder="Születési ideje" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="id_card_number"
                                        name="id_card_number" type="text" placeholder="Személyi igazolvány száma">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="personal_id"
                                        name="personal_id" type="text" placeholder="Elhunyt személyi száma">
                                </div>

                                <div class="col-md-6">
                                    <select class="form-select bg-secondary" id="hospital_code" name="hospital_code">
                                        <option selected value="">Elhunyt jelenleg várakozik</option>
                                        @foreach (\App\Models\HutosIdo::all() as $hutosido)
                                            <option value="{{ $hutosido->id }}">{{ $hutosido->kh_name }}
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" type="text" name="death_place"
                                        id="death_place" placeholder="Halál helye">
                                </div>



                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-secondary">Halálozás napja</span>
                                        </div>
                                        <input datetimepicker class="form-control bg-secondary" id="death_time"
                                            name="death_time" type="date" placeholder="Halálozás napja" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" type="text"
                                        placeholder="Nyugdíjas törzsszám"id="pensioner_id" name="pensioner_id">
                                </div>


                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input class="form-control bg-secondary text-end text-white" type="number"
                                            name="weight" id="weight" placeholder="Elhunyt súlya" min="0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-secondary">Kg</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="passport_number"
                                        name="passport_number" type="text" placeholder="Útlevél szám">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="driver_licence_number"
                                        name="driver_licence_number" type="text"
                                        placeholder="Elhunyt jogsítvány száma">
                                </div>

                            </div>
                            <div class="card-footer border-top border-primray mt-2">
                                <div class="card-header">
                                    <h5 class="card-title text-start d-flex justify-content-between align-items-center">
                                        Elhunyt lakcím adatai
                                        <span class="ms-auto">
                                            <input type="checkbox" class="form-check-input" name="toggle"
                                                id="toggle-form">
                                            <label class="form-check-label" for="deceased_sameName">Ua.</label>
                                        </span>
                                    </h5>
                                </div>
                                <div class="row g-3 form-group">
                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="address_id_number"
                                            name="address_id_number" type="text"
                                            placeholder="Lakcím igazolvány száma" />
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="nation" name="nation"
                                            type="text" placeholder="Ország" />
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="zip_code"
                                            name="zip_code" type="text" placeholder="Irányítószám" />
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="city" name="city"
                                            type="text" placeholder="Város">
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="street" name="street"
                                            type="text" placeholder="Utca" />
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="house_number"
                                            name="house_number" type="text" placeholder="Házszám">
                                    </div>



                                    <div class="text-center sticky-bottom mt-3">
                                        <button class="btn btn-secondary d-none" type="submit">Kész</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div id='section3' class="card bg-dark text-white mb-4">
                    <div class="card-header">
                        <h2 class="card-title text-center font-weight-bold">Anyakönyvi adatok</h2>
                    </div>
                    <div class="card-body mt-2">
                        <form id="birthcert_form" action="{{ route('birth_certificate.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <input class="subtitle d-none ms-5 text-white font-weight-bold"
                                    value="{{ $deceased_uuid }}" id="birthcertificate_order_uuid"
                                    name="order_uuid"></input>
                                <div class="col-md-6">
                                    <select class="form-select bg-secondary" id="degree" name="degree"
                                        type="text" placeholder="Iskolai végzettsége">
                                        <option value="">Iskolai végzettsége</option>
                                        <option value="Általános iskola">Általános iskola</option>
                                        <option value="Középiskola">Középiskola</option>
                                        <option value="Szakközépiskola">Szakközépiskola</option>
                                        <option value="Szakiskola">Szakiskola</option>
                                        <option value="Felsőfokú diploma">Felsőfokú diploma</option>
                                        <option value="Egyetem / Főiskola">Egyetem / Főiskola</option>
                                        <option value="PhD / Doktori diploma">PhD / Doktori diploma</option>
                                        <option value="Egyéb">Egyéb</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="job" name="job"
                                        type="text" placeholder="Foglalkozása">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="child_count"
                                        name="child_count" type="number" min="0"
                                        placeholder="Gyerekeinek száma">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="degree_of_relative"
                                        name="degree_of_relative" type="text" placeholder="Rokonsági fok">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="death_place"
                                        name="death_place" type="text"
                                        placeholder="Elhalálozás helysége (Város,Kerület)">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="ash_storage_place"
                                        name="ash_storage_place" type="text" placeholder="Hamvak tárolási helye">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white"
                                        id="deceased_birth_certificate_number" name="deceased_birth_certificate_number"
                                        type="text" placeholder="Elh. Szül. AK. száma">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white"
                                        id="wedding_birth_certificate_number" name="wedding_birth_certificate_number"
                                        type="text" placeholder="Házassági AK. száma">
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control bg-secondary text-white" type="text"
                                        placeholder="A fennálló vagy a megszűnt házasságkötés megkötésének helye">
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text form-control bg-secondary">
                                                És ideje</span>
                                        </div>
                                        <input class="form-control bg-secondary" type="date" placeholder="és ideje">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="dead_husbands_count"
                                        name="dead_husbands_count" min="0" type="number"
                                        placeholder="(Volt) Házastársak száma">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white"
                                        id="legally_binding_autopsy_number" name="legally_binding_autopsy_number"
                                        type="text" placeholder="Jogerős bont ítélet száma">
                                </div>


                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="selfemployee_tax_number"
                                        name="selfemployee_tax_number" type="text" placeholder="Vállalkozói adószám">
                                </div>

                                <div class="col-md-6 align-middle text-center rounded  g-3">
                                    <label class="fs-4 pe-4">Házas?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="divorced_or_not"
                                            id="divorced_or_not" value="true">
                                        <label class="form-check-label fs-5" for="maritalStatus1">
                                            Igen
                                        </label>
                                    </div>
                                </div>


                            </div>
                            {{-- <div class="card-footer">
                                <div class="text-center sticky-bottom mt-3">
                                    <button class="btn btn-secondary d-none" type="submit">Kész</button>
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>

            <!-- UrnKIA Data Section -->
            <div class="col-xxl-2 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div id='section4' class="card bg-dark text-white mb-4">
                    <div class="card-header">
                        <h2 class="card-title text-center font-weight-bold">Hűtés és UrnKIA adatok</h2>
                    </div>
                    <div class="card-body mt-2">
                        <form id="urnkia_form" action="{{ route('urn_k_i_a_data.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row text-center g-3">
                                <input class="subtitle d-none ms-5 text-white font-weight-bold"
                                    value="{{ $deceased_uuid }}" id="urnkia_order_uuid" name="order_uuid"></input>
                                <div class="col-md-12  rounded g-3">
                                    <label class="pe-4 fs-4">Boncolás történt-e?</label>
                                    <div class="form-check form-check-inline pe-4 g-3">
                                        <input class="form-check-input " type="checkbox" name="hv_is_done"
                                            id="hv_is_done" value="1">
                                        <label class="form-check-label fs-5" for="1">
                                            Igen
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-secondary">Ügyfelvétel napja</span>
                                        </div>
                                        <input class="form-control bg-secondary" id="exhibition_date"
                                            name="exhibition_date" type="date" placeholder="Ügyfelvétel napja">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-secondary">Választott Krematoriuma</span>
                                        </div>
                                        <select class="form-select bg-secondary" id="" name=""
                                            type="text" placeholder="Választott Krematoriuma">
                                            @foreach (\App\Models\KremaList::all() as $krema)
                                                <option value="{{ $krema->id }}">{{ $krema->name }}
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-secondary">HvKÉSZ állapot dátuma</span>
                                        </div>
                                        <input class="form-control bg-secondary" id="hv_done_status_date"
                                            name="hv_done_status_date" type="date"
                                            placeholder="HvKÉSZ állapot dátuma">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <select name="urn_inside_form" class="form-select form-text bg-secondary"
                                        aria-label="Large select example" id="urn_inside_form">
                                        <option selected value="" class="">Urnabetét formája
                                        </option>
                                        @php
                                            $urns = App\Models\UrnInsert::all();
                                        @endphp
                                        @foreach ($urns as $urn)
                                            <option value="{{ $urn->name }}">{{ $urn->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-secondary">HvVAN állapot dátum</span>
                                        </div>
                                        <input class="form-control bg-secondary" id="hv_have_status_date"
                                            name="hv_have_status_date" type="date" placeholder="HvVAN állapod dátum">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-secondary">HvKiállítás dátuma</span>
                                        </div>
                                        <input class="form-control bg-secondary" id="hv_exhibition_date"
                                            name="hv_exhibition_date" type="date" placeholder="HvKiállítás dátuma">

                                    </div>
                                </div>

                            </div>
                            {{-- <div class="card-footer">
                                <div class="text-center sticky-bottom mt-3">
                                    <button class="btn btn-secondary d-none" type="submit">Kész</button>
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>




    </div>

    // \\TODO : megrendelő lakcím adatai-> elhunyt lakcím adati; módosítani az edit részen is//\\
                        
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleForm = document.getElementById('toggle-form');
            const formGroup = document.querySelector('.form-group');


            toggleForm.addEventListener('change', function(event) {
                if (event.target.checked) {
                    // Hide all inputs when checkbox is checked
                    formGroup.style.display = 'none';

                } else {
                    // Show all inputs when checkbox is unchecked
                    formGroup.style.display = '';
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            const customerLastName = document.getElementById('customer_last_name');
            const customerFirstName = document.getElementById('customer_first_name');
            const bornName = document.getElementById('born_name');
            const sameNameCheckbox = document.getElementById('sameName');

            sameNameCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    const fullName = `${customerLastName.value.trim()} ${customerFirstName.value.trim()}`;
                    bornName.value = fullName.toUpperCase();
                    bornName.disabled = true;
                } else {
                    bornName.value = '';
                    bornName.disabled = false;
                }
            });

            // Initial state
            sameNameCheckbox.checked = false;
        });
        document.addEventListener('DOMContentLoaded', function() {
            const deceasedLastName = document.getElementById('deceased_last_name');
            const deceasedFirstName = document.getElementById('deceased_first_name');
            const birthName = document.getElementById('birth_name');
            const deceased_sameNameCheckbox = document.getElementById('deceased_sameName');

            deceased_sameNameCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    const fullName = `${deceasedLastName.value.trim()} ${deceasedFirstName.value.trim()}`;
                    birthName.value = fullName.toUpperCase();
                    birthName.disabled = true;
                } else {
                    birthName.value = '';
                    birthName.disabled = false;
                }
            });

            // Initial state
            deceased_sameNameCheckbox = false;
        });
        const sleep = (ms) => new Promise((r) => setTimeout(r, ms));
        document.addEventListener('DOMContentLoaded', function() {
            // Get the current date in YYYY-MM-DD format

            let currentDate = new Date().toISOString().split('T')[0];

            // Select the input element by its ID
            let deathTimeInput = document.getElementById('death_time');
            let exhibition_dateInput = document.getElementById('exhibition_date');
            let hv_done_status_dateInput = document.getElementById('hv_done_status_date');
            let hv_have_status_dateInput = document.getElementById('hv_have_status_date');
            let hv_exhibition_date_Input = document.getElementById('hv_exhibition_date');


            // Set the value of the input element to the current date
            deathTimeInput.value = currentDate;


            exhibition_dateInput.value = currentDate;
            hv_done_status_dateInput.value = currentDate;
            hv_have_status_dateInput.value = currentDate;
            hv_exhibition_date_Input.value = currentDate;
        });

        $(document).ready(function() {

            $('#phone-input').each(function() {
                var maskPattern = $(this).data('mask');
                $(this).mask(maskPattern);
            });
            $('#deceased_form, #birthcert_form, #urnkia_form, #customer_form').on('submit', function(e) {
                e.preventDefault(); // Prevent the form from submitting via the browser.
                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(), // Serialize form data for AJAX submission
                    success: function(data) {
                        if (data.success) {
                            toastr.info(data.message);
                            window.location.href = "/orderdata";
                            // Optionally, update the form or page content based on the response
                        } else {
                            toastr.info('fuck');
                        }
                    }
                });
            });

            function submitForm(formId, callback) {
                var form = $('#' + formId);
                var formData = form.serialize();
                // toastr.info(formId, formData);
                // var order = fetch("/order-id").then(response => response.json()).then(data => data.csrfToken).catch(error => toastr.error(error));
                $.ajax({
                    type: "POST",
                    url: form.attr('action'), // Assuming the action attribute contains the URL to submit to

                    data: formData,
                    success: function(response) {
                        if (formId == 'orderdata_form') {
                            // toastr.info(response.message);
                            if (callback) {
                                let instructions = callback.toString();
                                if (instructions.includes("/hutesido-kalkulator/")) {
                                    // toastr.info(formData);
                                    // if()
                                    let inner_uuid = formData.split("&").find((word) => word.includes(
                                        "inner_uuid"));
                                    $.ajax({
                                        type: "GET",
                                        url: "/order-ready/" + inner_uuid.split("=")[1]
                                            .replaceAll("%2F", "-"),
                                        success: function(response) {
                                            if (!response.ready_state) {
                                                toastr.error("Adatok mentve, de hiányos",
                                                    "További adatok kitöltésére van szükség a számításhoz."
                                                );
                                                // toastr.info("Adatok mentve")
                                                setTimeout(() => {
                                                    window.location.href =
                                                        "/orderdata";
                                                }, 5000);
                                                return;
                                            } else {
                                                callback();
                                            }
                                        },
                                        error: function() {
                                            alert('An error occurred');
                                        }
                                    });
                                } else {
                                    callback();
                                }
                            }
                        } else if (callback) callback();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Form submission failed:", textStatus, errorThrown);
                    }
                });
            }

            $("#orderdata_form").on('submit', function(e) {
                e.preventDefault();

                submitForm('deceased_form', function() {
                    submitForm('birthcert_form', function() {
                        submitForm('urnkia_form', function() {
                            submitForm('customer_form', function() {
                                submitForm('orderdata_form', function() {
                                    setTimeout(() => {
                                        window.location
                                            .href =
                                            "/orderdata";
                                    }, 5000);
                                });
                            });
                        });
                    });
                });
            });

            $("#order_request_btn").on('click',
                function(e) {
                    e.preventDefault();

                    submitForm('deceased_form', function() {
                        submitForm('birthcert_form', function() {
                            submitForm('urnkia_form', function() {
                                submitForm('customer_form', function() {
                                    submitForm('orderdata_form', function() {
                                        // window.location.href = "/orderdata";
                                        toastr.info(
                                            "Átirányítás fejlesztés alatt",
                                            "Adatbázismódosítás végett fejlesztés alatt áll"
                                        );
                                        toastr.info(
                                            "Átirányítás fejlesztés alatt",
                                            "Minta megnyitása");
                                        // await sleep(5000);
                                        // window.location.href = "/javitas";
                                        setTimeout(() => {
                                            window.location
                                                .href =
                                                "/hutesido-kalkulator/" +
                                                "";
                                        }, 5000);
                                    });
                                });
                            });
                        });
                    });
                });


        });
        // , () => window.location.href = "/deceaseds";
    </script>
@endsection

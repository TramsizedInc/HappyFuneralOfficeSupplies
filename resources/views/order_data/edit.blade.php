@extends('layouts.app')

@section('content')
    <!--Section container -->
    <div class="row mb-3 ">
        <div class="col-md-11 flex-container justify-content-between">
            <h1 class="title ms-5 text-white font-weight-bold">
                Elhunyt felvétele
            </h1>
            <h1 class="subtitle  ms-5 text-white font-weight-bold">{{ $orderdata->inner_uuid }}</h1>

            <form class=" pe-0" id="orderdata_form" method="POST"
                action="{{ route('orderdata.update', ['orderdatum' => $orderdata]) }}">
                @csrf
                @method('PUT')
                {{-- {{ \App\Models\Deceased_data::all()->find($orderdata->deceaseds_data_id)->deceaseds_name_prefix }} --}}
                <input class="subtitle d-none ms-5 text-white font-weight-bold" value="{{ $orderdata->inner_uuid }}"
                    name="inner_uuid"></input>
                <button class="btn save-btn btn-lg btn-warning" type="submit" id="save_all_forms">
                    Tárolás
                </button>
            </form>

            <a id="order_request_btn" class="btn me-2 next-btn btn-lg btn-success" type="submit">
                Ajánlat kérése
            </a>
        </div>



        <section class="row  mt-1 p-5 pt-0 g-4">
            <!-- Customer Data Section -->
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div id='section1' class="card bg-dark text-white mb-4">
                    <div class="card-header">
                        <h2 class="card-title text-center font-weight-bold">Megrendelő adatai</h2>
                    </div>
                    {{--  --}}
                    <div class="card-body mt-2">
                        <form id="customer_form"
                            action="{{ route('customer.update', ['customer' => \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row g-3">
                                <input class="subtitle d-none ms-5 text-white font-weight-bold"
                                    value="{{ $orderdata->inner_uuid }}" name="order_uuid"></input>
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
                                        value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->customer_last_name ?? '' }}"
                                        name="customer_last_name" type="text" placeholder="Vezeték neve">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control bg-secondary text-white" id="customer_first_name"
                                        value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->customer_first_name ?? '' }}"
                                        name="customer_first_name" type="text" placeholder="Kereszt neve">
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="born_name" name="born_name"
                                        type="text" placeholder="Születési neve"
                                        value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->born_name ?? '' }}">
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="mother_name" name="mother_name"
                                        type="text" placeholder="Anyja neve"
                                        value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->mother_name ?? '' }}" />
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control bg-secondary text-white" id="born_place" name="birth_place"
                                        type="text" placeholder="Születési helye"
                                        value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->birth_place ?? '' }}" />
                                </div>

                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="bg-secondary form-control input-group-text">Születési
                                                ideje</span>
                                        </div>
                                        <input class="form-control bg-secondary" name="birth_day" id="birth_day"
                                            type="date"
                                            value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->birth_day ?? '' }}" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <input class="form-control bg-secondary text-white" id="id_card_number"
                                        name="id_card_number" type="text" placeholder="Szig. száma"
                                        value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->id_card_number ?? '' }}" />
                                </div>

                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text form-control bg-secondary">Szig. érvényességi
                                                ideje</span>
                                        </div>
                                        <input class="form-control bg-secondary" id="id_card_expire_date"
                                            name="id_card_expire_date" type="date"
                                            placeholder="Szig. érvényességi ideje"
                                            value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->id_card_expire_date ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" type="text" name="personal_id"
                                        id="personal_id" placeholder="Megrendelő személyi száma"
                                        value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->personal_id ?? '' }}">
                                </div>


                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="id_card_exhibition_place"
                                        name="id_card_exhibition_place" type="text"
                                        placeholder="Szig. kiállítási helye"
                                        value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->id_card_exhibition_place ?? '' }}" />
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="exhibiting_office"
                                        name="exhibiting_office" type="text" placeholder="Szig. kiállító hatóság"
                                        value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->exhibiting_office ?? '' }}" />
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
                                            placeholder="" data-mask="(99) 999-9999"
                                            value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->mobile_number ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" id="email" name="email"
                                        class="form-control bg-secondary text-white" placeholder="Email"
                                        value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->email ?? '' }}" />
                                </div>
                            </div>
                            <div class="card-footer border-top border-primray mt-2">
                                <div class="card-header">
                                    <h5 class="card-title text-start">Megrendelő lakcím adatai</h5>
                                </div>
                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="address_id_number"
                                            name="address_id_number" type="text" placeholder="Lakcím igazolvány száma"
                                            value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->address_id_number ?? '' }}" />
                                    </div>



                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="nation" name="nation"
                                            type="text" placeholder="Ország"
                                            value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->nation ?? '' }}" />
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="zip_code"
                                            name="zip_code" type="text" placeholder="Irányítószám"
                                            value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->zip_code ?? '' }}" />
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="city" name="city"
                                            type="text" placeholder="Város"
                                            value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->city ?? '' }}">
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="street" name="street"
                                            type="text" placeholder="Utca"
                                            value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->street ?? '' }}" />
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="house_number"
                                            name="house_number" type="text" placeholder="Házszám"
                                            value="{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->house_number ?? '' }}">
                                    </div>
                                </div>
                                <div class="text-center sticky-bottom mt-3">
                                    <button class="btn btn-secondary" type="submit">Kész</button>
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

                        <form id="deceased_form"
                            action="{{ route('deceaseds.update', ['deceased' => \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row g-3">
                                <input class="subtitle d-none ms-5 text-white font-weight-bold"
                                    value="{{ $orderdata->inner_uuid }}" name="order_uuid"></input>
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
                                        name="deceased_last_name" type="text" placeholder="Vezeték neve"
                                        value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->deceased_last_name ?? '' }}">
                                </div>


                                <div class="col-md-4">
                                    <input class="form-control bg-secondary text-white" id="deceased_first_name"
                                        name="deceased_first_name" type="text" placeholder="Kereszt neve"
                                        value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->deceased_first_name ?? '' }}">
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="born_name" name="birth_name"
                                        type="text" placeholder="Születési neve"
                                        value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->birth_name ?? '' }}">
                                </div>


                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" type="text"
                                        name="social_security_number" id="social_security_number" placeholder="TAJ szám"
                                        value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->social_security_number ?? '' }}">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="mother_name"
                                        name="mother_name" type="text" placeholder="Anyja neve"
                                        value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->mother_name ?? '' }}" />
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="birth_place"
                                        name="birth_place" type="text" placeholder="Születési helye"
                                        value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->birth_place ?? '' }}" />
                                </div>


                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-secondary">Születési ideje</span>
                                        </div>
                                        <input class="form-control bg-secondary" name="birth_day" id="birth_day"
                                            type="date" placeholder="Születési ideje"
                                            value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->birth_day ?? '' }}" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="id_card_number"
                                        name="id_card_number" type="text" placeholder="Személyi igazolvány száma"
                                        value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->id_card_number ?? '' }}">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="personal_id"
                                        name="personal_id" type="text" placeholder="Elhunyt személyi száma"
                                        value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->personal_id ?? ''}}">
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
                                        id="death_place" placeholder="Halál helye"
                                        value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->death_place ?? '' }}">
                                </div>



                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-secondary">Halálozás napja</span>
                                        </div>
                                        <input datetimepicker class="form-control bg-secondary" id="death_time"
                                            name="death_time" type="date" placeholder="Halálozás napja"
                                            value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->death_time ?? '' }}" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" type="text"
                                        placeholder="Nyugdíjas törzsszám"id="pensioner_id" name="pensioner_id"
                                        value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->pensioner_id ?? '' }}">
                                </div>

                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input class="form-control bg-secondary text-end text-white" type="number"
                                            name="weight" id="weight" placeholder="Elhunyt súlya" value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->weigth ?? '' }}" min="0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-secondary">Kg</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="passport_number"
                                        name="passport_number" type="text" placeholder="Útlevél szám" 
                                        value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->passport_number ?? '' }}">
                                </div>
                                
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="driver_licence_number"
                                        name="driver_licence_number" type="text" placeholder="Elhunyt jogsítvány száma"
                                        value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->driver_licence_number ?? '' }}">
                                </div>


                            </div>
                            <div class="card-footer border-top border-primray mt-2">
                                <div class="card-header">
                                    <h5 class="card-title text-start">Elhunyt lakcím adatai</h5>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="address_id_number"
                                            name="address_id_number" type="text" placeholder="Lakcím igazolvány száma"
                                            value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->address_id_number ?? '' }}" />
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="nation" name="nation"
                                            type="text" placeholder="Ország"
                                            value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->nation ?? '' }}" />
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="zip_code"
                                            name="zip_code" type="text" placeholder="Irányítószám"
                                            value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->zip_code ?? '' }}" />
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="city" name="city"
                                            type="text" placeholder="Város"
                                            value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->city ?? '' }}">
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="street" name="street"
                                            type="text" placeholder="Utca"
                                            value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->street ?? '' }}" />
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="house_number"
                                            name="house_number" type="text" placeholder="Házszám"
                                            value="{{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->house_number ?? '' }}">
                                    </div>



                                    <div class="text-center sticky-bottom mt-3">
                                        <button class="btn btn-secondary" type="submit">Kész</button>
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
                        <form id="birthcert_form"
                            action="{{ route('birth_certificate.update', ['birth_certificate' => \App\Models\BirthCertificate::all()->find($orderdata->birth_certificate_id)->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row g-3">
                                <input class="subtitle d-none ms-5 text-white font-weight-bold"
                                    value="{{ $orderdata->inner_uuid }}" name="order_uuid"></input>
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
                                        type="text" placeholder="Foglalkozása"
                                        value="{{ \App\Models\BirthCertificate::all()->find($orderdata->birth_certificate_id)->birth_name ?? '' }}">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="child_count"
                                        name="child_count" type="number" min="0" placeholder="Gyerekeinek száma"
                                        value="{{ \App\Models\BirthCertificate::all()->find($orderdata->birth_certificate_id)->child_count ?? '' }}">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="degree_of_relative"
                                        name="degree_of_relative" type="text" placeholder="Rokonsági fok"
                                        value="{{ \App\Models\BirthCertificate::all()->find($orderdata->birth_certificate_id)->degree_of_relative ?? '' }}">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="death_place"
                                        name="death_place" type="text"
                                        placeholder="Elhalálozás helysége (Város,Kerület)"
                                        value="{{ \App\Models\BirthCertificate::all()->find($orderdata->birth_certificate_id)->death_place ?? '' }}">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="ash_storage_place"
                                        name="ash_storage_place" type="text" placeholder="Hamvak tárolási helye"
                                        value="{{ \App\Models\BirthCertificate::all()->find($orderdata->birth_certificate_id)->ash_storage_place ?? '' }}">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white"
                                        id="deceased_birth_certificate_number" name="deceased_birth_certificate_number"
                                        type="text" placeholder="Elh. Szül. AK. száma"
                                        value="{{ \App\Models\BirthCertificate::all()->find($orderdata->birth_certificate_id)->deceased_birth_certificate_number ?? '' }}">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white"
                                        id="wedding_birth_certificate_number" name="wedding_birth_certificate_number"
                                        type="text" placeholder="Házassági AK. száma"
                                        value="{{ \App\Models\BirthCertificate::all()->find($orderdata->birth_certificate_id)->wedding_birth_certificate_number ?? '' }}">
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
                                        placeholder="(Volt) Házastársak száma"
                                        value="{{ \App\Models\BirthCertificate::all()->find($orderdata->birth_certificate_id)->dead_husbands_count ?? '' }}">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white"
                                        id="legally_binding_autopsy_number" name="legally_binding_autopsy_number"
                                        type="text" placeholder="Jogerős bont ítélet száma"
                                        value="{{ \App\Models\BirthCertificate::all()->find($orderdata->birth_certificate_id)->legally_binding_autopsy_number ?? '' }}">
                                </div>


                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="selfemployee_tax_number"
                                        name="selfemployee_tax_number" type="text" placeholder="Vállalkozói adószám"
                                        value="{{ \App\Models\BirthCertificate::all()->find($orderdata->birth_certificate_id)->selfemployee_tay_number ?? '' }}">
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
                            <div class="card-footer">
                                <div class="text-center sticky-bottom mt-3">
                                    <button class="btn btn-secondary" type="submit">Kész</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- UrnKIA Data Section -->
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div id='section4' class="card bg-dark text-white mb-4">
                    <div class="card-header">
                        <h2 class="card-title text-center font-weight-bold">Hűtés és UrnKIA adatok</h2>
                    </div>
                    <div class="card-body mt-2">
                        <form id="urnkia_form"
                            action="{{ route('urn_k_i_a_data.update', ['urn_k_i_a_datum' => \App\Models\Urn_k_i_a_data::all()->find($orderdata->_urn_k_i_a_datas_id)->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row text-center g-3">
                                <input class="subtitle d-none ms-5 text-white font-weight-bold"
                                    value="{{ $orderdata->inner_uuid }}" name="order_uuid"></input>
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
                                            name="exhibition_date" type="date" placeholder="Ügyfelvétel napja"
                                            value="{{ \App\Models\Urn_k_i_a_data::all()->find($orderdata->_urn_k_i_a_datas_id)->exhibition_date ?? '' }}">
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
                                            name="hv_done_status_date" type="date" placeholder="HvKÉSZ állapot dátuma"
                                            value="{{ \App\Models\Urn_k_i_a_data::all()->find($orderdata->_urn_k_i_a_datas_id)->hv_done_status_date ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <select name="urn_inside_form" class="form-select form-text bg-secondary"
                                        aria-label="Large select example" id="urn_inside_form">
                                        <option value="" class="">Urnabetét formája
                                        </option>
                                        <option selected
                                            value="{{ \App\Models\Urn_k_i_a_data::all()->find($orderdata->_urn_k_i_a_datas_id)->urn_inside_form ?? 'Urnabetét formája' }}">
                                            {{ \App\Models\Urn_k_i_a_data::all()->find($orderdata->_urn_k_i_a_datas_id)->urn_inside_form ?? 'Urnabetét formája' }}
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
                                            name="hv_have_status_date" type="date" placeholder="HvVAN állapod dátum"
                                            value="{{ \App\Models\Urn_k_i_a_data::all()->find($orderdata->_urn_k_i_a_datas_id)->hv_have_status_date ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-secondary">HvKiállítás dátuma</span>
                                        </div>
                                        <input class="form-control bg-secondary" id="hv_exhibition_date"
                                            name="hv_exhibition_date" type="date" placeholder="HvKiállítás dátuma"
                                            value="{{ \App\Models\Urn_k_i_a_data::all()->find($orderdata->_urn_k_i_a_datas_id)->hv_exhibition_date ?? '' }}">

                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="text-center sticky-bottom mt-3">
                                    <button class="btn btn-secondary" type="submit">Kész</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>




    </div>

    <script>
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
                    type: "PUT",
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
                toastr.info(form.attr('action'));
                $.ajax({
                    type: "PUT",
                    url: form.attr('action'), // Assuming the action attribute contains the URL to submit to

                    data: formData,
                    success: function(response) {
                        if (formId == 'orderdata_form') toastr.info(response.message);
                        if (callback) callback();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Form submission failed:", textStatus, errorThrown);
                        console.error("This was the route:", form.attr('action'));
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
                                    window.location.href =
                                        "/orderdata";
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
                                                "/javitas";
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

<x-app-layout>


    <!--Section container-->
    <div class="row mb-3">
        <div class="col-md-12 col-md-12 flex-container">
            <h1 class="title text-start ms-5 text-white font-weight-bold" >
                Elhunyt felvétele
            </h1>
            <h1 class="subtitle text-start ms-5 text-white font-weight-bold">Ügyszám: AE01/240215/0001</h1>
        
            <form class="text-center" id="orderdata_form" method="POST" action="{{ route('orderdata.store') }}">
                @csrf
                @method('POST')
                <input type="hidden" id="deceased_hidden" name="deceased_hidden" />
                <input type="hidden" id="id_card_hidden" name="id_card_number" />
                <button class="btn save-btn btn-lg btn-secondary" type="submit" >
                    Tárolás
                </button>
            </form>
        
            <a class="btn next-btn btn-lg btn-success" type="submit" href="{{ url('hutesido-kalulator')}}" id="save_all_froms">
                Ajánalt kérése
            </a>
        </div>



        <section class="row  mt-1 p-5 pt-0 g-4">
            <!-- Customer Data Section -->
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div id='section1' class="card bg-dark text-white mb-4">
                    <div class="card-header">
                        <h2 class="card-title text-center font-weight-bold">Megrendelő adatai</h2>
                    </div>
                    <div class="card-body mt-2">
                        <form id="customer_form" action="{{ route('customer.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="customer" name="customer"
                                        type="text" placeholder="Előtag" required>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="customer" name="customer"
                                        type="text" placeholder="Vezeték neve" required>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="customer" name="customer"
                                        type="text" placeholder="Kereszt neve" required>
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="born_name" name="born_name"
                                        type="text" placeholder="Születési neve">
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="mother_name"
                                        name="mother_name" type="text" placeholder="Anyja neve" />
                                </div>


                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="id_card_number"
                                        onchange="onIdcardChange(this)" name="id_card_number" type="text"
                                        placeholder="Személyi igazolvány száma" required />
                                </div>




                                <div class="col-md-12">
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
                                    <input class="form-control bg-secondary text-white" type="text"
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
                                    <input class="form-control bg-secondary text-white" id="born_place"
                                        name="birth_place" type="text" placeholder="Születési helye" />
                                </div>

                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="bg-secondary form-control input-group-text">Születési
                                                ideje</span>
                                        </div>
                                        <input class="form-control bg-secondary" name="birth_day" id="birth_day"
                                            type="date" />
                                    </div>
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
                                            pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="00-000-0000"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" id="email" name="email"
                                        class="form-control bg-secondary text-white" placeholder="Email" required />
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
                                            placeholder="Lakcím igazolvány száma" required />
                                    </div>



                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="nation"
                                            name="nation" type="text" placeholder="Ország" />
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="zip_code"
                                            name="zip_code" type="text" placeholder="Irányítószám" />
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="city"
                                            name="city" type="text" placeholder="Város">
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="street"
                                            name="street" type="text" placeholder="Utca" />
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="house_number"
                                            name="house_number" type="text" placeholder="Házszám">
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
                        <form id="deceased_form" action="{{ route('deceaseds.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="deceased_name"
                                        onchange="onDeceasedChange(this)" name="deceased_name" type="text"
                                        placeholder="Előtag" required>
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="deceased_name"
                                        onchange="onDeceasedChange(this)" name="deceased_name" type="text"
                                        placeholder="Vezeték neve" required>
                                </div>


                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="deceased_name"
                                        onchange="onDeceasedChange(this)" name="deceased_name" type="text"
                                        placeholder="Kereszt neve" required>
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="born_name"
                                        name="birth_name" type="text" placeholder="Születési neve">
                                </div>


                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" type="text"
                                        name="social_security_number" id="social_security_number"
                                        placeholder="TAJ szám">
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="mother_name"
                                        name="mother_name" type="text" placeholder="Anyja neve" />
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="id_card_number"
                                        name="id_card_number" type="text" placeholder="Személyi igazolvány száma">
                                </div>

                                <div class="col-md-6">
                                    <select class="form-select bg-secondary" name="hospital_code" required>
                                        <option selected  value="">Elhunyt jelenleg várakozik</option>
                                        @foreach (\App\Models\HutosIdo::all() as $hutosido)
                                            <option value="{{ $hutosido->id }}">{{ $hutosido->kh_name }}
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="birth_place"
                                        name="birth_place" type="text" placeholder="Születési helye" />
                                </div>


                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-secondary">Születési ideje</span>
                                        </div>
                                        <input class="form-control bg-secondary" name="birth_day" id="birth_day"
                                            type="date" placeholder="Születési ideje" />
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" type="text"
                                        name="death_place" id="death_place" placeholder="Halál helye">
                                </div>



                                <div class="col-md-6">
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
                                        placeholder="Nyugdíjas törzsszám" required>
                                </div>




                            </div>
                            <div class="card-footer border-top border-primray mt-2">
                                <div class="card-header">
                                    <h5 class="card-title text-start">Elhunyt lakcím adatai</h5>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id=""
                                            name="" type="text" placeholder="Lakcím igazolvány száma"
                                            required />
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="nation"
                                            name="nation" type="text" placeholder="Ország" />
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="zip_code"
                                            name="zip_code" type="text" placeholder="Irányítószám" />
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="city"
                                            name="city" type="text" placeholder="Város">
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="street"
                                            name="street" type="text" placeholder="Utca" />
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control bg-secondary text-white" id="house_number"
                                            name="house_number" type="text" placeholder="Házszám">
                                    </div>


                                    <div class="text-center sticky-bottom mt-3">
                                        <button class="btn btn-secondary" type="submit" >Kész</button>
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
                                <div class="col-md-6">
                                    <select class="form-select bg-secondary" id="degree" name="degree"
                                        type="text" placeholder="Iskolai végzettsége" required>
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
                                        placeholder="Elhalálozás helysége (Város,Kerület)" required>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="ash_storage_place"
                                        name="ash_storage_place" type="text" placeholder="Hamvak tárolási helye">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white"
                                        id="deceased_birth_certificate_number"
                                        name="deceased_birth_certificate_number" type="text"
                                        placeholder="Elh. Szül. AK. száma">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white"
                                        id="wedding_birth_certificate_number" name="wedding_birth_certificate_number"
                                        type="text" placeholder="Házassági AK. száma">
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control bg-secondary text-white" type="text"
                                        placeholder="A fennálló vagy a megszűnt házasságkötés megkötésének helye"
                                        required>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text form-control bg-secondary">
                                                És ideje</span>
                                        </div>
                                        <input class="form-control bg-secondary" type="date"
                                            placeholder="és ideje">
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
                                        name="selfemployee_tax_number" type="text"
                                        placeholder="Vállalkozói adószám">
                                </div>




                                <div class="col-md-6 rounded bg-secondary mb-1">
                                    <label>Házas?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input  ps-1" type="radio" name="divorced_or_not"
                                            id="maritalStatus1" value="Igen">
                                        <label class="form-check-label" for="maritalStatus1">
                                            Igen
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="divorced_or_not"
                                            id="maritalStatus2" value="Nem">
                                        <label class="form-check-label" for="maritalStatus2">
                                            Nem
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control bg-secondary text-white" id="deceased_hidden_bc"
                                        name="name_of_person" type="hidden">
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-center sticky-bottom mt-3">
                                    <button class="btn btn-secondary" type="submit" >Kész</button>
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
                        <form id="urnkia_form" action="{{ route('urn_k_i_a_data.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row text-center g-3">
                                <div class="col-md-12  rounded g-3">
                                    <label class="pe-4">Boncolás történt-e?</label>
                                    <div class="form-check form-check-inline pe-4 g-3">
                                        <input class="form-check-input " type="radio" name="divorced_or_not"
                                            id="maritalStatus1" value="Igen">
                                        <label class="form-check-label " for="maritalStatus1">
                                            Igen
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline g-3">
                                        <input class="form-check-input" type="radio" name="divorced_or_not"
                                            id="maritalStatus2" value="Nem">
                                        <label class="form-check-label" for="maritalStatus2">
                                            Nem
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
                                            name="hv_have_status_date" type="date"
                                            placeholder="HvVAN állapod dátum">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-secondary">HvKiállítás dátuma</span>
                                        </div>
                                        <input class="form-control bg-secondary" id="hv_exhibition_date"
                                            name="hv_exhibition_date" type="date"
                                            placeholder="HvKiállítás dátuma">

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control bg-secondary text-white" id="deceased_hidden_urnkia"
                                        name="name_of_deceased" type="hidden" required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-center sticky-bottom mt-3">
                                    <button class="btn btn-secondary" type="submit" >Kész</button>
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
        function onDeceasedChange(e) {
            document.getElementById('deceased_hidden').value = e.value;
            document.getElementById('deceased_hidden_urnkia').value = e.value;
            document.getElementById('deceased_hidden_bc').value = e.value;
        }

        function onIdcardChange(e) {
            document.getElementById('id_card_hidden').value = e.value;
        }
        // function submitFormPost(e){
        //   $('form').on('submit', function(e) {
        //   e.preventDefault();
        //   var form = $(this);
        //   var url = form.attr('action');

        //   $.ajax({
        //       type: "POST",
        //       url: url,
        //       data: form.serialize(),
        //       success: function(data){
        //         if(response.success) {
        //           toastr.info(response.message);
        //         }
        //       }
        //   });});
        // }
        $(document).ready(function() {
            // Assuming each form has a unique ID like 'form1', 'form2', etc.
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
                            // window.location.href = "/hutesido-kalkulator/index";
                            // Optionally, update the form or page content based on the response
                        } else {
                            toastr.info('fuck');
                        }
                    }
                });
            });
            $('#save_all_forms').on('click', (e) => {
                var d_form = document.getElementById('deceased_form');
                var bc_form = document.getElementById('birthcert_form');
                var u_form = document.getElementById('urnkia_form');
                var c_form = document.getElementById('customer_form');
                
                d_form.submit();
                bc_form.submit();
                c_form.submit();
                u_form.submit();
            });
        });
    </script>
</x-app-layout>

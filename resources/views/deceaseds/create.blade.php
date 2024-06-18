<x-app-layout>

   
        <!--Section container-->
        <h1 class="text-center text-white font-weight-bold mb-4">
            Elhunyt felvétele
        </h1>
        <section class="row">
            <div class="col-md-6">
                <div id='section1' class="card mb-4">
                    <h2 class="card-title font-weight-bold">Megrendelő adatai</h2>
                    <form id="customer_form" action="{{ route('customer.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="customer" name="customer"
                                    type="text" placeholder="Neve" required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="nation" name="nation"
                                    type="text" value="" placeholder="Ország" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="phone-input" aria-describedby="helper-text-explanation"
                                    class="form-control bg-secondary text-white" name="mobile_number"
                                    pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="0630-000-0000" required />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="id_card_number"
                                    onchange="onIdcardChange(this)" name="id_card_number" type="text"
                                    placeholder="Személyi igazolvány száma" required />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="address_id_number"
                                    name="address_id_number" type="text" placeholder="Lakcím igazolvány száma"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="born_name" name="born_name"
                                    type="text" value="" placeholder="Születési neve">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="zip_code" name="zip_code"
                                    type="text" value="" placeholder="Irányítószám" />
                            </div>
                            <div class="col-md-6">
                                <input type="email" id="email" name="email"
                                    class="form-control bg-secondary text-white" placeholder="Email" required />
                            </div>
                            <div class="col-md-6">
                                <input datetimepicker class="form-control bg-secondary text-white"
                                    id="id_card_expire_date" name="id_card_expire_date" type="text"
                                    placeholder="Szig. érvényességi ideje" />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" type="text" value=""
                                    placeholder="Megrendelő személyi száma">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="mother_name" name="mother_name"
                                    type="text" value="" placeholder="Anyja neve" />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="city" name="city"
                                    type="text" value="" placeholder="Város">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="id_card_exhibition_place"
                                    name="id_card_exhibition_place" type="text" value=""
                                    placeholder="Szig. kiállítási helye" />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="born_place" name="birth_place"
                                    type="text" value="" placeholder="Születési helye" />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="street" name="street"
                                    type="text" value="" placeholder="Utca" />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="exhibiting_office"
                                    name="exhibiting_office" type="text" value=""
                                    placeholder="Szig. kiállító hatóság" />
                            </div>
                            <div class="col-md-6">
                                <input datetimepicker class="form-control bg-secondary text-white" name="birth_day"
                                    id="birth_day" type="text" placeholder="Születési ideje" />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="house_number"
                                    name="house_number" type="text" value="" placeholder="Házszám">
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-secondary" type="submit">Kész</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div id='section2' class="card mb-4">
                    <h2 class="card-title font-weight-bold">Elhunyt adatai</h2>

                    <form id="deceased_form" action="{{ route('deceaseds.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="deceased_name"
                                    onchange="onDeceasedChange(this)" name="deceased_name" type="text"
                                    placeholder="Elhunyt neve" required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="nation" name="nation"
                                    type="text" value="" placeholder="Ország" />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" type="text"
                                    name="hospital_code" id="hospital_code" placeholder="Elhunyt jelenleg várakozik"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" type="text"
                                    placeholder="Nyugdíjas törzsszám" required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="born_name" name="birth_name"
                                    type="text" value="" placeholder="Születési neve">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="zip_code" name="zip_code"
                                    type="text" value="" placeholder="Irányítószám" />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" type="text" name="death_place"
                                    id="death_place" value="" placeholder="Halál helye">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="id_card_number"
                                    name="id_card_number" type="text" value=""
                                    placeholder="Személyi igazolvány száma">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="mother_name"
                                    name="mother_name" type="text" value="" placeholder="Anyja neve" />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="city" name="city"
                                    type="text" value="" placeholder="Város">
                            </div>
                            <div class="col-md-6">
                                <input datetimepicker class="form-control bg-secondary text-white" id="death_time"
                                    name="death_time" type="text" placeholder="Halálozás napja" />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="birth_place"
                                    name="birth_place" type="text" value=""
                                    placeholder="Születési helye" />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="street" name="street"
                                    type="text" value="" placeholder="Utca" />
                            </div>
                            <div class="col-md-6">
                                <input datetimepicker class="form-control bg-secondary text-white" name="birth_day"
                                    id="birth_day" type="text" placeholder="Születési ideje" />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="house_number"
                                    name="house_number" type="text" value="" placeholder="Házszám">
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-secondary" type="submit">Kész</button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-md-6">
                <div id='section3' class="card mb-4">
                    <h2 class="card-title font-weight-bold">Anyakönyvi adatok</h2>
                    <form id="birthcert_form" action="{{ route('birth_certificate.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="degree" name="degree"
                                    type="text" placeholder="Iskolai végzettsége" required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="death_place"
                                    name="death_place" type="text" placeholder="Elhalálozás helysége" required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white"
                                    id="legally_binding_autopsy_number" name="legally_binding_autopsy_number"
                                    type="text" placeholder="Jogerős bont ítélet száma">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" type="text"
                                    placeholder="A fennálló vagy a megszűnt házasságkötés megkötésének helye" required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="job" name="job"
                                    type="text" placeholder="Foglalkozása">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="ash_storage_place"
                                    name="ash_storage_place" type="text" placeholder="Hamvak tárolási helysége">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="selfemployee_tax_number"
                                    name="selfemployee_tax_number" type="text" placeholder="Vállalkozói adószám">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" type="text"
                                    placeholder="és ideje">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="child_count"
                                    name="child_count" type="number" placeholder="Gyerekeinek száma">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white"
                                    id="wedding_birth_certificate_number" name="wedding_birth_certificate_number"
                                    type="text" placeholder="Házassági AK. száma">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white"
                                    id="deceased_birth_certificate_number" name="deceased_birth_certificate_number"
                                    type="text" placeholder="Elh. Szül. AK. száma">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="dead_husbands_count"
                                    name="dead_husbands_count" type="number" placeholder="(Volt) Házastársak száma">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="degree_of_relative"
                                    name="degree_of_relative" type="text" placeholder="Rokonsági fok">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="divorced_or_not"
                                    name="divorced_or_not" type="text" placeholder="Házas?">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="deceased_hidden_bc"
                                    name="name_of_person" type="hidden">
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-secondary" type="submit">Kész</button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-md-6">
                <div id='section4' class="card mb-4">
                    <h2 class="card-title font-weight-bold">Hűtés és UrnKIA adatok</h2>

                    <form id="urnkia_form" action="{{ route('urn_k_i_a_data.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="hv_is_done" name="hv_is_done"
                                    type="text" placeholder="Boncolás történt-e" required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="exhibition_date"
                                    name="exhibition_date" type="text" placeholder="Ügyfelvétel napja">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="choosen_chrematory"
                                    name="choosen_chrematory" type="text" placeholder="Választott Krematoriuma">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="hv_done_status_date"
                                    name="hv_done_status_date" type="text" placeholder="HvKÉSZ állapot dátuma">
                            </div>
                            <div class="col-md-6">
                                <select name="urn_inside_form" class="form-select bg-secondary" id="urn_inside_form">
                                    <option value="" class="text-gray-400">Urnabetét formája</option>
                                    @php
                                        $urns = App\Models\UrnInsert::all();
                                    @endphp
                                    @foreach ($urns as $urn)
                                        <option value="{{ $urn->name }}">{{ $urn->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="hv_have_status_date"
                                    name="hv_have_status_date" type="text" placeholder="HvVAN állapod dátum">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="hv_exhibition_date"
                                    name="hv_exhibition_date" type="text" placeholder="Hv Kiállítás dátuma">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control bg-secondary text-white" id="deceased_hidden_urnkia"
                                    name="name_of_deceased" type="hidden" required>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-secondary" type="submit">Kész</button>
                        </div>
                    </form>
                </div>
            </div>

        </section>
        <!--/Section container-->
        
            
                <form id="orderdata_form" method="POST" action="{{ route('orderdata.store') }}">
                    @csrf
                    @method('POST')
                    <input type="hidden" id="deceased_hidden" name="deceased_hidden" />
                    <input type="hidden" id="id_card_hidden" name="id_card_number" />
                    <button class="btn btn-secondary" type="submit">
                        Mentés
                    </button>
                </form>
         
        
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
        });
    </script>
</x-app-layout>

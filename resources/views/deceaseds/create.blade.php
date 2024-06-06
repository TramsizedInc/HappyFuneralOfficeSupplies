<x-app-layout>

    <div class="container-fluid w-full  mx-auto px-2 pt-8 lg:pt-16 text-sm">
        <!--Section container-->
        <h1
            class="flex items-center font-sans font-bold break-normal text-gray-200 px-2 text-xl mt-12 lg:mt-0 md:text-2xl mb-2">
            Elhunyt felvétele
        </h1>
        <section class="w-full lg:w-5/5 grid grid-cols-2 gap-8">
            <div>
                <div id='section1' class="h-400 p-8 mt-6 lg:mt-0 rounded shadow-lg bg-gray-100">
                    <h2 class="font-sans font-bold break-normal text-gray-800 px-2 pb-8 text-xl">Megrendelő adatai</h2>
                    <form id="customer_form" action="{{ route('customer.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded" id="customer"
                                    name="customer" type="text" placeholder="Neve" required>
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded" id="nation"
                                    name="nation" type="text" value="" placeholder="Ország" />
                            </div>
                            <div class="relative">
                                <input type="text" id="phone-input" aria-describedby="helper-text-explanation"
                                    class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    name="mobile_number" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"
                                    placeholder="0630-000-0000" required />
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="id_card_number" onchange="onIdcardChange(this)" name="id_card_number"
                                    type="text" placeholder="Személyi igazolvány száma" required />
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="address_id_number" name="address_id_number" type="text"
                                    placeholder="Lakcím igazolvány száma" required>
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded" id="born_name"
                                    name="born_name" type="text" value="" placeholder="Születési neve">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded" id="zip_code"
                                    name="zip_code" type="text" value="" placeholder="Irányítószám" />
                            </div>
                            <div>
                                <input type="email" id="email" name="email"
                                    class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    placeholder="Email" required />
                            </div>
                            <div>
                                <input datetimepicker class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="id_card_expire_date" name="id_card_expire_date"type="text"
                                    placeholder="Szig. érvényességi ideje" />
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded" type="text"
                                    value="" placeholder="Megrendelő személyi száma">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="mother_name" name="mother_name" type="text" value=""
                                    placeholder="Anyja neve" />
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded" id="city"
                                    name="city" type="text" value="" placeholder="Város">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="id_card_exhibition_place" name="id_card_exhibition_place" type="text"
                                    value="" placeholder="Szig. kiállítási helye" />
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="born_place" name="birth_place" type="text" value=""
                                    placeholder="Születési helye" />
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded" id="street"
                                    name="street" type="text" value="" placeholder="Utca" />
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="exhibiting_office" name="exhibiting_office" type="text" value=""
                                    placeholder="Szig. kiállító hatóság" />
                            </div>
                            <div>
                                <input datetimepicker
                                    class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    name="birth_day" id="birth_day" type="text" placeholder="Születési ideje" />
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="house_number" name="house_number" type="text" value=""
                                    placeholder="Házszám">
                            </div>
                        </div>
                        <div class="mt-4 text-right">
                            <button
                                class="shadow bg-gray-700 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                type="submit">
                                Kész
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <div id='section2' class="h-400 p-8 mt-6 lg:mt-0 rounded shadow-lg bg-gray-100">
                    <h2 class="font-sans font-bold break-normal text-gray-800 px-2 pb-8 text-xl">Elhunyt adatai</h2>
                    <form id="deceased_form" action="{{ route('deceaseds.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="deceased_name" onchange="onDeceasedChange(this)" name="deceased_name"
                                    type="text" placeholder="Elhunyt neve" required>
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="nation" name="nation" type="text" value=""
                                    placeholder="Ország" />
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    type="text" name="hospital_code" id="hospital_code"
                                    placeholder="Elhunyt jelenleg várakozik" required>
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    type="text" placeholder="Nyugdíjas törzsszám" required>
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="born_name" name="birth_name" type="text" value=""
                                    placeholder="Születési neve">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="zip_code" name="zip_code" type="text" value=""
                                    placeholder="Irányítószám" />
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    type="text" name="death_place" id="death_place" value=""
                                    placeholder="Halál helye">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="id_card_number" name="id_card_number" type="text" value=""
                                    placeholder="Személyi igazolvány száma">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="mother_name" name="mother_name" type="text" value=""
                                    placeholder="Anyja neve" />
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="city" name="city" type="text" value=""
                                    placeholder="Város">
                            </div>
                            <div>
                                <input datetimepicker
                                    class="form-input block w-full focus:bg-white bg-gray-200 rounded" id="death_time"
                                    name="death_time" type="text" placeholder="Halálozás napja" />
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="birth_place" name="birth_place" type="text" value=""
                                    placeholder="Születési helye" />
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="street" name="street" type="text" value=""
                                    placeholder="Utca" />
                            </div>
                            <div>
                                <input datetimepicker
                                    class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    name="birth_day" id="birth_day" type="text" placeholder="Születési ideje" />
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="house_number" name="house_number" type="text" value=""
                                    placeholder="Házszám">
                            </div>
                        </div>
                        <div class="mt-4 text-right">
                            <button
                                class="shadow bg-gray-700 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                type="submit">
                                Kész
                            </button>
                        </div>
                </div>
            </div>
            <div class="">

                <div id='section3' class="h-400 p-8 mt-6 lg:mt-0 rounded shadow-lg bg-gray-100">
                    <h2 class="font-sans font-bold break-normal text-gray-800 px-2 pb-8 text-xl">Anyakönyvi adatok</h2>

                    <form id="birthcert_form" action="{{ route('birth_certificate.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="degree" name="degree" type="text" placeholder="Iskolai végzettsége"
                                    required>
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="death_place" name="death_place" type="text"
                                    placeholder="Elhalálozás helysége" required>
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="legally_binding_autopsy_number" name="legally_binding_autopsy_number"
                                    type="text" placeholder="Jogerős bont ítélet száma">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    type="text"
                                    placeholder="A fennálló vagy a megszűnt házasságkötés megkötésének helye" required>
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="job" name="job" type="text" placeholder="Foglalkozása">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="ash_storage_place" name="ash_storage_place" type="text"
                                    placeholder="Hamvak tárolási helysége">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="selfemployee_tax_number" name="selfemployee_tax_number" type="text"
                                    placeholder="Vállalkozói adószám">
                            </div>
                            <div>
                                <input
                                    class="form-input block w-full focus:bg-white bg-gray-200 rounded date-flatpickr"
                                    type="text" placeholder="és ideje">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="child_count" name="child_count" type="number"
                                    placeholder="Gyerekeinek száma">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="wedding_birth_certificate_number" name="wedding_birth_certificate_number"
                                    type="text" placeholder="Házassági AK. száma">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="deceased_birth_certificate_number" name="deceased_birth_certificate_number"
                                    type="text" placeholder="Elh. Szül. AK. száma">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="dead_husbands_count" name="dead_husbands_count" type="number"
                                    placeholder="(Volt) Házastársak száma">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="degree_of_relative" name="degree_of_relative" type="text"
                                    placeholder="Rokonsági fok">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="divorced_or_not" name="divorced_or_not" type="text" placeholder="Házas?">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="deceased_hidden_bc" name="name_of_person" type="hidden">
                            </div>
                        </div>
                        <div class="mt-4 text-right">
                            <button
                                class="shadow bg-gray-700 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                type="submit">
                                Kész
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="">

                <div id='section4' class="h-400 p-8 mt-6 lg:mt-0 rounded shadow-lg bg-gray-100">
                    <h2 class="font-sans font-bold break-normal text-gray-800 px-2 pb-8 text-xl">Hűtés és UrnKIA adatok
                    </h2>

                    <form id="urnkia_form" action="{{ route('urn_k_i_a_data.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="hv_is_done" name="hv_is_done" type="text"
                                    placeholder="Boncolás történt-e" required>
                            </div>
                            <div>
                                <input
                                    class="form-input block w-full focus:bg-white bg-gray-200 rounded date-flatpickr"
                                    id="exhibition_date" name="exhibition_date" type="text"
                                    placeholder="Ügyfelvétel napja">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="choosen_chrematory" name="choosen_chrematory" type="text"
                                    placeholder="Választott Krematoriuma">
                            </div>
                            <div>
                                <input
                                    class="form-input block w-full focus:bg-white bg-gray-200 rounded date-flatpickr"
                                    id="hv_done_status_date" name="hv_done_status_date" type="text"
                                    placeholder="HvKÉSZ állapot dátuma">
                            </div>
                            <div>
                                <select name="urn_inside_form"
                                    class="form-select block w-full focus:bg-white bg-gray-200 rounded"
                                    id="urn_inside_form">
                                    <option value="" class="text-gray-400">Urnabetét formája</option>
                                    @php
                                        $urns = App\Models\UrnInsert::all();
                                    @endphp
                                    @foreach ($urns as $urn)
                                        <option value="{{ $urn->name }}">{{ $urn->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <input
                                    class="form-input block w-full focus:bg-white bg-gray-200 rounded date-flatpickr"
                                    id="hv_have_status_date" name="hv_have_status_date" type="text"
                                    placeholder="HvVAN állapod dátum">
                            </div>
                            <div>
                                <input
                                    class="form-input block w-full focus:bg-white bg-gray-200 rounded date-flatpickr"
                                    id="hv_exhibition_date" name="hv_exhibition_date" type="text"
                                    placeholder="Hv Kiállítás dátuma">
                            </div>
                            <div>
                                <input class="form-input block w-full focus:bg-white bg-gray-200 rounded"
                                    id="deceased_hidden_urnkia" name="name_of_deceased" type="hidden" required>
                            </div>
                        </div>
                        <div class="mt-4 text-right">
                            <button
                                class="shadow bg-gray-700 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                type="submit">
                                Kész
                            </button>
                        </div>
                    </form>
                </div>

                <!--/Card-->

                <!--divider-->

                <!--Title-->

        </section>
        <!--/Section container-->
        <div class="w-full lg:w-5/5 items-center text-center py-5">
            <form id="orderdata_form" method="POST" action="{{ route('orderdata.store') }}">
                @csrf
                @method('POST')
                <input type="hidden" id="deceased_hidden" name="deceased_hidden" />
                <input type="hidden" id="id_card_hidden" name="id_card_number" />
                <button
                    class="shadow bg-gray-700 hover:bg-gray-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                    type="submit">
                    Mentés
                </button>
            </form>
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
                            // Optionally, update the form or page content based on the response
                        }
                    }
                });
            });
        });
    </script>
</x-app-layout>

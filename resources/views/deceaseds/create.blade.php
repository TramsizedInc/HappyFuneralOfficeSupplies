
<x-app-layout>
<div class="container-fluid w-full  mx-auto px-2 pt-8 lg:pt-16 mt-10">
  <!--Section container-->
  <h1 class="flex items-center font-sans font-bold break-normal text-gray-200 px-2 text-xl mt-12 lg:mt-0 md:text-2xl mb-2">
    Elhunyt felvétele
</h1>
  <section class="w-full lg:w-5/5 grid grid-cols-2 gap-4">
    <div>

      <div class="p-8 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
        <h2 id='section1' class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Megrendelő adatai</h2>

      <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
          @csfr
      <div class="md:flex mb-2">
        <div class="md:w-1/5 me-2">
          <input class="form-input block w-full focus:bg-white" id="customer" name="customer" type="text" placeholder="Neve" required>
        </div>
        <div class="md:w-1/5 me-2">
          <input class="form-input block w-full focus:bg-white" id="born_name" name="born_name" type="text" value="" placeholder="Születési neve">
        </div>
        <div class="md:w-1/5 me-2">
          <input class="form-input block w-full focus:bg-white" id="mother_name" name="mother_name" type="text" value="" placeholder="Anyja neve">
        </div>
        <div class="md:w-1/5 me-2">
          <input class="form-input block w-full focus:bg-white" id="born_place" name="born_place" type="text" value="" placeholder="Születési helye">
        </div>
        <div class="md:w-1/5 me-2">
          <input datetimepicker  name="yearly_check_date" class="form-input block w-full focus:bg-white date-flatpickr" type="text" placeholder="Születési ideje" />
        </div>
      </div>
      <div class="md:flex mb-2">
        <div class="md:w-1/6 me-2 ">
          <label class="block text-gray-600 font-bold md:text-left md:mb-0 py-2 px-auto" for="my-textfield">
            Lakcíme
          </label>
        </div>
        <div class="md:w-1/6 me-2">
          <input class="form-input block w-full focus:bg-white" id="nation" name="nation" type="text" value="" placeholder="Ország">
        </div>
        <div class="md:w-1/6 me-2">
          <input class="form-input block w-full focus:bg-white" id="zip_code" name="zip_code" type="text" value="" placeholder="Irányítószám">
        </div>
        <div class="md:w-1/6 me-2">
          <input class="form-input block w-full focus:bg-white" id="city" name="city"type="text" value="" placeholder="Város">
        </div>
        <div class="md:w-1/6 me-2">
          <input class="form-input block w-full focus:bg-white" id="street" name="street" type="text" value="" placeholder="Utca">
        </div>
        <div class="md:w-1/6 me-2">
          <input class="form-input block w-full focus:bg-white" id="house_number" name="house_number" type="text" value="" placeholder="Házszám">
        </div>
      </div>

      <div class="md:flex mb-2">
        <div class="relative md:w-1/2 me-2">
          <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                  <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
              </svg>
          </div>
          <input type="text" id="phone-input" aria-describedby="helper-text-explanation" class="ps-10  form-input block w-full focus:bg-white" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Telenfonszám" required />
        </div>

        <div class="md:w-1/2 me-2">
          <input type="email" id="email" class="form-input block w-full focus:bg-white" placeholder="Email" required />
        </div>
      </div>

      <div class="md:flex mb-2">
        <div class="md:w-1/4 me-2">
          <input class="form-input block w-full focus:bg-white" id="id_card_number" name="id_card_number" type="text" placeholder="Személyi igazolvány száma" required>
        </div>
        <div class="md:w-1/4 me-2">
          <input datetimepicker class="form-input block w-full focus:bg-white date-flatpickr" id="id_card_expire_date" name="id_card_expire_date"type="text" placeholder="Szig. érvényességi ideje" />
        </div>
        <div class="md:w-1/4 me-2">
          <input class="form-input block w-full focus:bg-white" id="id_card_exhibition_place" name="id_card_exhibition_place" type="text" value="" placeholder="Szig. kiállítási helye">
        </div>
        <div class="md:w-1/4 me-2">
          <input class="form-input block w-full focus:bg-white" id="exhibiting_office" name="exhibiting_office" type="text" value="" placeholder="Szig. kiállító hatóság">
        </div>
      </div>
      <div class="md:flex mb-2">
        <div class="md:w-1/2 me-2">
          <input class="form-input block w-full focus:bg-white" id="address_id_number" name="address_id_number" type="text" placeholder="Lakcím igazolvány száma" required>
        </div>
        <div class="md:w-1/2 me-2">
          <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Megrendelő személyi száma">
        </div>
      </div>
      <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
          <button class="shadow bg-gray-700 hover:bg-gray-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
            Kész
          </button>
        </div>
      </div>
      </form>

      </div>
    </div>
    <div>

      <div id='section2' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
        <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Elhunyt adatai</h2>

        <form action="{{ route('deceaseds.store') }}" method="POST" enctype="multipart/form-data">
          @csfr
          <div class="md:flex mb-2">
            <div class="md:w-1/5 me-2">
              <input class="form-input block w-full focus:bg-white" id="name_of_deceased" name="name_of_deceased" type="text" placeholder="Neve" required>
            </div>
            <div class="md:w-1/5 me-2">
              <input class="form-input block w-full focus:bg-white" id="birth_name" name="birth_name"type="text" value="" placeholder="Születési neve">
            </div>
            <div class="md:w-1/5 me-2">
              <input class="form-input block w-full focus:bg-white" id="mother_name" name="mother_name" type="text" value="" placeholder="Anyja neve">
            </div>
            <div class="md:w-1/5 me-2">
              <input class="form-input block w-full focus:bg-white" id="deceaseds_birth_place" name="deceaseds_birth_place" type="text" value="" placeholder="Születési helye">
            </div>
            <div class="md:w-1/5 me-2">
              <input datetimepicker  id="deceased_birth_day" name="deceased_birth_day" class="form-input block w-full focus:bg-white date-flatpickr" type="text" placeholder="Születési ideje" />
            </div>
          </div>

          <div class="md:flex mb-2">
            <div class="md:w-1/6 me-2 ">
              <label class="block text-gray-600 font-bold md:text-left md:mb-0 py-2 px-auto" for="my-textfield">
                Lakcíme
              </label>
            </div>
            <div class="md:w-1/6 me-2">
              <input class="form-input block w-full focus:bg-white" id="country" name="country" type="text" value="" placeholder="Ország">
            </div>
            <div class="md:w-1/6 me-2">
              <input class="form-input block w-full focus:bg-white"  id="zip_code" name="zip_code" type="text" value="" placeholder="Irányítószám">
            </div>
            <div class="md:w-1/6 me-2">
              <input class="form-input block w-full focus:bg-white" id="city" name="city" type="text" value="" placeholder="Város">
            </div>
            <div class="md:w-1/6 me-2">
              <input class="form-input block w-full focus:bg-white" id="street" name="street" type="text" value="" placeholder="Utca">
            </div>
            <div class="md:w-1/6 me-2">
              <input class="form-input block w-full focus:bg-white" id="house_number" name="house_number" type="text" value="" placeholder="Házszám">
            </div>
          </div>
          <div class="md:flex mb-2">
            <div class="md:w-1/4 me-2">
              <input class="form-input block w-full focus:bg-white" type="text" name="hospital_code" id="hospital_code" placeholder="Elhunyt jelenleg várakozik" required>
            </div>
            <div class="md:w-1/4 me-2">
              <input class="form-input block w-full focus:bg-white" type="text" name="death_place" id="death_place" value="" placeholder="Halál helye">
            </div>
            <div class="md:w-1/4 me-2">
              <input datetimepicker id="yearly_check_date" name="yearly_check_date" class="form-input block w-full focus:bg-white date-flatpickr" id="death_time" name="death_time" type="text" placeholder="Halálozás napja" />
          </div>
            <div class="md:w-1/4 me-2">
              <input datetimepicker id="yearly_check_date" name="yearly_check_date" class="form-input block w-full focus:bg-white date-flatpickr" id="exhibition_time" name="exhibition_time" type="text" placeholder="Átadás ideje" />
          </div>
        </div>
        <div class="md:flex mb-2">
          <div class="md:w-1/4 me-2">
            <input class="form-input block w-full focus:bg-white" type="text" placeholder="Nyugdíjas törzsszám" required>
          </div>
          <div class="md:w-1/4 me-2">
            <input class="form-input block w-full focus:bg-white" id="id_card_number" name="id_card_number" type="text" value="" placeholder="Személyi igazolvány száma">
          </div>
          <div class="md:w-1/4 me-2">
            <input class="form-input block w-full focus:bg-white" id="address_id_number" name="address_id_number" type="text"  placeholder="Lakcím igazolvány száma" />
        </div>
          <div class="md:w-1/4 me-2">
            <input class="form-input block w-full focus:bg-white" id="deceaseds_passport_number" name="deceaseds_passport_number"type="text" placeholder="Útlevél száma" />
        </div>
      </div>
      <div class="md:flex mb-2">
        <div class="md:w-1/3 me-2">
          <input class="form-input block w-full focus:bg-white" id="deceaseds_driving_licence_number" name="deceaseds_driving_licence_number" type="text" placeholder="Jogosítvány száma" required>
        </div>
        <div class="md:w-1/3 me-2">
          <input class="form-input block w-full focus:bg-white" id="deceaseds_weight" name="deceaseds_weight" type="text" value="" placeholder="Elhunyt testsúlya">
        </div>
        <div class="md:w-1/3 me-2">
          <input class="form-input block w-full focus:bg-white" id="address_id_number" name="address_id_number" type="text" placeholder="Lakcím igazolvány száma" />
        </div>
      </div>
    <div class="md:flex md:items-center">
      <div class="md:w-1/3"></div>
      <div class="md:w-2/3">
        <button class="shadow bg-gray-700 hover:bg-gray-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
          Kész
        </button>
      </div>
    </div>
  </form>

    </div>
  </div>
  <div>

  <div id='section3' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
    <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Anyakönyvi adatok</h2>

    <form action="{{ route('birth_certificates.store') }}" method="POST" enctype="multipart/form-data">
      @csfr
      <div class="md:flex mb-2">
        <div class="md:w-1/4 me-2">
          <input class="form-input block w-full focus:bg-white" id="degree" name="degree" type="text" placeholder="Iskolai végzettsége" required>
        </div>
        <div class="md:w-1/4 me-2">
          <input class="form-input block w-full focus:bg-white" id="job"name="job" type="text" value="" placeholder="Foglalkozása">
        </div>
        <div class="md:w-1/4 me-2">
          <input class="form-input block w-full focus:bg-white" id="child_count" name="child_count" type="number" value="" placeholder="Gyerekeinek száma">
        </div>
        <div class="md:w-1/4 me-2">
          <input class="form-input block w-full focus:bg-white" id="degree_of_relative" name="degree_of_relative" type="text" value="" placeholder="Rokonsági fok">
        </div>
      </div>
      <div class="md:flex mb-2">
        <div class="md:w-1/4 me-2">
          <input class="form-input block w-full focus:bg-white" id="death_place" name="death_place" type="text" placeholder="Elhalálozás helysége" required>
        </div>
        <div class="md:w-1/4 me-2">
          <input class="form-input block w-full focus:bg-white" id="ash_storage_place" name="ash_storage_place" type="text" value="" placeholder="Hamvak tárolási helysége">
        </div>
        <div class="md:w-1/4 me-2">
          <input class="form-input block w-full focus:bg-white" id="deceased_birth_certificate_number" name="deceased_birth_certificate_number" type="text" value="" placeholder="Elh. Szül. AK. száma">
        </div>
        <div class="md:w-1/4 me-2">
          <input class="form-input block w-full focus:bg-white" id="wedding_birth_certificate_number" name="wedding_birth_certificate_number" type="text" value="" placeholder="Házassági AK. száma">
        </div>
      </div>
      <div class="md:flex mb-2">
        <div class="md:w-1/2 me-2">
          <input class="form-input block w-full focus:bg-white" type="text" placeholder=" A fennálló vagy a megszűnt házasságkötés megkötésének helye - " required>
        </div>
        <div class="md:w-1/2 me-2">
          <input datetimepicker id="yearly_check_date" name="yearly_check_date" class="form-input block w-full focus:bg-white date-flatpickr" type="text" placeholder="és ideje" />
        </div>
      </div>
      <div class="md:flex mb-2">
        <div class="md:w-1/3 me-2">
          <input class="form-input block w-full focus:bg-white" id="dead_husbands_count" name="dead_husbands_count" type="text" placeholder="Elh házastárs Hak száma" required>
        </div>
        <div class="md:w-1/3 me-2">
          <input class="form-input block w-full focus:bg-white" id="legally_binding_autopsy_number" name="legally_binding_autopsy_number" type="text" value="" placeholder="Jogerős bont ítélet száma">
        </div>
        <div class="md:w-1/3 me-2">
          <input class="form-input block w-full focus:bg-white" id="selfemployee_tax_number" name="selfemployee_tax_number" type="text" placeholder="Vállalkozói adószám" />
        </div>
      </div>
    <div class="md:flex md:items-center">
      <div class="md:w-1/3"></div>
      <div class="md:w-2/3">
        <button class="shadow bg-gray-700 hover:bg-gray-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
          Kész
        </button>
      </div>
    </div>
    </form>

  </div>
  </div>
  <div>

  <div id='section4' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
    <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Hűtés és UrnKIA adatok</h2>

    <form action="{{ route('urn_k_i_a_data.store') }}" method="POST" enctype="multipart/form-data">
      @csfr
        <div class="md:flex mb-2">
          <div class="md:w-1/3 me-2">
            <input class="form-input block w-full focus:bg-white" id="hv_is_done" name="hv_is_done" type="text" placeholder="Boncolás történt-e" required>
          </div>
          <div class="md:w-1/3 me-2">
            <input class="form-input block w-full focus:bg-white" id="choosen_chrematory" name="choosen_chrematory" type="text" value="" placeholder="Választott Krematoriuma">
          </div>
          <div class="md:w-1/3">

              <select name="" class="form-select block w-full focus:bg-white" id="my-select">
                  <option value="" class="text-gray-200">Urnabetét formája</option>
                  @php
                    $urns = App\Models\Urn::all();
                  @endphp
                  @foreach ($urns as $urn)
                    <option value="{{ $urn->name }}">{{ $urn->name }}</option>
              </select>

        </div>

      </div>

      <div class="md:flex mb-2">
        <div class="md:w-1/4 me-2">
          <input datetimepicker class="form-input block w-full focus:bg-white date-flatpickr" id="exhibition_date" name="exhibition_date" type="text" placeholder="Ügyfelvétel napja" />
        </div>
        <div class="md:w-1/4 me-2">
          <input datetimepicker class="form-input block w-full focus:bg-white date-flatpickr" id="hv_done_status_date" name="hv_done_status_date" type="text" placeholder="HvKÉSZ állapot dátuma" />
        </div>
        <div class="md:w-1/4 me-2">
          <input datetimepicker class="form-input block w-full focus:bg-white date-flatpickr" id="hv_have_status_date" name="hv_have_status_date" type="text" placeholder="HvVAN állapod dátum" />
        </div>
        <div class="md:w-1/4 me-2">
          <input datetimepicker class="form-input block w-full focus:bg-white date-flatpickr" id="hv_exhibition_date" name="hv_exhibition_date" type="text" placeholder="Hv Kiállítás dátuma" />
        </div>
      </div>




      <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
          <button class="shadow bg-gray-700 hover:bg-gray-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
            Kész
          </button>
        </div>
      </div>
    </form>

  </div>
  <!--/Card-->

  <!--divider-->

  <!--Title-->

</section>
<!--/Section container-->


</div>


</x-app-layout>


<x-print>
    <div class="container-fluid w-full  mx-auto px-2 pt-8 lg:pt-16 mt-10">
      <!--Section container-->
    
      <section class="w-full lg:w-2/5 mx-auto grid">

        <div>
          <div class="pl-24 pt-8 pb-8 pr-8 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
            <h1 class="flex items-center font-sans font-bold break-normal text-gray-700 pb-8 px-2 text-xl mt-12 lg:mt-0 md:text-2xl mb-2">
                Elhunyt felvétele
            </h1>
            <h2 id='section1' class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Megrendelő adatai</h2>
    
          <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
          <div class="">
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2" for="customer">
                    Megrendelő neve:
                </label>
               <input class="form-input block w-1/3 focus:bg-white" id="customer" name="customer" type="text" placeholder="Neve" required>
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2" for="born_name">
                    Megrendelő születési neve:
                </label>
              <input class="form-input block w-1/3 focus:bg-white" id="born_name" name="born_name" type="text" value="" placeholder="Születési neve">
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2" for="mother_name">
                    Megrendelő anyja neve:
                </label>
              <input class="form-input block w-1/3 focus:bg-white" id="mother_name" name="mother_name" type="text" value="" placeholder="Anyja neve">
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2" for="born_place">
                    Megrendelő születési helye:
                </label>
              <input class="form-input block w-1/3 focus:bg-white" id="born_place" name="born_place" type="text" value="" placeholder="Születési helye">
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2" for="born_date">
                    Megrendelő születési ideje:
                </label>
              <input datetimepicker  name="born_date" class="form-input block w-1/3 focus:bg-white date-flatpickr" type="text" placeholder="Születési ideje" />
            </div>
          </div>
          <div class="">
            <div class="md:w-3/5 flex ">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Megrendelő lakcíme:
                </label>
                <input class="form-input block w-1/3 focus:bg-white" id="nation" name="nation" type="text" value="" placeholder="Ország">
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    
                </label>
                <input class="form-input block w-1/3 focus:bg-white" id="zip_code" name="zip_code" type="text" value="" placeholder="Irányítószám">
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    
                </label>
                <input class="form-input block 1/3 focus:bg-white" id="city" name="city"type="text" value="" placeholder="Város">
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    
                </label>
                <input class="form-input block w-1/3 focus:bg-white" id="street" name="street" type="text" value="" placeholder="Utca">
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    
                </label>
                <input class="form-input block w-1/3 focus:bg-white" id="house_number" name="house_number" type="text" value="" placeholder="Házszám">
            </div>
          </div>
          <div class="">
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Telefonszáma:
                </label>
                 <input type="text" id="phone-input" aria-describedby="helper-text-explanation" class="ps-10  form-input block w-1/3 focus:bg-white" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Telenfonszám" required />
            </div>
    
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Email címe:
                </label>
              <input type="email" id="email" class="form-input block w-1/3 focus:bg-white" placeholder="Email" required />
            </div>
          </div>
    
          <div class="">
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Személyi igazolvány száma:
                </label>
              <input class="form-input block w-1/3 focus:bg-white" id="id_card_number" name="id_card_number" type="text" placeholder="Személyi igazolvány száma" required>
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Szig. érvényességi ideje:
                </label>
              <input datetimepicker class="form-input block w-1/3 focus:bg-white date-flatpickr" id="id_card_expire_date" name="id_card_expire_date"type="text" placeholder="Szig. érvényességi ideje" />
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Szig. kiállítási helye:
                </label>
              <input class="form-input block w-1/3 focus:bg-white" id="id_card_exhibition_place" name="id_card_exhibition_place" type="text" value="" placeholder="Szig. kiállítási helye">
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Szig. kiállító hatóság:
                </label>
              <input class="form-input block w-1/3 focus:bg-white" id="exhibiting_office" name="exhibiting_office" type="text" value="" placeholder="Szig. kiállító hatóság">
            </div>
          </div>
          <div class="">
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Lakcím igazolvány száma:
                </label>
              <input class="form-input block w-1/3 focus:bg-white" id="address_id_number" name="address_id_number" type="text" placeholder="Lakcím igazolvány száma" required>
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Megrendelő személyi száma:
                </label>
              <input class="form-input block w-1/3 focus:bg-white" type="text" value="" placeholder="Megrendelő személyi száma">
            </div>
          </div>
          </form>
          <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl pt-8">Elhunyt adatai</h2>
    
            <form action="{{ route('deceaseds.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="">
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Elhunyt neve:
                    </label>
                    <input class="form-input block w-1/3 focus:bg-white" id="name_of_deceased" name="name_of_deceased" type="text" placeholder="Neve" required>
                </div>
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Elhunyt születési neve:
                    </label>
                    <input class="form-input block w-1/3 focus:bg-white" id="birth_name" name="birth_name"type="text" value="" placeholder="Születési neve">
                </div>
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Elhunyt anyja neve:
                    </label>
                    <input class="form-input block w-1/3 focus:bg-white" id="mother_name" name="mother_name" type="text" value="" placeholder="Anyja neve">
                </div>
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Elhunyt születési helye:
                    </label>
                    <input class="form-input block w-1/3 focus:bg-white" id="deceaseds_birth_place" name="deceaseds_birth_place" type="text" value="" placeholder="Születési helye">
                </div>
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Elhunyt születési ideje:
                    </label>
                    <input datetimepicker  id="deceased_birth_day" name="deceased_birth_day" class="form-input block w-1/3 focus:bg-white date-flatpickr" type="text" placeholder="Születési ideje" />
                </div>
                </div>
  
                <div class="">
                <div class="md:w-3/5 flex ">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Elhunyt lakcíme:
                    </label>
                    <input class="form-input block w-1/3 focus:bg-white" id="country" name="country" type="text" value="" placeholder="Ország">
                </div>
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        
                    </label>
                    <input class="form-input block w-1/3 focus:bg-white"  id="zip_code" name="zip_code" type="text" value="" placeholder="Irányítószám">
                </div>
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        
                    </label>
                    <input class="form-input block w-1/3 focus:bg-white" id="city" name="city" type="text" value="" placeholder="Város">
                </div>
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        
                    </label>
                    <input class="form-input block w-1/3 focus:bg-white" id="street" name="street" type="text" value="" placeholder="Utca">
                </div>
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        
                    </label>
                    <input class="form-input block w-1/3 focus:bg-white" id="house_number" name="house_number" type="text" value="" placeholder="Házszám">
                </div>
                </div>
                <div class="">
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Elhunyt jelenleg várakozik:
                    </label>
                    <input class="form-input block w-1/3 focus:bg-white" type="text" name="hospital_code" id="hospital_code" placeholder="Elhunyt jelenleg várakozik" required>
                </div>
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Halál helye:
                    </label>
                    <input class="form-input block w-1/3 focus:bg-white" type="text" name="death_place" id="death_place" value="" placeholder="Halál helye">
                </div>
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Halálozás napja:
                    </label>
                    <input datetimepicker class="form-input block w-1/3 focus:bg-white date-flatpickr" id="death_time" name="death_time" type="text" placeholder="Halálozás napja" />
                </div>
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Átadás ideje:
                    </label>
                    <input datetimepicker class="form-input block w-1/3 focus:bg-white date-flatpickr" id="exhibition_time" name="exhibition_time" type="text" placeholder="Átadás ideje" />
                </div>
            </div>
            <div class="">
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Nyugdíjas törzsszám:
                    </label>
                <input class="form-input block w-1/3 focus:bg-white" type="text" placeholder="Nyugdíjas törzsszám" required>
                </div>
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Személyi igazolvány száma:
                    </label>
                <input class="form-input block w-1/3 focus:bg-white" id="id_card_number" name="id_card_number" type="text" value="" placeholder="Személyi igazolvány száma">
                </div>
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Lakcím igazolvány száma:
                    </label>
                <input class="form-input block w-1/3 focus:bg-white" id="address_id_number" name="address_id_number" type="text"  placeholder="Lakcím igazolvány száma" />
            </div>
                <div class="md:w-3/5 flex">
                    <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Útlevél száma:
                    </label>
                <input class="form-input block w-1/3 focus:bg-white" id="deceaseds_passport_number" name="deceaseds_passport_number"type="text" placeholder="Útlevél száma" />
            </div>
            </div>
            <div class="">
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Jogosítvány száma:
                </label>
                <input class="form-input block w-1/3 focus:bg-white" id="deceaseds_driving_licence_number" name="deceaseds_driving_licence_number" type="text" placeholder="Jogosítvány száma" required>
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                        Elhunyt testsúlya:
                </label>
                <input class="form-input block w-1/3 focus:bg-white" id="deceaseds_weight" name="deceaseds_weight" type="text" value="" placeholder="Elhunyt testsúlya">
            </div>
            </div>
        </form>
        <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 pt-8 text-xl">Anyakönyvi adatok</h2>
        
        <form action="{{ route('birth_certificate.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="">
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Iskolai végzettsége:
                 </label>
                <input class="form-input block w-1/3 focus:bg-white" id="degree" name="degree" type="text" placeholder="Iskolai végzettsége" required>
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Foglalkozása:
                 </label>
                <input class="form-input block w-1/3 focus:bg-white" id="job"name="job" type="text" value="" placeholder="Foglalkozása">
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Gyerekeinek szám:
                 </label>
                <input class="form-input block w-1/3 focus:bg-white" min=0 max=10 id="child_count" name="child_count" type="number" value="" placeholder="Gyerekeinek száma">
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Rokonsági fok:
                 </label>
            <input class="form-input block w-1/3 focus:bg-white" id="degree_of_relative" name="degree_of_relative" type="text" value="" placeholder="Rokonsági fok">
            </div>
        </div>
        <div class="">
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Elhalálozás helysége:
                 </label>
            <input class="form-input block w-1/3 focus:bg-white" id="death_place" name="death_place" type="text" placeholder="Elhalálozás helysége" required>
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Hamvak tárolási helyége:
                 </label>
            <input class="form-input block w-1/3 focus:bg-white" id="ash_storage_place" name="ash_storage_place" type="text" value="" placeholder="Hamvak tárolási helysége">
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Elh. Szül. AK. száma:
                 </label>
            <input class="form-input block w-1/3 focus:bg-white" id="deceased_birth_certificate_number" name="deceased_birth_certificate_number" type="text" value="" placeholder="Elh. Szül. AK. száma">
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Házassági AK. száma:
                </label>
            <input class="form-input block w-1/3 focus:bg-white" id="wedding_birth_certificate_number" name="wedding_birth_certificate_number" type="text" value="" placeholder="Házassági AK. száma">
            </div>
        </div>
        <div class="">
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    A fennálló vagy a megszűnt házasságkötés megkötésének helye -: 
                </label>
            <input class="form-input block w-1/3 focus:bg-white" type="text" placeholder=" A fennálló vagy a megszűnt házasságkötés megkötésének helye - " required>
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    és ideje:
                </label>
            <input datetimepicker class="form-input block w-1/3 focus:bg-white date-flatpickr" type="text" placeholder="és ideje" />
            </div>
        </div>
        <div class="">
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Elh házastárs Hak száma:
                </label>
            <input class="form-input block w-1/3 focus:bg-white" id="dead_husbands_count" name="dead_husbands_count" type="text" placeholder="Elh házastárs Hak száma" required>
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Jogerős bont ítélet száma:
                </label>
            <input class="form-input block w-1/3 focus:bg-white" id="legally_binding_autopsy_number" name="legally_binding_autopsy_number" type="text" value="" placeholder="Jogerős bont ítélet száma">
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Vállalkozói adószám:
                </label>
            <input class="form-input block w-1/3 focus:bg-white" id="selfemployee_tax_number" name="selfemployee_tax_number" type="text" placeholder="Vállalkozói adószám" />
            </div>
        </div>
        </form>
        <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 pt-8 text-xl">Hűtés és UrnKIA adatok</h2>
    
        <form action="{{ route('urn_k_i_a_data.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="">
              <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Boncolás történt-e:
                </label>
                <input class="form-input block w-1/3 focus:bg-white" id="hv_is_done" name="hv_is_done" type="text" placeholder="Boncolás történt-e" required>
              </div>
              <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Választott Krematoriuma:
                </label>
                <input class="form-input block w-1/3 focus:bg-white" id="choosen_chrematory" name="choosen_chrematory" type="text" value="" placeholder="Választott Krematoriuma">
              </div>
              <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Urnabetét formája:
                </label>
                  <select name="" class="form-select block w-1/3 focus:bg-white" id="my-select">
                      <option value="" class="text-gray-200">Urnabetét formája</option>
                      @php
                        $urns = App\Models\UrnInsert::all();
                        //$urns = \DB::table('')
                      @endphp
                      @foreach ($urns as $urn)
                        <option value="{{ $urn->name }}">{{ $urn->name }}</option>
                      @endforeach
                  </select>
    
            </div>
    
          </div>
    
          <div class="">
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Ügyfelvétel napja:
                </label>
              <input datetimepicker class="form-input block w-1/3 focus:bg-white date-flatpickr" id="exhibition_date" name="exhibition_date" type="text" placeholder="Ügyfelvétel napja" />
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    HvKÉSZ állapot dátuma:
                </label>
              <input datetimepicker class="form-input block w-1/3 focus:bg-white date-flatpickr" id="hv_done_status_date" name="hv_done_status_date" type="text" placeholder="HvKÉSZ állapot dátuma" />
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    HvVAN állapod dátum:
                </label>
              <input datetimepicker class="form-input block w-1/3 focus:bg-white date-flatpickr" id="hv_have_status_date" name="hv_have_status_date" type="text" placeholder="HvVAN állapod dátum" />
            </div>
            <div class="md:w-3/5 flex">
                <label  class="form-label w-1/3 text-gray-600 font-bold text-sm text-right me-2">
                    Hv Kiállítás dátuma:
                </label>
              <input datetimepicker class="form-input block w-1/3 focus:bg-white date-flatpickr" id="hv_exhibition_date" name="hv_exhibition_date" type="text" placeholder="Hv Kiállítás dátuma" />
            </div>
          </div>
    
        </form>
    
          </div>
        </div>
        
      </div>
      <!--/Card-->
    
      <!--divider-->
    
      <!--Title-->
    
    </section>
    <!--/Section container-->
    
    
    </div>
    
    
    </x-print>
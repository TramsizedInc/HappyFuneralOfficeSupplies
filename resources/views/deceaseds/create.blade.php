<x-app-layout>
<div class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-10 bg-white">
  <div class="w-full lg:w-1/5 px-6 text-xl text-gray-800 leading-normal">
    <p class="text-base font-bold py-2 lg:pb-6 text-gray-700">Menu</p>
    <div class="block lg:hidden sticky inset-0">
      <button id="menu-toggle" class="flex w-full justify-end px-3 py-3 bg-white lg:bg-transparent border rounded border-gray-600 hover:border-yellow-600 appearance-none focus:outline-none">
        <svg class="fill-current h-3 float-right" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
        </svg>
      </button>
    </div>
    <div class="w-full sticky inset-0 hidden max-h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 my-2 lg:my-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20" style="top:6em;" id="menu-content">
      <ul class="list-reset py-2 md:py-0">
        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent font-bold border-yellow-600">
          <a href='#section1' class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-600">
            <span class="pb-1 md:pb-0 text-sm">Megrendelő adatai</span>
          </a>
        </li>
        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
          <a href='#section2' class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-600">
            <span class="pb-1 md:pb-0 text-sm">Elhunyt adatai</span>
          </a>
        </li>
        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
          <a href='#section3' class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-600">
            <span class="pb-1 md:pb-0 text-sm">Anyakönyvi adatok</span>
          </a>
        </li>
        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
          <a href='#section4' class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-600">
            <span class="pb-1 md:pb-0 text-sm">Hűtés és UrnKIA adatok</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <!--Section container-->
  <section class="w-full lg:w-4/5">
    <!--Title-->
    <h1 class="flex items-center font-sans font-bold break-normal text-gray-700 px-2 text-xl mt-12 lg:mt-0 md:text-2xl">
        Elhunyt felvétele
    </h1>

    <!--divider-->
    <hr class="bg-gray-300 my-12">

    <!--Title-->
    <h2 id='section1' class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Megrendelő adatai</h2>

    <!--Card-->
    <div class="p-8 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
    <form>

<div class="md:flex mb-2">
  <div class="md:w-1/5 me-2">
    <input class="form-input block w-full focus:bg-white" type="text" placeholder="Neve" required>
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
  <div class="md:w-1/5 me-2">
    <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Születési neve">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
  <div class="md:w-1/5 me-2">
    <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Anyja neve">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
  <div class="md:w-1/5 me-2">
    <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Születési helye">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
  <div class="md:w-1/5 me-2">
    <input datetimepicker  name="yearly_check_date" class="form-input block w-full focus:bg-white date-flatpickr" type="text" placeholder="Születési ideje" />
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
</div>
<div class="md:flex mb-2">
  <label class="block text-gray-600 font-bold md:text-left md:mb-0 pr-4" for="my-textfield">
    Lakcíme
  </label>
</div>
<div class="md:flex mb-2">
  <div class="md:w-2/8 me-2">
    <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Ország">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
  <div class="md:w-2/8 me-2">
    <input class="form-input block w-full focus:bg-white"  type="text" value="" placeholder="Irányítószám">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
  <div class="md:w-1/8 me-2">
    <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Város">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
  <div class="md:w-2/8 me-2">
    <input class="form-input block w-full focus:bg-white"  type="text" value="" placeholder="Utca">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
  <div class="md:w-1/8 me-2">
    <input class="form-input block w-full focus:bg-white"  type="text" value="" placeholder="Házszám">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
</div>
<div class="md:flex mb-2">
  <label class="block text-gray-600 font-bold md:text-left md:mb-0 pr-4" for="my-textfield">
    Elérhetőségei
  </label>
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

  <div class="md:w-1/2">
    <input type="email" id="email" class="form-input block w-full focus:bg-white" placeholder="Email" required />   
  </div>  
</div>
<div class="md:flex mb-2">
  <label class="block text-gray-600 font-bold md:text-left md:mb-0 pr-4" for="my-textfield">
    Igazolványok
  </label>
</div>
<div class="md:flex mb-2">
  <div class="md:w-1/4 me-2">
    <input class="form-input block w-full focus:bg-white" type="text" placeholder="Személyi igazolvány száma" required>
  </div>
  <div class="md:w-1/4 me-2">
    <input datetimepicker class="form-input block w-full focus:bg-white date-flatpickr" type="text" placeholder="Szig. érvényességi ideje" />
  </div>
  <div class="md:w-1/4 me-2">
    <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Szig. kiállítási helye">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
  <div class="md:w-1/4 me-2">
    <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Szig. kiállító hatóság">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
</div>
<div class="md:flex mb-2">
  <div class="md:w-1/2 me-2">
    <input class="form-input block w-full focus:bg-white" type="text" placeholder="Lakcím igazolvány száma" required>
  </div>
  <div class="md:w-1/2 me-2">
    <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Megrendelő személyi száma">
  </div>
</div>
<div class="md:flex md:items-center">
  <div class="md:w-1/3"></div>
  <div class="md:w-2/3">
    <button  class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
      Kész
    </button>
    <a class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" href="#section2" >Következő</a>
  </div>

</div>
</form>

    </div>
    <!--/Card-->

    <!--divider-->
    <hr class="bg-gray-300 my-12">

    <!--Title-->
    <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Elhunyt adatai</h2>

    <!--Card-->
    <div id='section2' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

      <form>

        <div class="md:flex mb-2">
          <div class="md:w-1/5 me-2">
            <input class="form-input block w-full focus:bg-white" type="text" placeholder="Neve" required>
            <p class="py-2 text-sm text-gray-600"></p>
          </div>
          <div class="md:w-1/5 me-2">
            <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Születési neve">
            <p class="py-2 text-sm text-gray-600"></p>
          </div>
          <div class="md:w-1/5 me-2">
            <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Anyja neve">
            <p class="py-2 text-sm text-gray-600"></p>
          </div>
          <div class="md:w-1/5 me-2">
            <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Születési helye">
            <p class="py-2 text-sm text-gray-600"></p>
          </div>
          <div class="md:w-1/5 me-2">
            <input datetimepicker  name="yearly_check_date" class="form-input block w-full focus:bg-white date-flatpickr" type="text" placeholder="Születési ideje" />
            <p class="py-2 text-sm text-gray-600"></p>
          </div>
        </div>
        <div class="md:flex mb-2">
          <label class="block text-gray-600 font-bold md:text-left md:mb-0 pr-4" for="my-textfield">
            Lakcíme
          </label>
        </div>
        <div class="md:flex mb-2">
          <div class="md:w-2/8 me-2">
            <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Ország">
            <p class="py-2 text-sm text-gray-600"></p>
          </div>
          <div class="md:w-2/8 me-2">
            <input class="form-input block w-full focus:bg-white"  type="text" value="" placeholder="Irányítószám">
            <p class="py-2 text-sm text-gray-600"></p>
          </div>
          <div class="md:w-1/8 me-2">
            <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Város">
            <p class="py-2 text-sm text-gray-600"></p>
          </div>
          <div class="md:w-2/8 me-2">
            <input class="form-input block w-full focus:bg-white"  type="text" value="" placeholder="Utca">
            <p class="py-2 text-sm text-gray-600"></p>
          </div>
          <div class="md:w-1/8 me-2">
            <input class="form-input block w-full focus:bg-white"  type="text" value="" placeholder="Házszám">
            <p class="py-2 text-sm text-gray-600"></p>
          </div>
        </div>
        <div class="md:flex mb-2">
          <div class="md:w-1/5 me-2">
            <input class="form-input block w-full focus:bg-white" type="text" placeholder="Elhunyt jelenleg várakozik" required>
            <p class="py-2 text-sm text-gray-600"></p>
          </div>
          <div class="md:w-1/5 me-2">
            <input class="form-input block w-full focus:bg-white" type="text" value="" placeholder="Születési neve">
            <p class="py-2 text-sm text-gray-600"></p>
          </div>
          <div class="md:w-1/4">
            <input datetimepicker id="yearly_check_date" name="yearly_check_date" class="form-input block w-full focus:bg-white date-flatpickr" type="text" placeholder="Halálozás napja" />
            <p class="py-2 text-sm text-gray-600"></p>
         </div>
          <div class="md:w-1/4">
            <input datetimepicker id="yearly_check_date" name="yearly_check_date" class="form-input block w-full focus:bg-white date-flatpickr" type="text" placeholder="Átadás ideje" />
            <p class="py-2 text-sm text-gray-600"></p>
         </div>
        </div>
<div class="md:flex mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
    </label>
  </div>
  <div class="md:w-2/3">
    <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
</div>  
<div class="md:flex mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
      Halál helye
    </label>
  </div>
  <div class="md:w-2/3">
    <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
</div>
<div class="md:flex mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
      Halálozás napja
    </label>
  </div>
  
</div>
<div class="md:flex mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
      Átadás ideje
    </label>
  </div>
  <div class="md:w-2/3">
     <input datetimepicker id="yearly_check_date" name="yearly_check_date" class="form-input block w-full focus:bg-white date-flatpickr" type="text" placeholder="Válassz időpontot" />
     <p class="py-2 text-sm text-gray-600"></p>
  </div>
</div>
<div class="md:flex mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
      Nyugdíjas törzsszám
    </label>
  </div>
  <div class="md:w-2/3">
    <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
</div> 
<div class="md:flex mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
    Személyi igazolvány száma
    </label>
  </div>
  <div class="md:w-2/3">
    <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
</div>
<div class="md:flex mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
    Lakcím igazolvány száma
    </label>
  </div>
  <div class="md:w-2/3">
    <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
</div> 

<div class="md:flex mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
    Útlevél száma
    </label>
  </div>
  <div class="md:w-2/3">
    <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
</div>
<div class="md:flex mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
    Jogosítvány száma
    </label>
  </div>
  <div class="md:w-2/3">
    <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
</div>
<div class="md:flex mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
        Elhunyt testsúlya
    </label>
  </div>
  <div class="md:w-2/3">
    <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
</div>
<div class="md:flex mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
    Elhunyt magassága
    </label>
  </div>
  <div class="md:w-2/3">
    <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
    <p class="py-2 text-sm text-gray-600"></p>
  </div>
</div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
        Kész
      </button>
    </div>
  </div>
</form>

  </div>
  <!--/Card-->

  <!--divider-->
  <hr class="bg-gray-300 my-12">

  <!--Title-->
  <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Anyakönyvi adatok</h2>

  <!--Card-->
  <div id='section3' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

    <form>

    <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          Iskolai végzettsége
          </label>
      </div>
      <div class="md:w-2/3">
          <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
    </div>
    <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          Foglalkozása
          </label>
      </div>
      <div class="md:w-2/3">
          <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
    </div>
    <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          Gyerekeinek száma
          </label>
      </div>
      <div class="md:w-2/3">
          <input class="form-input block w-full focus:bg-white" id="my-textfield" type="number" min=0 max=10 value="">
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
    </div>
    <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
              Rokonsági fok
          </label>
      </div>
      <div class="md:w-2/3">
          <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
    </div>
    <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          Elhalálozás helysége
          </label>
      </div>
      <div class="md:w-2/3">
          <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
    </div>
    <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          Hamvak tárolási helysége
          </label>
      </div>
      <div class="md:w-2/3">
          <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
    </div>
    <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          Elh. Szül. AK. száma
          </label>
      </div>
      <div class="md:w-2/3">
          <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
    </div>
    <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          Házassági AK. száma:
          </label>
      </div>
      <div class="md:w-2/3">
          <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
    </div>
    <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          A fennálló vagy a megszűnt házasságkötés megkötésének helye - 
          </label>
      </div>
      <div class="md:w-2/3">
          <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
    </div>
    <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          és ideje
          </label>
      </div>
      <div class="md:w-2/3">
          <input datetimepicker id="yearly_check_date" name="yearly_check_date" class="form-input block w-full focus:bg-white date-flatpickr" type="text" placeholder="Válassz időpontot" />
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
      </div>
      <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          Elh házastárs Hak száma
          </label>
      </div>
      <div class="md:w-2/3">
          <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
    </div>
    <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          Jogerős bont ítélet száma
          </label>
      </div>
      <div class="md:w-2/3">
          <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
    </div>
    <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          Vállalkozói adószám
          </label>
      </div>
      <div class="md:w-2/3">
          <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
    </div>
      <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
          <button class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
            Kész
          </button>
        </div>
      </div>
    </form>

  </div>
  <!--/Card-->

  <!--divider-->
  <hr class="bg-gray-300 my-12">

  <!--Title-->
  <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Hűtés és UrnKIA adatok</h2>

  <!--Card-->
  <div id='section4' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

    <form>
      <div class="md:flex mb-6">
          <div class="md:w-1/3">
              <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                  Boncolás történt-e
              </label>
          </div>
          <div class="md:w-2/3">
              <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
              <p class="py-2 text-sm text-gray-600"></p>
          </div>
      </div>
      
      <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
              Választott Krematorium
          </label>
      </div>
      <div class="md:w-2/3">
          <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
    </div>
    <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          Vállalkozói adószám
          </label>
      </div>
      <div class="md:w-2/3">
          <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="">
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
    </div>
    <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          Ügyfelvétel napja
          </label>
      </div>
      <div class="md:w-2/3">
          <input datetimepicker id="yearly_check_date" name="yearly_check_date" class="form-input block w-full focus:bg-white date-flatpickr" type="text" placeholder="Válassz időpontot" />
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
      </div>
      <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          HvKÉSZ állapot dátuma
          </label>
      </div>
      <div class="md:w-2/3">
          <input datetimepicker id="yearly_check_date" name="yearly_check_date" class="form-input block w-full focus:bg-white date-flatpickr" type="text" placeholder="Válassz időpontot" />
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
      </div>
      <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          HvVAN állapod dátuma
          </label>
      </div>
      <div class="md:w-2/3">
          <input datetimepicker id="yearly_check_date" name="yearly_check_date" class="form-input block w-full focus:bg-white date-flatpickr" type="text" placeholder="Válassz időpontot" />
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
      </div>
      <div class="md:flex mb-6">
      <div class="md:w-1/3">
          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
          Hv Kiállítás dátuma
          </label>
      </div>
      <div class="md:w-2/3">
          <input datetimepicker id="yearly_check_date" name="yearly_check_date" class="form-input block w-full focus:bg-white date-flatpickr" type="text" placeholder="Válassz időpontot" />
          <p class="py-2 text-sm text-gray-600"></p>
      </div>
      </div>
      <div class="md:flex mb-6">
                      <div class="md:w-1/3">
                          <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                              Urnabetét formája
                          </label>
                      </div>
                      <div class="md:w-2/3">
                          <select name="" class="form-select block w-full focus:bg-white" id="my-select">
                              <option value="Default">Default</option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                          </select>

                          <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                      </div>
</div>
      <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
          <button class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
            Save
          </button>
        </div>
      </div>
    </form>

  </div>
  <!--/Card-->

  <!--divider-->
  <hr class="bg-gray-300 my-12">

  <!--Title-->
  <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Section 5</h2>

  <!--Card-->

  <!--/Card-->

</section>
<!--/Section container-->

<!--Back link -->
<div class="w-full lg:w-4/5 lg:ml-auto text-base md:text-sm text-gray-600 px-4 py-24 mb-12">
  <span class="text-base text-yellow-600 font-bold">&lt;</span> <a href="#" class="text-base md:text-sm text-yellow-600 font-bold no-underline hover:underline">Back link</a>
</div>

</div>


</x-app-layout>

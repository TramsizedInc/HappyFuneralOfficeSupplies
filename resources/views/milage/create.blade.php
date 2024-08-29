@extends('layouts.app')

@section('content')
    <!-- component -->
    <div class="row justify-content-center">
        <div class="col-xxl-3 col-md-8 mb-3">
            <div class="card text-white bg-dark">
                <div class="card-body justify-content-center">
                    <img src="{{ asset('storage/panda.gif') }}" height="423" class="img-fluid" alt="Panda Printer Image">
                </div>
            </div>
        </div>
        <div class="col-xxl-5 col-md-8">
            <div class="card shadow-lg border border-secondary rounded-lg overflow-hidden bg-black text-secondary">
                <div class="card-header border-bottom border-secondary align-items-center">
                    <h3 class="text-center text-danger fw-bold">Menetlevél Hozzáadása</h3>

                </div>

                <div class="card-body">
                    <form action="{{ route('milage.store') }}" method="POST" enctype="multipart/form-data" class="form">
                        @csrf
                        @method('POST')
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="driverName" class="form-label text-center mb-3 text-light fw-bold">Vezető neve</label>
                                <input type="text" class="form-control bg-secondary" id="driverName" name="driverName"
                                    required>
                            </div>
                            <div class="col-md-2">
                                <label for="licenseNumber" class="form-label text-center mb-3 text-light fw-bold">Rendszáma</label>
                                <input type="text" class="form-control bg-secondary " id="licenseNumber"
                                    name="licenseNumber" required>
                            </div>




                            <div class="col-md-2">
                                <label for="fuelPrice" class="form-label text-center mb-3 text-light   fw-bold">Üzemanyag ára
                                    (/liter)</label>
                                <input type="number" step="0.01" min="0" max="100"
                                    class="form-control bg-secondary" id="fuelPrice" name="fuelPrice" required>
                            </div>
                            <div class="col-md-5">
                                <label for="fuelAmount" class="form-label text-center mb-3 text-light  fw-bold">Fogyasztott
                                    üzemanyag
                                    mennyiség (liter)</label>
                                <input type="number" step="0.01" min="0" max="1000"
                                    class="form-control bg-secondary "   id="fuelAmount" name="fuelAmount" required>
                            </div>


                            <div class="col-md-5">
                                <label for="mileage" class="form-label text-center mb-3 text-light fw-bold">Távolság (km)</label>
                                <input type="number" step="0.01" min="0" max="1000000"
                                    class="form-control bg-secondary" id="mileage" name="mileage" required>
                            </div>
                            <div class="col-md-7">
                                <label  for="mileage" class="form-label text-center pb-4 text-light fw-bold" ></label>
                                <button type="submit" class=" btn  btn-success w-100">Kész</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <script></script>
    @endsection

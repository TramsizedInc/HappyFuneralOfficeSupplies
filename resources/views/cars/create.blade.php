@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-xxl-3 col-md-8 mb-3">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <img src="{{ asset('storage/panda.gif') }}" height="423" class="img-fluid" alt="Panda Printer Image">
                </div>
            </div>
        </div>

        <div class="col-xxl-6 col-md-8">
            <div class="card shadow-lg border border-secondary rounded-lg overflow-hidden bg-black text-secondary">
                <div class="card-header border-bottom border-secondary align-items-center">
                    <h3 class="text-center text-danger fw-bold">Autó Hozzáadása</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data"
                        class="form">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Rendszáma:</label>
                                    <input id="license_plate" name="license_plate" type="text" class="form-control" placeholder="Rendszám">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Márkája:</label>
                                    <input id="brand" name="brand" type="text" class="form-control" placeholder="Márka">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Modell:</label>
                                    <input id="model" name="model" type="text" class="form-control" placeholder="Modell">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Év:</label>
                                    <input id="year" name="year" type="number" class="form-control" min="1900" max="2099"
                                        placeholder="2024">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Kilométer óraállás:</label>
                                    <input id="odometer" name="odometer" type="number" class="form-control" min="0"
                                        placeholder="192325">
                                </div>
                            </div>

                            <div class="col-lg-3 mb-2 ">
                                <label class="small mb-1">Üzemanyag tpus:</label>
                                <select class="form-select" id="fuel_type"
                                    name="fuel_type" type="text" placeholder="Üzemanyag típus">
                                    <option value="Benzin" selected disabled hidden>Benzin</option>
                                    <option value="Benzin">Benzin</option>
                                    <option value="Gázolaj">Gázolaj (Dízel)</option>
                                    <option value="Benzin/LPG">Benzin/LPG</option>
                                    <option value="Benzin/CNG">Benzin/CNG</option>
                                    <option value="Benzin/LNG">Benzin/LNG</option>
                                    <option value="Benzin/hibrid">Benzin/hibrid</option>
                                    <option value="Gázolaj/hibrid">Gázolay/hibrid</option>
                                    <option value="Elektromos">Elektromos</option>
                                </select>
                            </div>

                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Biztosító Cég:</label>
                                    <input id="insurance_company" name="insurance_company" type="text" class="form-control" placeholder="Biztosító Cég">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Biztosítás kötvényszáma:</label>
                                    <input id="insurance_bond_number" name="insurance_bond_number" type="text" class="form-control" placeholder="Biztosítás kötvényszáma:">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Biztosítás megújítási dátuma:</label>
                                    <input id="insurance_renewal_date" name="insurance_renewal_date" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Forgalmi engedély száma:</label>
                                    <input id="registration_number" name="registration_number" type="text" class="form-control" placeholder="Forgalmi engedély száma:">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Motorszám:</label>
                                    <input id="engine_id" name="engine_id" type="text" class="form-control" placeholder="Motorszám">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Alvázszám:</label>
                                    <input id="vin_number" name="vin_number" type="text" class="form-control" placeholder="Alvázszám">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Műszaki vizsga lejárati dátuma:</label>
                                    <input id="registration_renewal_date" name="registration_renewal_date" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Tulajdonos:</label>
                                    <input id="owner" name="owner" type="text" class="form-control" placeholder="Tulajdonos">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Üzembentartó:</label>
                                    <input id="vehicle_operator" name="vehicle_operator" type="text" class="form-control" placeholder="Üzembentartó">
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 mb-2">
                                <div class="mb-3">
                                    <label class="form-label small mb-1" for="registrationImage">Regisztráció
                                        képe:</label>
                                    <form action="{{ route('upload.image') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input class="form-control" type="file" id="registrationImage"
                                            name="image">
                                        <div class="d-flex flex-column align-items-center justify-content-center">
                                            <button class="btn btn-secondary mt-1 text-upper fs-2 fw-bold w-100"
                                                type="submit">Feltöltés</button>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-6 mb-2">
                                <div class="mb-3">
                                    <label class="form-label small mb-1" for="insuranceImage">Biztosítás képe:</label>
                                    <form action="{{ route('upload.image') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input class="form-control" type="file" id="insuranceImage" name="image">
                                        <div class="d-flex flex-column align-items-center justify-content-center">
                                            <button class="btn btn-secondary mt-1 text-upper fs-2 fw-bold w-100"
                                                type="submit">Feltöltés</button>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <div class="col-lg-12 mb-2">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <button class="btn btn-success mt-1 text-upper fs-2 fw-bold w-100"
                                        type="submit">Kész</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

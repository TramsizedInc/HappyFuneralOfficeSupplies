<x-app-layout>

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
                                    <input type="text" class="form-control" placeholder="Rendszám">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Márkája:</label>
                                    <input type="text" class="form-control" placeholder="Rendszám">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Model:</label>
                                    <input type="text" class="form-control" placeholder="Rendszám">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Év:</label>
                                    <input type="min" class="form-control" min="1900" max="2099"
                                        placeholder="2024">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Biztosító Cég:</label>
                                    <input type="text" class="form-control" placeholder="Biztosító Cég">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Biztosítás megújítási dátuma:</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Regisztráció megújítási dátuma:</label>
                                    <input type="date" class="form-control" placeholder="Rendszám">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1">Tulajdonos:</label>
                                    <input type="text" class="form-control" placeholder="Tulajdonos">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
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
                            </div>
                            <div class="col-lg-6 mb-2">
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
                            </div>
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
</x-app-layout>

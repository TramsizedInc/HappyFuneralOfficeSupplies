@extends('layouts.app')

@section('content')

    <div class="row justify-content-center py-3 px-4">
        <div class="col-xl-2 col-xxl-2 col-lg-3 col-md-2 col-sm-2 col-xs-2"></div>
        <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-4 col-xs-2">
            <div class="input-group">
                <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search"
                    class="form-control pe-3" placeholder="Search for items">
                <span class="input-group-text">
                    <i class="fa fa-search"></i> <!-- Updated icon class -->
                </span>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-3 col-xs-2"> <!-- Column for the button -->
            <a href="{{ route('cars.create') }}" class="btn btn-primary"><i class="fas fa-plus p-2"></i> Új
                autó hozzáadása</a>
        </div>
    </div>


    <div class="row mt-5 justify-content-center">
        <div class="col-xxl-auto col-xl-9 col-lg-10 col-md-12 col-sm-12 col-xs-12">
            <div class="d-flex flex-column">
                <div class="overflow-auto">
                    <div id="table-custom" class="table table-responsive bg-dark border border-dark rounded">
                        <table class="table table-dark">
                            <thead class="table-dark text-white">
                                <tr class="text-center align-middle">
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary text-nowrap fs-5 text-nowrap text-nowrap">
                                        Rendszám</th>
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary text-nowrap fs-5 text-nowrap text-nowrap">
                                        Márka</th>
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary text-nowrap fs-5 text-nowrap text-nowrap">
                                        Model</th>
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary text-nowrap fs-5 text-nowrap text-nowrap">
                                        Év</th>
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary text-nowrap fs-5 text-nowrap text-nowrap">
                                        Biztosító Cég</th>
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary text-nowrap fs-5 text-nowrap text-nowrap">
                                        Biztosítás megújítási dátuma</th>
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary text-nowrap fs-5 text-nowrap text-nowrap">
                                        Regisztráció megújítási dátuma</th>
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary text-nowrap fs-5 text-nowrap text-nowrap">
                                        Tulajdonos</th>
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary text-nowrap fs-5 text-nowrap">
                                        Regisztráció
                                        képe</th>
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary text-nowrap fs-5 text-nowrap">
                                        Biztosítás képe</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center align-middle">
                                </tr>
                            </tbody>
                        </table>
                        <div class="py-1 px-4">
                            <nav class="d-flex justify-content-center">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <button class="page-link" type="button" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </button>
                                    </li>
                                    <li class="page-item active" aria-current="page">
                                        <button class="page-link" type="button">1</button>
                                    </li>
                                    <li class="page-item">
                                        <button class="page-link" type="button">2</button>
                                    </li>
                                    <li class="page-item">
                                        <button class="page-link" type="button">3</button>
                                    </li>
                                    <li class="page-item disabled">
                                        <button class="page-link" type="button">...</button>
                                    </li>
                                    <li class="page-item">
                                        <button class="page-link" type="button">8</button>
                                    </li>
                                    <li class="page-item">
                                        <button class="page-link" type="button">9</button>
                                    </li>
                                    <li class="page-item">
                                        <button class="page-link" type="button">10</button>
                                    </li>
                                    <li class="page-item">
                                        <button class="page-link" type="button" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </button>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

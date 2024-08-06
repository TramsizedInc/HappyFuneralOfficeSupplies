@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-xl-2 col-xxl-2 col-lg-3 col-md-2 col-sm-2 col-xs-2"></div>
        <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-4 col-xs-2"> <!-- Column for the input -->
            <div class="input-group">
                <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search"
                    class="form-control pe-3" placeholder="Search for items">
                <span class="input-group-text">
                    <i class="fa fa-search"></i> <!-- Updated icon class -->
                </span>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-3 col-xs-2"> <!-- Column for the button -->
            <a href="{{ route('offices.create') }}" class="btn btn-primary">Létrehozás</a>
        </div>
    </div>
    <div class="row mt-5 justify-content-center">
        <div class="col-xxl-10 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="d-flex flex-column">
                <div class="overflow-auto">
                    <div class="table-responsive">
                        <div class="table table-responsive bg-dark border border-dark rounded">
                            <table class="table table-dark caption-top">
                                <caption 
                                    class="border-bottom border-secondary text-uppercase fs-2 text-center text-danger">
                                    Írodák</caption>

                                <thead>
                                    <tr class="text-center align-middle">

                                       <th scope="col" class="border-end text-start w-xs-10 pe-0 border-secondary d-xs-table-cell d-sm-table-cell text-secondary" id="bigTable">
                                            Iroda Név</th>
                                       <th scope="col" class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary" id="bigTable">
                                            Iroda Vezető</th>
                                       <th scope="col" class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary" id="bigTable">
                                            Cím
                                        </th>
                                        <th scope="col" class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary" id="bigTable">
                                            Dolgozók száma</th>
                                        <th scope="col" class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary" id="bigTable">
                                            Módosítás
                                        </th>
                                        <th scope="col" class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary" id="bigTable">
                                            Törlés
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (\App\Models\Office::all() as $office)
                                        <tr class="text-center align-middle">

                                            <td id="smallTable"
                                                class="bg-dark text-start pe-0 border-end border-secondary table-secondary text-secondary ">
                                                {{ $office->office_name }}</td>
                                            <td id="smallTable"
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center">
                                                {{ $office->office_manager }}</td>
                                            <td id="smallTable"
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center">
                                                {{ $office->zip_code }} {{ $office->city }}, {{ $office->street }}
                                                {{ $office->house_number }}.</td>
                                            <td id="smallTable"
                                                class="bg-dark border-end border-secondary table-secondary text-secondary text-center">
                                                {{ $office->number_of_workers }}</td>
                                            <td id="smallTable"
                                                class="bg-dark border-end border-secondary table-secondary  text-center">
                                                <form action="{{ route('offices.edit', $office) }}">
                                                    <button type="submit" id="smallTable"
                                                        class="btn btn-warning text-decoration-none">Módosítás</button>
                                                </form>
                                            </td>
                                            <td id="smallTable" class="bg-dark  table-secondary text-center">
                                                <form method="POST" action="{{ route('offices.destroy', $office) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" id="smallTable"
                                                        class="btn btn-danger text-decoration-none">Törlés</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            <div class="py-3  px-4">
                                <nav class="d-flex bg-dark justify-content-center">
                                    <ul class="pagination bg-dark ">
                                        <li class="page-item">
                                            <button class="page-link" aria-label="Elöző">
                                                <span aria-hidden="true">«</span>
                                            </button>
                                        </li>
                                        <li class="page-item active" aria-current="page">
                                            <button class="page-link">1</button>
                                        </li>
                                        <li class="page-item">
                                            <button class="page-link">2</button>
                                        </li>
                                        <li class="page-item">
                                            <button class="page-link">3</button>
                                        </li>
                                        <li class="page-item disabled">
                                            <button class="page-link">...</button>
                                        </li>
                                        <li class="page-item">
                                            <button class="page-link">8</button>
                                        </li>
                                        <li class="page-item">
                                            <button class="page-link">9</button>
                                        </li>
                                        <li class="page-item">
                                            <button class="page-link">10</button>
                                        </li>
                                        <li class="page-item">
                                            <button class="page-link" aria-label="Következő">
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
    </div>


@endsection

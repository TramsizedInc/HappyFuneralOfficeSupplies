<x-app-layout>

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
            <a href="{{ route('brands.create') }}" class="btn btn-primary">Létrehozás</a>
        </div>
    </div>

    <div class="row mt-5 justify-content-center">
        <div class="col-xxl-6 col-xl-9 col-lg-10 col-md-12 col-sm-12 col-xs-12">
            <div class="d-flex flex-column">
                <div class="overflow-auto">
                    <div class="table-responsive">
                        <div class="table table-responsive bg-dark border border-dark rounded">
                            <table class="table table-dark">
                                <thead class="table-dark text-white">
                                    <tr class="text-center align-middle">
                                        <table class="table table-dark caption-top">
                                            <caption
                                                class="border-bottom border-secondary text-uppercase fs-2 text-center text-danger">
                                                Márkák</caption>

                                            <thead>
                                                <tr class="table-dark">
                                                    <th scope="col"
                                                        class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50">
                                                        Márka neve</th>
                                                    <th scope="col"
                                                        class="bg-dark text-center text-uppercase border-end border-secondary text-secondary w-25">
                                                        Módosítás
                                                    </th>
                                                    <th scope="col"
                                                        class="bg-dark text-center text-uppercase text-secondary w-25">
                                                        Törlés
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (\App\Models\Brand::all() as $brand)
                                                    <tr class="text-center align-middle">
                                                        <td
                                                            class="bg-dark border-end border-secondary text-upper table-secondary text-secondary text-center w-50">
                                                            {{ $brand->name }}</td>

                                                        <td
                                                            class="bg-dark border-end border-secondary table-secondary  text-center w-25">
                                                            <form action="{{ route('brands.edit', $brand) }}">
                                                                <button type="submit"
                                                                    class="btn btn-warning text-decoration-none">Módosítás</button>
                                                            </form>
                                                        </td>
                                                        <td
                                                            class="bg-dark border-end border-secondary table-secondary  text-center w-25">
                                                            <form method="POST"
                                                                action="{{ route('brands.destroy', $brand) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger text-decoration-none">Törlés</button>
                                                            </form>
                                                        </td>

                                                    </tr>
                                                @endforeach


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
</x-app-layout>

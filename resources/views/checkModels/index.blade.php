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
            <a href="{{ route('checkModels.create') }}" class="btn btn-primary"><i class="fas fa-plus p-2"></i> Új
                számla hozzáadása</a>
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
                                        class="border-end align-middle col-4 border-secondary text-secondary">Iroda
                                        Név</th>
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary">Számla
                                        Típus</th>
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary">
                                        Kiállítás</th>
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary">Lejárat
                                    </th>
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary">Összeg
                                    </th>
                                    <th scope="col"
                                        class="border-end align-middle col-4 border-secondary text-secondary">Műveletek
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (\App\Models\CheckModel::all() as $checkModel)
                                    <tr class="align-middle">
                                        <td
                                            class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                            {{ $checkModel->type }}</td>
                                        <td
                                            class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                        </td>
                                        <td
                                            class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                            {{ $checkModel->exhibition_date }}</td>
                                        <td
                                            class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                            {{ $checkModel->expire_date }}</td>
                                        <td
                                            class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                            {{ $checkModel->amount_to_be_paid }} FT</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <div class="d-flex justify-content-between align-items-center">

                                                <a href="{{ route('checkModel.show', $checkModel->id) }}">Megnézés</a>
                                                
                                                <form action="{{ route('checkModels.edit', $checkModel) }}"
                                                    class="d-inline-block ms-2">
                                                    <button type="submit"
                                                        class="btn btn-warning btn-sm">Szerkesztés</button>
                                                </form>


                                                <form method="POST"
                                                    action="{{ route('checkModels.destroy', $checkModel) }}"class="d-inline-block ms-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Törlés</button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
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

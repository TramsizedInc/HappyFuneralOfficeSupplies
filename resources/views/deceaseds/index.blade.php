@extends('layouts.app')

@section('content')
    <div class="columns is-centered">
        <div class="column is-2-desktop is-2-widescreen is-3-tablet is-2-mobile"></div>
        <div class="column is-3-desktop is-3-widescreen is-3-tablet is-4-mobile">
            <div class="field has-addons">
                <div class="control is-expanded">
                    <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search"
                        class="input" placeholder="Search for items">
                </div>
                <div class="control">
                    <a href="{{ route('deceaseds.create') }}" class="button is-primary">
                        <span class="icon">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span>Új Temetés felvétele</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="columns mt-5 is-centered">
        <div class="column is-8-widescreen is-10-desktop is-10-tablet is-12-mobile">
            <div class="overflow-hidden">
                <div class="table-container">
                    <table class="table is-dark is-bordered is-fullwidth is-rounded">
                        <caption class="has-text-danger is-uppercase is-size-2 has-text-centered border-bottom">
                            Temetések
                        </caption>
                        <thead>
                            <tr class="is-dark has-text-centered">
                                <th class="is-dark has-text-centered is-uppercase has-text-grey-light is-nowrap">Temetés
                                    Azonosító</th>
                                <th class="is-dark has-text-centered is-uppercase has-text-grey-light is-nowrap">Megrendelő
                                    neve</th>
                                <th class="is-dark has-text-centered is-uppercase has-text-grey-light is-nowrap">Megrendelő
                                    szem.ig. száma</th>
                                <th class="is-dark has-text-centered is-uppercase has-text-grey-light is-nowrap">Elhunyt
                                    neve</th>
                                <th class="is-dark has-text-centered is-uppercase has-text-grey-light is-nowrap">Urna típusa
                                </th>
                                <th class="is-dark has-text-centered is-uppercase has-text-grey-light is-nowrap">Halál helye
                                </th>
                                <th class="is-dark has-text-centered is-uppercase has-text-grey-light is-nowrap">Felvétel
                                    ideje</th>
                                <th class="is-dark has-text-centered">Műveletek</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-50 dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($orderdatas as $item)
                                <tr>
                                    <td class="is-dark has-text-centered is-uppercase has-text-grey-light">
                                        {{ $item->id }} </td>
                                    <td class="is-dark has-text-centered is-uppercase has-text-grey-light">
                                        {{ \App\Models\CustomerData::all()->find($item->customer_data_id)->customer }} </td>
                                    <td class="is-dark has-text-centered is-uppercase has-text-grey-light">
                                        {{ \App\Models\CustomerData::all()->find($item->customer_data_id)->id_card_number }}
                                    </td>
                                    <td class="is-dark has-text-centered is-uppercase has-text-grey-light">
                                        {{ \App\Models\Deceased_data::all()->find($item->deceased_data_id)->deceased_name }}
                                    </td>
                                    <td class="is-dark has-text-centered is-uppercase has-text-grey-light">
                                        {{ \App\Models\Urn_k_i_a_data::all()->find($item->_urn_k_i_a_datas_id)->urn_inside_form }}
                                    </td>
                                    <td class="is-dark has-text-centered is-uppercase has-text-grey-light">
                                        {{ \App\Models\BirthCertificate::all()->find($item->birth_certificate_id)->death_place }}
                                    </td>
                                    <td class="is-dark has-text-centered is-uppercase has-text-grey-light">
                                        {{ $item->created_at }} </td>
                                    <td class="is-dark has-text-centered">
                                        <div class="buttons">
                                            <a href="{{ route('deceaseds.show', ['deceased' => $deceaseds->id]) }}"
                                                class="button is-success is-small">Megnézés</a>
                                            <form action="{{ route('deceaseds.edit', $deceased) }}" class="is-inline-block">
                                                <button type="submit"
                                                    class="button is-warning is-small">Szerkesztés</button>
                                            </form>
                                            <form method="POST" action="{{ route('deceaseds.destroy', $deceased) }}"
                                                class="is-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="button is-danger is-small">Törlés</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="py-1 px-4">
                        <nav class="pagination is-centered" role="navigation" aria-label="pagination">
                            <ul class="pagination-list">
                                <li>
                                    <a class="pagination-link" aria-label="Goto page 1">1</a>
                                </li>
                                <li>
                                    <a class="pagination-link" aria-label="Goto page 2">2</a>
                                </li>
                                <li>
                                    <a class="pagination-link" aria-label="Goto page 3">3</a>
                                </li>
                                <li>
                                    <span class="pagination-ellipsis" aria-hidden="true">...</span>
                                </li>
                                <li>
                                    <a class="pagination-link" aria-label="Goto page 8">8</a>
                                </li>
                                <li>
                                    <a class="pagination-link" aria-label="Goto page 9">9</a>
                                </li>
                                <li>
                                    <a class="pagination-link" aria-label="Goto page 10">10</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

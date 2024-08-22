@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-4 offset-lg-3 col-md-10 mx-auto">
            <div class="card shadow-lg border-0 rounded-lg mb-4">
                <div class="card-header m-3 d-flex justify-content-between">
                    <h3 class="text-center font-weight-light">Előleg számla</h3>
                    <h2 class="card-title text-start font-weight-light">{{ $orderdata->inner_uuid }}</h2>
                </div>
                <div class="card-body ">
                    <div class="row mt-1">
                        <div class="col-lg-6">
                            <p class="lead fw-bold">Cég neve ide </p>
                            <p class="lead fw-bold">Telefon szám ide </p>
                            <p class="lead fw-bold">Cég címe ide </p>
                        </div>
                        <div class="col-lg-6">
                            <p class="lead text-end fw-bold">Felvételező neve: {{\App\Models\User::all()->find($orderdata->created_by)->name }}</p>
                            <p class="lead text-end fw-bold">Aktuális dátum ide {{ $orderdata->created_at }}</p>

                        </div>
                        <div class="border-bottom"></div>
                        <div class="col-lg-12">
                            <h3 class="mb-4">Megrendelői Adatok</h3>
                            <div class="border m-1 border-secondary rounded">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="mb-2 ps-1 pe-2 fw-bold">Név: <span class="fw-normal">
                                                {{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->customer_name_prefix }}
                                                {{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->customer_last_name }}
                                                {{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->customer_first_name }}</span></label>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Lakcíme:<span class="fw-normal"> {{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->city }},
                                            {{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->address }}</span></p>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Szig.sz: <span class="fw-normal">{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->id_card_number }}</span>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-2 ps-1 pe-2 fw-bold">Anyja Neve: <span class="fw-normal">
                                            {{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->mother_name }}</span></label>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Telefonszám: <span class="fw-normal"> {{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->mobile_number }} </span></p>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Email: <span
                                                class="fw-normal">{{ \App\Models\CustomerData::all()->find($orderdata->customer_data_id)->email }}</span></label>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mt-1"></div>
                        <div class="col-lg-12">
                            <h2 class="mb-4">Elhunyt Adatai</h2>
                            <div class="border m-1 border-secondary rounded">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="mb-2 ps-1 pe-2 fw-bold">Elhunyt neve:<span class="fw-normal">
                                            {{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->deceased_name_prefix }}
                                            {{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->deceased_last_name }}
                                            {{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->deceased_first_name }}</span></label>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Elh. leánykori neve:<span class="fw-normal">
                                            {{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->birth_name }}</span></p>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Elh. anyja neve: <span class="fw-normal">
                                            {{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->mother_name }}</span></p>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Elhunyt lakcím:<span class="fw-normal">
                                            {{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->city }},
                                            {{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->zip_code }} 
                                            {{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->street }} 
                                            {{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->house_number }} 
                                            . </span></p>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Elh. tárolási helye:<span class="fw-normal">
                                            {{ \App\Models\HutosIdo::all()->find(\App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->hospital_code)->kh_name}} </span></p>

                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-2 ps-1 pe-2 fw-bold">Elh. Szül. ideje: <span class="fw-normal">
                                            {{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->deceased_birth_day }}</span></label>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Elh. Szül. helye: <span class="fw-normal">
                                            {{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->deceased_birth_place }}</span></p>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Elh. ideje: <span
                                                class="fw-normal"> {{ \App\Models\Deceased_data::all()->find($orderdata->deceased_data_id)->death_time }}</span></label>

                                        <p class="mb-2 ps-1 pe-2 fw-bold">Hamv. Átadása: <span
                                                class="fw-normal">----</span></label>

                                        <p class="mb-2 ps-1 pe-2 fw-bold">Nyufi: <span
                                                class="fw-normal">pl.(545-23378-3)</span></label>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

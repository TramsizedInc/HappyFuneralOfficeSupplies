@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-4 offset-lg-3 col-md-10 mx-auto">
            <div class="card shadow-lg border-0 rounded-lg mb-4">
                <div class="card-header m-3 d-flex justify-content-between">
                    <h3 class="text-center font-weight-light">Megrendelő lap</h3>
                    <h2 class="card-title text-start font-weight-light">QR kód</h2>
                </div>
                <div class="card-body ">
                    <div class="row mt-1">
                        <div class="col-lg-6">
                            <p class="lead fw-bold">Cég neve ide</p>
                            <p class="lead fw-bold">Telefon szám ide</p>
                            <p class="lead fw-bold">Cég címe ide</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="lead text-end fw-bold">Felvételező neve: {{ Auth::user()->name }}</p>
                            <p class="lead text-end fw-bold">Aktuális dátum ide</p>

                        </div>
                        <div class="border-bottom"></div>
                        <div class="col-lg-12">
                            <h3 class="mb-4">Megrendelői Adatok</h3>
                            <div class="border m-1 border-secondary rounded">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="mb-2 ps-1 pe-2 fw-bold">Név: <span class="fw-normal"> János
                                                Kovács</span></label>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Lakcíme:<span class="fw-normal"> Budapest,
                                                Miskolci út 15. </span></p>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Szig.sz: <span
                                                class="fw-normal">123456789</span></p>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-2 ps-1 pe-2 fw-bold">Anyja Neve: <span class="fw-normal">
                                                Kovácsné
                                                Anna</span></label>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Telefonszám: <span class="fw-normal"> +36
                                                20 123 4567 </span></p>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Email: <span
                                                class="fw-normal">j.kovacs@example.com</span></label>

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
                                                Kovács Jonás</span></label>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Elh. leánykori neve:<span class="fw-normal">
                                                Kovács János</span></p>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Elh. anyja neve: <span class="fw-normal">
                                                Kovácsné Anna</span></p>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Elhunyt lakcím:<span class="fw-normal">
                                                Budapest,
                                                Miskolci út 15. </span></p>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Elh. tárolási helye:<span class="fw-normal">
                                                KHIgügy </span></p>

                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-2 ps-1 pe-2 fw-bold">Elh. Szül. ideje: <span class="fw-normal">
                                                1952.10.23</span></label>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Elh. Szül. helye: <span class="fw-normal">
                                                Budapest </span></p>
                                        <p class="mb-2 ps-1 pe-2 fw-bold">Elh. ideje: <span
                                                class="fw-normal">2024.05.27</span></label>

                                        <p class="mb-2 ps-1 pe-2 fw-bold">Hamv. Átadása: <span
                                                class="fw-normal">2024.06.20</span></label>

                                        <p class="mb-2 ps-1 pe-2 fw-bold">Nyufi: <span
                                                class="fw-normal">545-23378-3</span></label>

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
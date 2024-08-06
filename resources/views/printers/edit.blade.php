@extends('layouts.app')

@section('content')
    <!-- component -->
    <div class="row justify-content-center">
        <div class="col-xxl-3 col-md-8 mb-3">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <img src="{{ $printer->picture }}" height="423" class="img-fluid" alt="Printer Image">
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-md-8">
            <div class="card shadow-lg border border-secondary rounded-lg overflow-hidden bg-black text-secondary">
                <div class="card-header border-bottom border-secondary align-items-center">
                    <h3 class="text-center text-uppercase text-danger fw-bold">{{ $printer->brand }}
                        {{ $printer->type }}</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('printers.update',['printer' => $printer->id]) }}" method="POST" enctype="multipart/form-data"
                        class="form">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <div class="position-relative mb-4">
                                    <label for="toner-percent" class="fw-bold">Toner százaléka: <span class="fw-normal"
                                            id="tonerchange"> {{ $printer->toner_percent }}
                                            %</span></label>
                                    <input name="toner_percent" id="labels-range-input" onchange="tonerchange(this)"
                                        oninput="tonerchange(this)" type="range" value="{{ $printer->toner_percent }}"
                                        min="0" max="100" class="form-range">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="fs-4 text-secondary">0%</span>
                                        <span class="fs-4 text-secondary">50%</span>
                                        <span class="fs-4 text-secondary">100%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-xxl-6">
                                <div class="position-relative mb-4">
                                    <label for="drumm-percent" class="fw-bold">Dob egység százaléka: <span
                                            class="fw-normal" id="drummchange"> {{ $printer->drumm_percent }}
                                            %</span></label>
                                    <input name="drumm_percent" id="drumm-percent" type="range" value="{{ $printer->drumm_percent }}"
                                        min="0" max="100" class="form-range" onchange="drummchange(this)"
                                        oninput="drummchange(this)">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="fs-4 text-secondary">0%</span>
                                        <span class="fs-4 text-secondary">50%</span>
                                        <span class="fs-4 text-secondary">100%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6">
                                <label for="docs">Nyomtató Leírás</label>
                                <input name="documentation" type="text" id="docs"
                                    class="form-control bg-secondary text-white border-0" placeholder="{{ $printer->documentation }}"></input>
                            </div>
                            <div class="col-xxl-6">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <button type="submit" class="btn btn-success text-upper fs-2 fw-bold w-100">Kész</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function tonerchange(element) {
            var val = element.value;
            document.getElementById('tonerchange').innerHTML = val + "%";
        }

        function drummchange(element) {
            var val = element.value;
            document.getElementById('drummchange').innerHTML = val + "%";
        }
    </script>
@endsection

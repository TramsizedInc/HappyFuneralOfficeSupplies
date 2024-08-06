@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xxl-3 col-md-8 mb-3">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <img src="{{ asset('storage/' . $printer->picture) }}" height="423" class="img-fluid"
                        alt="Printer Image">
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-md-8">
            <div class="card shadow-lg border border-secondary rounded-lg overflow-hidden bg-black text-secondary">
                <div class="card-header border-bottom border-secondary align-items-center">
                    <h3 class="text-center text-danger fw-bold">{{ $printer->brand }} - {{ $printer->type }}</h3>
                </div>

                <div class="card-body">
                    <dl class="row">
                        
                        <dt class="col-sm-4">Típus:</dt>
                        <dd class="col-sm-8">{{ \App\Models\Printer::find($printer->id)->type }}</dd>

                        <dt class="col-sm-4">Márka:</dt>
                        <dd class="col-sm-8">{{ $printer->brand }}</dd>

                        <dt class="col-sm-4">Toner százaléka:</dt>
                        <dd class="col-sm-8">{{ $printer->toner_percent }}%</dd>

                        <dt class="col-sm-4">Dob egység százaléka:</dt>
                        <dd class="col-sm-8">{{ $printer->drumm_percent }}%</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    < <script>
        function donerchange(element) {
            var val = element.value;
            document.getElementById('donerchange').innerText = val + "%";
        }

        function drummchange(element) {
            var val = element.value;
            document.getElementById('drummchange').innerText = val + "%";
        }

        document.getElementById('file-upload').addEventListener('change', function(e) {
            var fileName = e.target.files[0].name;
            var label = document.querySelector('.custom-file-label');
            label.textContent = fileName;
        });
    </script>
@endsection

<x-app-layout>
    <!-- component -->
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
                    <h3 class="text-center text-danger fw-bold">Nyomtató Hozzáadása</h3>

                </div>

                <div class="card-body">
                    <form action="{{ route('printers.store') }}" method="POST" enctype="multipart/form-data"
                        class="form">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1" for="office_id">Íroda</label>
                                    <select name="office_id" class="form-select bg-secondary" id="office_id">
                                        @foreach (\App\Models\Office::all() as $office)
                                            <option value="{{ $office->id }}">{{ $office->zip_code }}
                                                {{ $office->city }}, {{ $office->street }} {{ $office->house_number }}.
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1" for="office_id">Típus</label>
                                    <select name="office_id" class="form-select bg-secondary" id="office_id">
                                        @foreach (\App\Models\PrinterType::all() as $pritertype)
                                            <option value="{{ $pritertype->id }}">{{ $pritertype->name }}

                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1" for="brand">Márka</label>
                                    <select name="brand" class="form-select bg-secondary " id="brand">
                                        @foreach (\App\Models\Brand::all() as $brand)
                                            <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="position-relative mb-4">
                                    <label for="toner-percent">Toner százaléka <span id="donerchange"></span>%</label>
                                    <input name="toner_percent" id="toner-percent" type="range" value="0"
                                        min="0" max="100" class="form-range">

                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="fs-4 text-secondary">0%</span>
                                        <span class="fs-4 text-secondary">50%</span>
                                        <span class="fs-4 text-secondary">100%</span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 col-xxl-6">
                                <label for="cover-photo" class="form-label">Kép a nyomtatóról</label>
                                <div class="mt-1 d-flex bg-secondary justify-content-center rounded border-dashed p-1">
                                    <div class="text-center">
                                        <i class="fas fa-image text-muted fa-2x"></i>
                                        <!-- FontAwesome Icon for Image -->
                                        <p class="text-xs text-muted">PNG, JPG, GIF maximum 10MB</p>
                                    </div>

                                    <div class="align-middle">
                                        <label for="file-upload" class="form-label text-nowrap">Fájl feltöltés</label>
                                        <div class="custom-file">
                                            <input id="file-upload" name="picture" type="file"
                                                class="form-control-file btn btn-dark text-white" accept="image/*">
                                            <label class="custom-file-label" for="file-upload">Válassz egy fájlt vagy
                                                húzd
                                                be ide</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-xxl-6">
                                <div class="position-relative mb-4">
                                    <label for="drumm-percent">Dob egység százaléka <span
                                            id="drummchange"></span>%</label>
                                    <input name="drumm_percent" id="drumm-percent" type="range" value="0"
                                        min="0" max="100" class="form-range">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="fs-4 text-secondary">0%</span>
                                        <span class="fs-4 text-secondary">50%</span>
                                        <span class="fs-4 text-secondary">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-12">
                            <div class="mt-5 pt-3 d-flex flex-column align-items-center justify-content-center">
                                <button type="submit" class="btn btn-success w-100">Kész</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <script>
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
</x-app-layout>

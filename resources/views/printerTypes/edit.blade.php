<x-app-layout>
    <!-- component -->
    <div class="row justify-content-center">
        <div class="col-xxl-3 col-md-8 mb-3">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <img src="{{ asset('storage/panda.gif') }}" height="423" class="img-fluid" alt="Printer Image">
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-md-8">
            <div class="card shadow-lg border border-secondary rounded-lg overflow-hidden bg-black text-secondary">
                <div class="card-header border-bottom border-secondary align-items-center">
                    <h3 class="text-center text-uppercase text-danger fw-bold">{{ $printerType->name }}
                    </h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('printerTypes.update', ['printerType' => $printerType->id]) }}"
                        method="POST" enctype="multipart/form-data" class="form">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 col-xxl-6">
                                <div class="form-group">
                                    <label for="">Típus neve:</label>
                                    <input type="text" for="drumm-percent" class="form-control">

                                </div>
                            </div>
                            <div class="col-xxl-6">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button type="submit"
                                        class="btn btn-success text-upper  fw-bold w-100">Kész</button>
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
</x-app-layout>

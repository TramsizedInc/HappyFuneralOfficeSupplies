<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" />

    {{-- Faviicons --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('storage/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('storage/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('storage/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('storage/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('storage/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('storage/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('storage/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('storage/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('storage/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('storage/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/favicons/favicon-16x16.png') }}">
</head>

<body style="background-image: url('{{ asset('storage/login_card.jpg') }}');">

    <div class="container mt-5">
        <div class="card-container">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        
                            <img src="{{ asset('storage/logo.png') }}" id="logo" class="img-fluid rounded"
                                alt="logo">
                        
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="col-md-12 welcome-col">
                                <h2 class="text-center text-nowrap mb-2">{{ config('app.name', 'Laravel') }}</h2>
                                <div class="welcome-text text-secondary mt-2 mb-2" id="firstWelcomeText">
                                    Üdvözlet a munkahelyén! Itt minden segítség és támogatás rendelkezésre áll Ön
                                    számára.
                                    Legyen szép napja!
                                </div>
                                <div class="welcome-text text-secondary mt-5 hidden" id="secondWelcomeText">
                                    Kérlek válasz írodát,hogy megkezdhesd a munkád!
                                </div>
                                <form id="loginForm" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Felhasználónév</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            <input type="text" class="form-control" id="name" name="name"
                                                :value="old('name')" required autofocus autocomplete="username">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Jelszó</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            <input type="password" name="password" class="form-control" id="password"
                                                required autocomplete="current-password">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-secondary w-100"
                                        id="firstButton">{{ __('Bejelentkezés') }}</button>
                                </form>
                                <div class="mt-3 justify-content-center text-center">
                                    <button type="button" id="switchButton"
                                        class="btn hidden btn-secondary w-40 p-2">
                                        <i class="fas fa-arrow-right fs-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="mb-3" id="selectOffice">
        <label for="" class="form-label">Válassz irodát</label>
        <select class="form-select form-select-lg" name="" id="">
            <option selected>Válassz irodát...</option>
            @foreach (\App\Models\Office::all() as $office)
                <option value="{{ $office->id }}">{{ $office->office_name }}</option>
            @endforeach
        </select>
    </div> --}}
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom JS -->
    <script>
        $(document).ready(function() {
            // Hide the second welcome text and the first button
            $('#secondWelcomeText').addClass('hidden');
            //$('#firstButton').addClass('hidden');
            $('#selectOffice').addClass('hidden');

            $('#switchButton').on('click', function() {
                $('.row.g-0 > div').each(function(index) {
                    $(this).appendTo($('.row.g-0')[index % 2]);
                    $('#secondWelcomeText').removeClass('hidden');
                    $('#firstButton').removeClass('hidden');
                    $('#selectOffice').removeClass('hidden');
                    $('#firstWelcomeText').addClass('hidden');
                    $('#input').addClass('hidden');
                    $('#input2').addClass('hidden');
                    $('#switchButton').addClass('hidden');


                });
            });

        });
    </script>
</body>

</html>

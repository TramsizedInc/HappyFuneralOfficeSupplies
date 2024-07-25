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
    <style>
        body {
            background-image: url('{{ asset('storage/login_card.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-blend-mode: multiply;
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 700px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 30px;
            box-sizing: border-box;
            max-height: calc(100vh - 200px);
            overflow-y: auto;
        }

        .welcome-text {
            position: relative;
            color: #fff;
            font-size: 24px;
            text-align: center;
            z-index: 1;
        }

        .welcome-col {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100%;
        }

        /* New CSS for hiding/showing with a smooth transition */
        .hidden {
            display: none;
            transition: opacity 0.5s ease-in-out;
        }

        .visible {
            display: block;
            transition: opacity 0.5s ease-in-out;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="card-container">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-6 welcome-col">
                        <div class="welcome-text text-secondary mt-5" id="firstWelcomeText">
                            Üdvözlet a munkahelyén! Itt minden segítség és támogatás rendelkezésre áll Ön számára.
                            Legyen szép napja!
                        </div>
                        <div class="welcome-text text-secondary mt-5 hidden" id="secondWelcomeText">
                            Kérlek válasz írodát,hogy megkezdhesd a munkád!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <form id="loginForm" method="POST" action="{{ route('login') }}">
                                @csrf
                                <h2 class="text-center mb-4">{{ config('app.name', 'Laravel') }}</h2>
                                <div class="mb-3" id="input">
                                    <label for="username" class="form-label">Felhasználónév</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input type="text" class="form-control " id="name" name="name"
                                            :value="old('name')" required autofocus autocomplete="username">
                                    </div>
                                </div>
                                <div class="mb-3" id="input2">
                                    <label for="password" class="form-label">Jelszó</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        <input type="password" name="password" class="form-control "  id="password"
                                        required autocomplete="current-password" >
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


                                <button type="submit" class="btn btn-secondary w-100 "
                                    id="firstButton">{{ __('Bejelentkezés') }}</button>
                            </form>
                            <div class="col-md-12 mt-3 justify-content-center text-center">
                                <div class="mb-3">
                                    <button type="button" id="switchButton" class="btn hidden btn-secondary w-40 p-2 ">
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

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom JS -->
    <script>
        $(document).ready(function() {
            // Hide the second welcome text and the first button
            $('#secondWelcomeText').addClass('hidden');
            // $('#firstButton').addClass('hidden');
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

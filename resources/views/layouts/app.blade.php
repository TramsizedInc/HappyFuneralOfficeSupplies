<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.7.3/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.7.3/build/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>


</head>

<body class="bg-secondary">


    <div id="screen-size-category"></div>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto px-0">
                <div id="sidebar" class="collapse collapse-horizontal  border-end">
                    <div id="sidebar-nav"
                        class="list-group border-0 bg-dark text-white rounded-0 text-sm-start min-vh-100">
                        <ul class="nav flex-column sidebar-nav">
                            <div class="sidebar-header">
                                <div class="sidebar-brand  text-center">
                                    <a data-bs-parent="#sidebar"class="nav-link text-light fs-2 mt-3"
                                        href="{{ route('dashboard') }}">Dashboard</a>
                                </div>
                            </div>
                            <div class="mt-3 text-dark">
                                <li class="nav-item dropdown mt-3">
                                    <a data-bs-parent="#sidebar"class="nav-link text-light dropdown-toggle"
                                        href="#" id="dropdownMenuLink1" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Temetés felvételezés
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                        <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                                href="{{ route('deceaseds.create') }}"><i class="fas fa-plus p-2"></i>
                                                Új
                                                ügy
                                                felvétele</a></li>
                                        <li class="border-top border-secondary"><a data-bs-parent="#sidebar"
                                                class="dropdown-item" href="{{ route('deceaseds.index') }}"><i
                                                    class="fas fa-table p-2"></i>Tárolt ügyek</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown mt-3">
                                    <a data-bs-parent="#sidebar"class="nav-link text-light dropdown-toggle"
                                        href="#" id="dropdownMenuLink2" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Nyomtatók
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                        <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                                href="{{ route('printers.index') }}"><i
                                                    class="fas fa-wrench p-2"></i>Nyomtatók kezelése</a></li>
                                        <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                                href="{{ route('getPrinterData') }}"><i class="fas fa-chart-line"></i>
                                                Nyomtató statisztikái</a></li>
                                        <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                                href="{{ route('printerTypes.index') }}"><i
                                                    class="fas fa-cog p-2"></i>Nyomtató fajták kezelése</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown mt-3">
                                    <a data-bs-parent="#sidebar"class="nav-link text-light dropdown-toggle"
                                        href="#" id="dropdownMenuLink1" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Autók
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                        <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                                href="{{ route('cars.create') }}"><i class="fas fa-plus p-2"></i> Új
                                                autó
                                                hozzáadás</a></li>
                                        <li class="border-top border-secondary"><a data-bs-parent="#sidebar"
                                                class="dropdown-item" href="{{ route('cars.index') }}"><i
                                                    class="fas fa-table p-2"></i>Tárolt autók</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown mt-3">
                                    <a data-bs-parent="#sidebar"class="nav-link text-light dropdown-toggle"
                                        href="#" id="dropdownMenuLink3" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Brandek
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                        <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                                href="{{ route('brands.index') }}"><i
                                                    class="fas fa-wrench p-2"></i>Márkák
                                                kezelése</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown mt-3">
                                    <a data-bs-parent="#sidebar"class="nav-link text-light dropdown-toggle"
                                        href="#" id="dropdownMenuLink4" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Számlák
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink4">
                                        <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                                href="{{ route('checkModels.index') }}"><i
                                                    class="fas fa-table p-2"></i>Összes
                                                számla</a></li>
                                        <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                                href="{{ route('checkTypes.index') }}"><i
                                                    class="fas fa-wrench p-2"></i>Csekkek kezelése</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown mt-3">
                                    <a data-bs-parent="#sidebar"class="nav-link text-light dropdown-toggle"
                                        href="#" id="dropdownMenuLink5" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Felhasználó
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink5">
                                        <li>
                                            <a data-bs-parent="#sidebar" class="dropdown-item disabled text-dark"
                                                href="#"><i class="fas fa-user"></i>
                                                {{ Auth::user()->name }}</a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a data-bs-parent="#sidebar" class="dropdown-item"
                                                    href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); this.closest('form').submit();"><i
                                                        class="fas fa-sign-out-alt"></i> Kijelentkezés</a>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main ps-md-2 pt-2">
                <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse"
                    class="text-danger rounded-3 p-1 fs-2 text-decoration-none">
                    <i class="fas fa-bars"></i>
                </a>
                <div class="container-fluid">
                    <div class="row">
                        <div class="align-items-center justify-content-center">
                           
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
<script>
    function getScreenSizeCategory(width) {
        if (width < 576) {
            return 'xs';
        } else if (width >= 576 && width < 768) {
            return 'sm';
        } else if (width >= 768 && width < 992) {
            return 'md';
        } else if (width >= 992 && width < 1200) {
            return 'lg';
        } else if (width >= 1200 && width < 1400) {
            return 'xl';
        } else {
            return 'xxl';
        }
    }


    function updateTextSizeClasses(category) {
        const textElements = document.querySelectorAll('body *');
        textElements.forEach(element => {
            // Remove existing text size classes
            element.classList.remove('text-sm', 'text-md', 'text-lg', 'text-xl', 'text-xxl');

            // Add the appropriate text size class based on the category
            switch (category) {
                case 'sm':
                    element.classList.add('text-sm');
                    break;
                case 'md':
                    element.classList.add('text-md');
                    break;
                case 'lg':
                    element.classList.add('text-lg');
                    break;
                case 'xl':
                    element.classList.add('text-xl');
                    break;
                case 'xxl':
                    element.classList.add('text-xxl');
                    break;
                default:
                    // For 'xs' category or any unexpected value, do nothing (or handle as needed)
                    break;
            }
        });
    }

    function updateScreenSizeCategory() {
        const width = window.innerWidth;
        const category = getScreenSizeCategory(width);

        // Update text size classes for all text elements in the body
        updateTextSizeClasses(category);

        // Update the text content of #screen-size-category to reflect the current size category
        const screenSizeCategoryDiv = document.getElementById('screen-size-category');
        screenSizeCategoryDiv.textContent = `Size: ${category}`;
    }

    // Initial call to display the size category when the page loads
    updateScreenSizeCategory();

    // Update the size category and text size whenever the window is resized
    window.addEventListener('resize', updateScreenSizeCategory);
</script>

</html>

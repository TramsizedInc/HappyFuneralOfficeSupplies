<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/toastr.css') }}" rel="stylesheet"> -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.tailwindcss.css" />
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body style="background-image: url('{{ asset('storage/candle.jpg') }}')">

    <div id="screen-size-category"></div>

    @include('layouts.sidebar')


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

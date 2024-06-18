<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-dark bg-dark fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav flex-column sidebar-nav">
            <div class="sidebar-header">
                <div class="sidebar-brand">
                    <a class="nav-link text-white mt-3" href="{{ route('dashboard') }}">Dashboard</a>
                </div>
            </div>
            <div class="mt-3">
                <li class="nav-item dropdown mt-3">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink1" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Temetés felvételezés
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                        <li><a class="dropdown-item" href="{{ route('deceaseds.create') }}">Temetés felvétel</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown mt-3">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink2" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Iroda kellékek
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                        <li><a class="dropdown-item" href="{{ route('printers.index') }}">Nyomtatók</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown mt-3">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink3" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Statisztikák
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                        <li><a class="dropdown-item" href="{{ route('getPrinterData') }}">Nyomtatók</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown mt-3">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink4" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Egyéb funkciók
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink4">
                        <li><a class="dropdown-item" href="{{ route('brands.index') }}">Brandek</a></li>
                        <li><a class="dropdown-item" href="{{ route('printerTypes.index') }}">Nyomtató fajták</a></li>
                        <li><a class="dropdown-item" href="{{ route('checkTypes.index') }}">Csekk fajták</a></li>
                        <li><a class="dropdown-item" href="{{ route('offices.index') }}">Irodák</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown mt-3">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink5" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Számlák
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink5">
                        <li><a class="dropdown-item" href="{{ route('checkModels.index') }}">Összes</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown mt-3">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink6" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Felhasználó
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink6">
                        <li>
                            <a class="dropdown-item disabled text-white" href="#">{{ Auth::user()->name }}</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                            </form>
                        </li>
                    </ul>
                </li>
            </div>
        </ul>
    </nav>
</div>

<!-- /#sidebar-wrapper -->


<!-- Page Content -->
<div id="page-content-wrapper">
    <button type="button" class="hamburger animated  fadeInLeft is-closed" data-toggle="offcanvas">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
    </button>

    <div class="container-fluid">
        {{ $slot }}
    </div>

</div>
<!-- /#page-content-wrapper -->




<script>
    $(document).ready(function() {
        var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;

        trigger.click(function() {
            hamburger_cross();
        });

        function hamburger_cross() {

            if (isClosed == true) {
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
            } else {
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
            }
        }

        $('[data-toggle="offcanvas"]').click(function() {
            $('#wrapper').toggleClass('toggled');
        });
    });
</script>

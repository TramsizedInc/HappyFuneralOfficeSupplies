<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto px-0">
            <div id="sidebar" class="collapse collapse-horizontal  border-end">
                <div id="sidebar-nav" class="list-group border-0 bg-dark text-white rounded-0 text-sm-start min-vh-100">
                    <ul class="nav flex-column sidebar-nav">
                        <div class="sidebar-header">
                            <div class="sidebar-brand  text-center">
                                <a data-bs-parent="#sidebar"class="nav-link fs-2 mt-3"
                                    href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                            </div>
                        </div>
                        <div class="mt-3 text-dark">
                            <li class="nav-item dropdown mt-3">
                                <a data-bs-parent="#sidebar"class="nav-link dropdown-toggle" href="#"
                                    id="dropdownMenuLink1" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Temetés felvételezés
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                    <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                            href="<?php echo e(route('deceaseds.create')); ?>"><i class="fas fa-plus p-2"></i> Új ügy
                                            felvétele</a></li>
                                    <li class="border-top border-secondary"><a data-bs-parent="#sidebar" class="dropdown-item"
                                            href="<?php echo e(route('deceaseds.index')); ?>"><i class="fas fa-table p-2"></i>Tárolt ügyek</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mt-3">
                                <a data-bs-parent="#sidebar"class="nav-link dropdown-toggle" href="#"
                                    id="dropdownMenuLink2" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Iroda kellékek
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                    <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                            href="<?php echo e(route('printers.index')); ?>">Nyomtatók</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mt-3">
                                <a data-bs-parent="#sidebar"class="nav-link dropdown-toggle" href="#"
                                    id="dropdownMenuLink3" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Statisztikák
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                    <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                            href="<?php echo e(route('getPrinterData')); ?>">Nyomtatók</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mt-3">
                                <a data-bs-parent="#sidebar"class="nav-link dropdown-toggle" href="#"
                                    id="dropdownMenuLink4" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Egyéb funkciók
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink4">
                                    <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                            href="<?php echo e(route('brands.index')); ?>">Brandek</a></li>
                                    <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                            href="<?php echo e(route('printerTypes.index')); ?>">Nyomtató fajták</a></li>
                                    <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                            href="<?php echo e(route('checkTypes.index')); ?>">Csekk fajták</a></li>
                                    <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                            href="<?php echo e(route('offices.index')); ?>">Irodák</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mt-3">
                                <a data-bs-parent="#sidebar"class="nav-link dropdown-toggle" href="#"
                                    id="dropdownMenuLink5" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Számlák
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink5">
                                    <li><a data-bs-parent="#sidebar" class="dropdown-item"
                                            href="<?php echo e(route('checkModels.index')); ?>">Összes</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mt-3">
                                <a data-bs-parent="#sidebar"class="nav-link dropdown-toggle" href="#"
                                    id="dropdownMenuLink6" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Felhasználó
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink6">
                                    <li>
                                        <a data-bs-parent="#sidebar" class="dropdown-item disabled text-dark"
                                            href="#"><?php echo e(Auth::user()->name); ?></a>
                                    </li>
                                    <li>
                                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <a data-bs-parent="#sidebar" class="dropdown-item"
                                                href="<?php echo e(route('logout')); ?>"
                                                onclick="event.preventDefault(); this.closest('form').submit();">Log
                                                Out</a>
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
                class="r text-danger rounded-3 p-1 fs-2 text-decoration-none">
                <i class="fas fa-bars"></i></a>

            <div class="container-fluid">
                <?php echo e($slot); ?>

            </div>

        </div>
        <!-- /#page-content-wrapper -->



    </div>
</div>
<?php /**PATH C:\Users\michnay.jozsef\HappyFuneralOfficeSupplies másolata\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>
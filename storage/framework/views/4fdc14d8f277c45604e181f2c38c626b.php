<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

   

    <div id=list>
        <div class="row justify-content-center py-3 px-4">
            <div class="col-xl-2 col-xxl-2 col-lg-3 col-md-2 col-sm-2 col-xs-2"></div>
            <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-4 col-xs-2">
                <div class="input-group">
                    <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search"
                        class="form-control pe-3" placeholder="Search for items">
                    <span class="input-group-text">
                        <i class="fa fa-search"></i> <!-- Updated icon class -->
                    </span>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-3 col-xs-2"> <!-- Column for the button -->
                <a href="<?php echo e(route('printers.create')); ?>" class="btn btn-primary">Létrehozás</a>
            </div>
        </div>




        <div class="row mt-5 justify-content-center">
            <div class="col-xxl-10 col-xl-9 col-lg-10 col-md-12 col-sm-12 col-xs-12">
                <div class="d-flex flex-column">
                    <div class="overflow-auto">
                        <div class="table-responsive">
                            <div class="table table-responsive bg-dark border border-dark rounded">
                                <table class="table table-dark">
                                    <thead class="table-dark text-white">
                                        <tr class="text-center align-middle">
                                            <th scope="col" class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary" id="bigTable">
                                                Márka
                                            </th>
                                            <th scope="col" class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary" id="bigTable">
                                                Típus
                                            </th>
                                            <th scope="col" class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary" id="bigTable">
                                                Kép
                                            </th>
                                            <th scope="col" class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary" id="bigTable">
                                                Létrehozva
                                            </th>
                                            <th scope="col" class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary" id="bigTable">
                                                Utoljára Modósitva
                                            </th>
                                            <th scope="col" class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary" id="bigTable">
                                                Toner Százalék
                                            </th>
                                            <th scope="col" class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary" id="bigTable">
                                                Dobb Egység Százalék
                                            </th>
                                            <th scope="col" class="border-end border-secondary d-xs-table-cell d-sm-table-cell text-secondary" id="bigTable">
                                                Gombok
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = \App\Models\Printer::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $printer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="px-6 py-4 text-sm text-dark">
                                                    <?php echo e($printer->brand); ?>

                                                </td>
                                                <td class="px-6 py-4 text-sm text-dark">
                                                    <?php echo e($printer->type); ?>

                                                </td>
                                                <td class="px-6 py-4 text-sm text-dark">
                                                    <img class="h-10 w-10"
                                                        src="<?php echo e(asset('storage/picture/' . $printer->picture)); ?>"
                                                        alt="image description">
                                                </td>
                                                <td class="px-6 py-4 text-sm text-dark">
                                                    <?php echo e($printer->created_at); ?>

                                                </td>
                                                <td class="px-6 py-4 text-sm text-dark">
                                                    <?php echo e($printer->updated_at); ?>

                                                </td>
                                                <td class="px-6 py-4 text-sm text-dark">
                                                    <?php echo e($printer->toner_percent); ?>%
                                                </td>
                                                <td class="px-6 py-4 text-sm text-dark">
                                                    <?php echo e($printer->drumm_percent); ?>%
                                                </td>
                                                <td class="px-6 py-4 text-end text-sm">
                                                    <button type="button"
                                                        class="btn btn-link text-decoration-none text-primary">Nézzet</button>
                                                </td>
                                                <td class="px-6 py-4 text-end text-sm">
                                                    <form action="<?php echo e(route('printers.edit', $printer)); ?>">
                                                        <button type="submit"
                                                            class="btn btn-link text-decoration-none text-primary">Módositás</button>
                                                    </form>
                                                </td>
                                                <td class="px-6 py-4 text-end text-sm">
                                                    <form method="POST"
                                                        action="<?php echo e(route('printers.destroy', $printer)); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit"
                                                            class="btn btn-link text-decoration-none text-primary">Törlés</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                                <div class="py-1 px-4">
                                    <nav class="d-flex justify-content-center">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <button class="page-link" type="button" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </button>
                                            </li>
                                            <li class="page-item active" aria-current="page">
                                                <button class="page-link" type="button">1</button>
                                            </li>
                                            <li class="page-item">
                                                <button class="page-link" type="button">2</button>
                                            </li>
                                            <li class="page-item">
                                                <button class="page-link" type="button">3</button>
                                            </li>
                                            <li class="page-item disabled">
                                                <button class="page-link" type="button">...</button>
                                            </li>
                                            <li class="page-item">
                                                <button class="page-link" type="button">8</button>
                                            </li>
                                            <li class="page-item">
                                                <button class="page-link" type="button">9</button>
                                            </li>
                                            <li class="page-item">
                                                <button class="page-link" type="button">10</button>
                                            </li>
                                            <li class="page-item">
                                                <button class="page-link" type="button" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\michnay.jozsef\HappyFuneralOfficeSupplies másolata\resources\views/printers/index.blade.php ENDPATH**/ ?>
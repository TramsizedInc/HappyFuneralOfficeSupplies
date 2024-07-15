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
            <a href="<?php echo e(route('checkTypes.create')); ?>" class="btn btn-primary">Létrehozás</a>
        </div>
    </div>

    <div class="row mt-5 justify-content-center">
        <div class="col-xxl-6 col-xl-9 col-lg-10 col-md-12 col-sm-12 col-xs-12">
            <div class="d-flex flex-column">
                <div class="overflow-auto">
                    <div class="table-responsive">
                        <div class="table table-responsive bg-dark border border-dark rounded">
                            <table class="table table-dark">
                                <thead class="table-dark text-white">
                                    <tr class="text-center align-middle">
                                        <table class="table table-dark caption-top">
                                            <caption
                                                class="border-bottom border-secondary text-uppercase fs-2 text-center text-danger">
                                                Csekkek</caption>

                                            <thead>
                                                <tr class="table-dark">
                                                    <th scope="col"
                                                        class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50">
                                                        Csekk neve</th>
                                                    <th scope="col"
                                                        class="bg-dark text-center text-uppercase border-end border-secondary text-secondary w-25">
                                                        Módosítás
                                                    </th>
                                                    <th scope="col"
                                                        class="bg-dark text-center text-uppercase text-secondary w-25">
                                                        Törlés
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = \App\Models\CheckType::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $checkType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class="text-center align-middle">
                                                        <td
                                                            class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50">
                                                            <?php echo e($checkType->name); ?></td>

                                                            <td
                                                            class="bg-dark border-end border-secondary table-secondary  text-center w-25">
                                                            <form action="<?php echo e(route('checkTypes.edit', $checkType)); ?>">
                                                                <button type="submit"
                                                                    class="btn btn-warning text-decoration-none">Módosítás</button>
                                                            </form>
                                                        </td>
                                                        <td class="bg-dark  table-secondary text-center w-25">
                                                            <form method="POST"
                                                                action="<?php echo e(route('checkTypes.destroy', $checkType)); ?>">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>
                                                                <button type="submit"
                                                                    class="btn btn-danger text-decoration-none">Törlés</button>
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
<?php /**PATH C:\Users\michnay.jozsef\HappyFuneralOfficeSupplies másolata\resources\views/checkTypes/index.blade.php ENDPATH**/ ?>
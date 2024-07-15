<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta https-equiv="X-UA-Compatible" content="ie=edge"/>

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <link href="<?php echo e(asset('resources/css/tabler.min.css')); ?>" rel="stylesheet"/>
        <link href="<?php echo e(asset('resources/css/tabler-flags.min.css')); ?>" rel="stylesheet"/>
        <link href="<?php echo e(asset('resources/css/tabler-payments.min.css')); ?>" rel="stylesheet"/>
        <link href="<?php echo e(asset('resources/css/tabler-vendors.min.css')); ?>" rel="stylesheet"/>
        <link href="<?php echo e(asset('resources/css/demo.min.css')); ?>" rel="stylesheet"/>
        <style>
            @import url('https://rsms.me/inter/inter.css');
            :root {
                --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
            }
            body {
                font-feature-settings: "cv03", "cv04", "cv11";
            }
        </style>
    </head>
    <body  class=" border-top-wide border-primary d-flex flex-column">
        <script src="<?php echo e(asset('resources/js/demo-theme.min.js')); ?>"></script>

        <div class="page page-center">
            <div class="container-tight py-4">
                <div class="empty">
                    <div class="empty-header">
                        <?php echo $__env->yieldContent('code'); ?>
                    </div>
                    <p class="empty-title">Oops… You just found an error page</p>
                    <p class="empty-subtitle text-muted">
                        <?php echo $__env->yieldContent('message'); ?>
                    </p>
                    <div class="empty-action">
                        <a href="<?php echo e(url('/')); ?>" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/arrow-left -->
                            <svg xmlns="https://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
                            Vigyél haza
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo e(asset('resources/js/tabler.min.js')); ?>" defer></script>
        <script src="<?php echo e(asset('resources/js/demo.min.js')); ?>" defer></script>
    </body>
</html>
<?php /**PATH C:\Users\michnay.jozsef\HappyFuneralOfficeSupplies másolata\resources\views/errors/minimal.blade.php ENDPATH**/ ?>
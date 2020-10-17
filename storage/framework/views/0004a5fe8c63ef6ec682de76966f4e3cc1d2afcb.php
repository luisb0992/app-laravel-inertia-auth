<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

        <!-- Scripts -->
        
        <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
        <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
    </head>
    <body class="body-bg font-sans antialiased">
        <div id="app" data-page="<?php echo e(json_encode($page)); ?>"></div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\curso_laravel_8\app-inertia-auth\resources\views/app.blade.php ENDPATH**/ ?>
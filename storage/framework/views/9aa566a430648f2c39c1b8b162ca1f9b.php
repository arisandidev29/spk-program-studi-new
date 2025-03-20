<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        <title><?php echo e($title ?? 'Page Title'); ?></title>
    </head>
    <body>
        <?php echo e($slot); ?>

    </body>
</html>
<?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/components/layouts/app.blade.php ENDPATH**/ ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'breadcrumbs' ]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title', 'breadcrumbs' ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<header class="flex justify-between bg-white shadow- shadow-xl rounded-2xl px-4 py-4">
    <div>
        <h1 class="text-2xl font-poppins text-primary"><?php echo e($title); ?></h1>
        <?php echo e(Breadcrumbs::render($breadcrumbs)); ?>

    </div>

    <?php if (isset($component)) { $__componentOriginalfb76cbe94144266fbc79a90e7c82b4e8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb76cbe94144266fbc79a90e7c82b4e8 = $attributes; } ?>
<?php $component = App\View\Components\UserNavbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('user-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\UserNavbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfb76cbe94144266fbc79a90e7c82b4e8)): ?>
<?php $attributes = $__attributesOriginalfb76cbe94144266fbc79a90e7c82b4e8; ?>
<?php unset($__attributesOriginalfb76cbe94144266fbc79a90e7c82b4e8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfb76cbe94144266fbc79a90e7c82b4e8)): ?>
<?php $component = $__componentOriginalfb76cbe94144266fbc79a90e7c82b4e8; ?>
<?php unset($__componentOriginalfb76cbe94144266fbc79a90e7c82b4e8); ?>
<?php endif; ?>

</header>
<?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/components/admin-header.blade.php ENDPATH**/ ?>
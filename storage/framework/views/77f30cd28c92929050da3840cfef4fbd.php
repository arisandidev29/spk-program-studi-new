<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['class']));

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

foreach (array_filter((['class']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalbb4f8328cb6ded1e7027737abc8104d0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb4f8328cb6ded1e7027737abc8104d0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.dashboard','data' => ['class' => $class]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('svg.dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($class)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb4f8328cb6ded1e7027737abc8104d0)): ?>
<?php $attributes = $__attributesOriginalbb4f8328cb6ded1e7027737abc8104d0; ?>
<?php unset($__attributesOriginalbb4f8328cb6ded1e7027737abc8104d0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb4f8328cb6ded1e7027737abc8104d0)): ?>
<?php $component = $__componentOriginalbb4f8328cb6ded1e7027737abc8104d0; ?>
<?php unset($__componentOriginalbb4f8328cb6ded1e7027737abc8104d0); ?>
<?php endif; ?><?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/storage/framework/views/269b5b31612e34abf7db1ace58190e00.blade.php ENDPATH**/ ?>
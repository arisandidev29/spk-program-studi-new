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
<?php if (isset($component)) { $__componentOriginal618e1ddb357b1c3ebd609f131937e2e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618e1ddb357b1c3ebd609f131937e2e3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.alternative','data' => ['class' => $class]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('svg.alternative'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($class)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618e1ddb357b1c3ebd609f131937e2e3)): ?>
<?php $attributes = $__attributesOriginal618e1ddb357b1c3ebd609f131937e2e3; ?>
<?php unset($__attributesOriginal618e1ddb357b1c3ebd609f131937e2e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618e1ddb357b1c3ebd609f131937e2e3)): ?>
<?php $component = $__componentOriginal618e1ddb357b1c3ebd609f131937e2e3; ?>
<?php unset($__componentOriginal618e1ddb357b1c3ebd609f131937e2e3); ?>
<?php endif; ?><?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/storage/framework/views/19f332a02274bbe09b78f0c6c105c349.blade.php ENDPATH**/ ?>
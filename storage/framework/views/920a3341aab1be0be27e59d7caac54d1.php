<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    "disabled" => false,
]));

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

foreach (array_filter(([
    "disabled" => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<button
    <?php echo e($attributes->merge(["class" => "px-6 py-2 rounded-md cursor-pointer "])); ?>

    <?php if($disabled): ?>
        disabled
    <?php endif; ?>
    <?php echo e($attributes); ?>

>
    <?php echo e($slot); ?>

</button>
<?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/components/button.blade.php ENDPATH**/ ?>
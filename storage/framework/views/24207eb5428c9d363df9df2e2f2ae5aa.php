<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    "programStudy" => "Sistem Informasi",
    "percentage" => "50",
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
    "programStudy" => "Sistem Informasi",
    "percentage" => "50",
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div class="my-3 flex items-center gap-4 w-full">
    <p
        class="text-primary border-primary grid h-12 w-12 place-content-center rounded-full border"
    >
        <?php echo e($percentage); ?>

    </p>
    <div class="flex-grow">
        <span class="my-1 block text-sm dark:text-gray-200"><?php echo e($programStudy); ?></span>
        <p class="bg-primary h-2" style="width: <?php echo e($percentage); ?>"></p>
    </div>
</div>
<?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/components/popular-study-program-card.blade.php ENDPATH**/ ?>
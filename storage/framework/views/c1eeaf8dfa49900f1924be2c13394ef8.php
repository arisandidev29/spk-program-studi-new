<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    "name" => "radio",
    "value" => "value",
    "label",
    "description",
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
    "name" => "radio",
    "value" => "value",
    "label",
    "description",
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<label class="flex cursor-pointer flex-col items-center">
    <input
        type="radio"
        class="hidden"
        name="<?php echo e($name); ?>"
        x-ref="radio<?php echo e($value); ?>"
        @change=" selected = $refs.radio<?php echo e($value); ?>.checked ? <?php echo e($value); ?> : null"
        wire:click="setSelectedValue(<?php echo e($value); ?>)"
        <?php echo e($attributes); ?>

    />
    <p
        :class="{ 'bg-dark-primary text-white! hover:bg-dark-primary! ': selected === <?php echo e($value); ?> }"
        class="border-primary text-primary hover:bg-primary grid h-8 w-8 place-content-center rounded-full border text-sm transition duration-300 hover:text-white md:h-12 md:w-12 md:text-base"
    >
        <?php echo e($label); ?>

    </p>
    <small class="text-xs md:text-sm"><?php echo e($description); ?></small>
</label>
<?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/components/radio-option.blade.php ENDPATH**/ ?>
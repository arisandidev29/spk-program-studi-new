<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'placeholder' => '',
    'type' => 'text',
    'value' => '',
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
    'placeholder' => '',
    'type' => 'text',
    'value' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div x-data="{ value : <?php echo \Illuminate\Support\Js::from($value)->toHtml() ?> }" class="relative" ">

        <input id="<?php echo e($placeholder); ?>" x-model="value" type="<?php echo e($type); ?>" value="<?php echo e($value); ?>"
            <?php echo e($attributes->class(['peer border-1 border-primary px-6 py-2 w-full rounded-md  my-2 focus:border-dark-primary outline-none'])); ?>

            <?php echo e($attributes); ?> ">
        
        <label 
            for="<?php echo e($placeholder); ?>" 
            :class="{ 'px-2! -top-1! left-2!  text-xs!' : value}"  class="absolute left-5 top-4.5 text-gray-400 transition-all bg-white peer-focus:px-2 peer-focus:-top-1 peer-focus:left-2 peer-focus:text-xs rounded-lg ">
            <?php echo e($placeholder); ?>

        </label>
            

</div>


<?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/components/input.blade.php ENDPATH**/ ?>
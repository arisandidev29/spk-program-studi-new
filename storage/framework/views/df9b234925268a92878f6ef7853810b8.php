<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'placeholder' => '',
    'type' => 'text',
    'value' => '',
    'icon' => null,
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
    'icon' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div x-data="{ value: <?php echo \Illuminate\Support\Js::from($value)->toHtml() ?> }" class="relative" ">

        <input id="<?php echo e($placeholder); ?>" x-model="value" type="<?php echo e($type); ?>" value="<?php echo e($value); ?>"
            <?php echo e($attributes->class([
                'peer border-1 border-primary px-6 pr-7 py-2 w-full rounded-md  my-2 focus:border-dark-primary outline-none',
                'border-red-500!' => $errors->has($placeholder),
            ])); ?>

            <?php echo e($attributes); ?> ">

    

    <?php if($icon): ?>
        <img src="<?php echo e($icon); ?>" alt="" class="w-4 block absolute right-1 top-5 mr-2 ">
    <?php endif; ?>



    <label for="<?php echo e($placeholder); ?>" :class="{ 'px-2! -top-1! left-2!  text-xs!': value }"
        class="absolute left-5 top-4.5 text-gray-400 transition-all bg-white peer-focus:px-2 peer-focus:-top-1 peer-focus:left-2 peer-focus:text-xs rounded-lg ">
        <?php echo e($placeholder); ?>

    </label>

    <?php $__errorArgs = [$placeholder];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 text-sm "><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


</div>
<?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/components/input.blade.php ENDPATH**/ ?>
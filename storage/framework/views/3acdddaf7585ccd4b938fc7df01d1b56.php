<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    "placeholder" => "",
    "value" => "",
    "parrentClass" => "",
    "error" => null
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
    "placeholder" => "",
    "value" => "",
    "parrentClass" => "",
    "error" => null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div x-data="{ value: <?php echo \Illuminate\Support\Js::from($value)->toHtml() ?> }" class="<?php echo e($parrentClass); ?> relative">
    <textarea
        id="<?php echo e($placeholder); ?>"
        x-model="value"
        value="<?php echo e($value); ?>"
        <?php echo e($attributes->class([
                "peer border-primary focus:border-dark-primary my-2 w-full rounded-md border-1 px-6 py-2 pr-7 outline-none dark:text-gray-300",
                "border-red-500!" => $errors->has($placeholder),
            ])); ?>

        <?php echo e($attributes); ?>

    ></textarea>

    <label
        for="<?php echo e($placeholder); ?>"
        :class="{ 'px-2! -top-1! left-2!  text-xs!': value }"
        class="absolute top-4.5 left-5 rounded-lg bg-white dark:bg-gray-700 text-gray-400 transition-all peer-focus:-top-1 peer-focus:left-2 peer-focus:px-2 peer-focus:text-xs"
    >
        <?php echo e($placeholder); ?>

    </label>

    <!--[if BLOCK]><![endif]--><?php $__errorArgs = [$error ?? $placeholder];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-sm text-red-500"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/components/input-textarea.blade.php ENDPATH**/ ?>
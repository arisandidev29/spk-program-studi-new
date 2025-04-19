<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    "placeholder" => "",
    "value" => null,
    "icon" => null,
    "type" => "password",
    "error" => null,
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
    "value" => null,
    "icon" => null,
    "type" => "password",
    "error" => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div
    x-data="{
        value: '<?php echo e($value); ?>' ?? <?php if ((object) ($attributes->wire("model")) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire("model")->value()); ?>')<?php echo e($attributes->wire("model")->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire("model")); ?>')<?php endif; ?>,
        showPassword: false,
    }"
    class="relative"
>
    <input
        id="<?php echo e($placeholder); ?>"
        x-ref="<?php echo e("input" . $placeholder); ?>"
        value="<?php echo e($value); ?>"
        x-model="value"
        :type="showPassword ? 'text' : '<?php echo e($type); ?>'"
        <?php echo e($attributes->class([
                "peer border-primary focus:border-dark-primary my-2 w-full rounded-md border-1 px-6 py-2 pr-7 outline-none dark:text-gray-300",
                "border-red-500!" => $errors->has($placeholder),
            ])); ?>

        <?php echo e($attributes); ?>

    />

    

    <!--[if BLOCK]><![endif]--><?php if($icon): ?>
        <img
            src="<?php echo e($icon); ?>"
            alt=""
            class="<?php echo e($attributes->get("icon-class")); ?> absolute top-5 right-1 mr-2 block w-4"
        />
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <label
        for="<?php echo e($placeholder); ?>"
        :class="{ 'px-2! -top-1! left-2!  text-xs!': value }"
        class="absolute top-4.5 left-5 rounded-lg bg-transparent text-gray-400 transition-all peer-focus:-top-1 peer-focus:left-2 peer-focus:px-2 peer-focus:text-xs"
    >
        <?php echo e($placeholder); ?>

    </label>

    <button
        type="button"
        for="<?php echo e($placeholder); ?>"
        @click="showPassword = !showPassword"
        class="flex cursor-pointer items-center gap-2"
    >
        <img
            :src="showPassword ? '/asset/eye-slash.svg' : '/asset/eye.svg'"
            alt="eye"
            class="w-4 dark:invert"
        />
        <span
            class="text-sm text-black dark:text-gray-300"
            x-text="showPassword ? 'Hide Password' : 'Show Password'"
        ></span>
    </button>

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
<?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/components/input-password.blade.php ENDPATH**/ ?>
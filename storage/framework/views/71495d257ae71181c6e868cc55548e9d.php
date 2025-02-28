 <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name',
    'ref',
    'selected' => null,
    'number'
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
    'name',
    'ref',
    'selected' => null,
    'number'
 ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
 <label class="flex items-center flex-col cursor-pointer">
    <?php echo e(dd($selected)); ?>

     <input type="radio" class="" name="radio" x-ref="radio1"
         @change=" selected = $refs.radio1.checked ? 1 : null" />
     <p :class="{ 'bg-primary text-white! ': selected === 1 }"
         class="w-12 h-12 grid place-content-center transition duration-300 border border-primary text-primary rounded-full">
         1</p>
     <small>tidak tertarik</small>
 </label>
<?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/components/answer-choise.blade.php ENDPATH**/ ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    "kriteria" => "Kriteria name",
    "question" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt iste, sapiente, labore facilis molestias alias blanditiis, error assumenda non aliquam expedita ullam consequatur. Ullam impedit sapiente quidem quia atque quibusdam.",
    "note",
    "number" => "1",
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
    "kriteria" => "Kriteria name",
    "question" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt iste, sapiente, labore facilis molestias alias blanditiis, error assumenda non aliquam expedita ullam consequatur. Ullam impedit sapiente quidem quia atque quibusdam.",
    "note",
    "number" => "1",
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div class="relative rounded-xl bg-white p-4 shadow-xl md:p-8">
    <h1 class="font-poppins font-bold"><?php echo e($kriteria); ?></h1>
    <p class="font-roboto text-xs leading-6 text-gray-600 md:text-sm">
        <?php echo e($question); ?>

    </p>

    <!--[if BLOCK]><![endif]--><?php if($note): ?>
        <hr class="border-divider my-4" />
        <span class="bg-primary rounded-2xl px-2 py-2 text-sm text-white">
            Note !
        </span>
        <p class="my-2 text-xs md:text-sm"><?php echo e($note); ?></p>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <span
        class="bg-primary absolute -top-3 -left-4 flex h-8 w-8 items-center justify-center rounded-full text-white md:top-5 md:-left-12"
    >
        <?php echo e($number); ?>

    </span>
</div>
<?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/components/question-head.blade.php ENDPATH**/ ?>
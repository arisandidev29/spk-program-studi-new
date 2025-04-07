<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    "title",
    "breadcrumbs",
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
    "title",
    "breadcrumbs",
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<header
    class="shadow- flex justify-between rounded-2xl bg-white px-4 py-4 shadow-xl"
>
    <div>
        <h1 class="font-poppins text-primary text-2xl"><?php echo e($title); ?></h1>
        <?php echo e(Breadcrumbs::render($breadcrumbs)); ?>

    </div>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('user-navbar', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3716326388-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
</header>
<?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/components/admin-header.blade.php ENDPATH**/ ?>
<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal528e2a7f601bfe6eb5a7246e23c66a52 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal528e2a7f601bfe6eb5a7246e23c66a52 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.bobot','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('svg.bobot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal528e2a7f601bfe6eb5a7246e23c66a52)): ?>
<?php $attributes = $__attributesOriginal528e2a7f601bfe6eb5a7246e23c66a52; ?>
<?php unset($__attributesOriginal528e2a7f601bfe6eb5a7246e23c66a52); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal528e2a7f601bfe6eb5a7246e23c66a52)): ?>
<?php $component = $__componentOriginal528e2a7f601bfe6eb5a7246e23c66a52; ?>
<?php unset($__componentOriginal528e2a7f601bfe6eb5a7246e23c66a52); ?>
<?php endif; ?><?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/storage/framework/views/b168a31b371dd5d7ba6d8f69d86b08c9.blade.php ENDPATH**/ ?>
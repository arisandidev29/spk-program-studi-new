<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal2672565a6585b4b724751a37bc4f92b3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2672565a6585b4b724751a37bc4f92b3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.kriteria','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('svg.kriteria'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2672565a6585b4b724751a37bc4f92b3)): ?>
<?php $attributes = $__attributesOriginal2672565a6585b4b724751a37bc4f92b3; ?>
<?php unset($__attributesOriginal2672565a6585b4b724751a37bc4f92b3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2672565a6585b4b724751a37bc4f92b3)): ?>
<?php $component = $__componentOriginal2672565a6585b4b724751a37bc4f92b3; ?>
<?php unset($__componentOriginal2672565a6585b4b724751a37bc4f92b3); ?>
<?php endif; ?><?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/storage/framework/views/ac8b34195b4e4adc538d4dc48a0d9390.blade.php ENDPATH**/ ?>
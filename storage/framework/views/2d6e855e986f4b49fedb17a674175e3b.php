<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginalbb4f8328cb6ded1e7027737abc8104d0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb4f8328cb6ded1e7027737abc8104d0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.dashboard','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('svg.dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb4f8328cb6ded1e7027737abc8104d0)): ?>
<?php $attributes = $__attributesOriginalbb4f8328cb6ded1e7027737abc8104d0; ?>
<?php unset($__attributesOriginalbb4f8328cb6ded1e7027737abc8104d0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb4f8328cb6ded1e7027737abc8104d0)): ?>
<?php $component = $__componentOriginalbb4f8328cb6ded1e7027737abc8104d0; ?>
<?php unset($__componentOriginalbb4f8328cb6ded1e7027737abc8104d0); ?>
<?php endif; ?><?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/storage/framework/views/f8e939f8d211699183d1f995666c2b95.blade.php ENDPATH**/ ?>
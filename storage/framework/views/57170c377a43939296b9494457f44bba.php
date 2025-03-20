<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal618e1ddb357b1c3ebd609f131937e2e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618e1ddb357b1c3ebd609f131937e2e3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.alternative','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('svg.alternative'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618e1ddb357b1c3ebd609f131937e2e3)): ?>
<?php $attributes = $__attributesOriginal618e1ddb357b1c3ebd609f131937e2e3; ?>
<?php unset($__attributesOriginal618e1ddb357b1c3ebd609f131937e2e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618e1ddb357b1c3ebd609f131937e2e3)): ?>
<?php $component = $__componentOriginal618e1ddb357b1c3ebd609f131937e2e3; ?>
<?php unset($__componentOriginal618e1ddb357b1c3ebd609f131937e2e3); ?>
<?php endif; ?><?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/storage/framework/views/28d9e4a0de2c2a02ba59cecb0ffe097c.blade.php ENDPATH**/ ?>
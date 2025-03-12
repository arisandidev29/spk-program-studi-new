<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginalf258db8ecb98a979328a1231023a6b62 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf258db8ecb98a979328a1231023a6b62 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.users','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('svg.users'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf258db8ecb98a979328a1231023a6b62)): ?>
<?php $attributes = $__attributesOriginalf258db8ecb98a979328a1231023a6b62; ?>
<?php unset($__attributesOriginalf258db8ecb98a979328a1231023a6b62); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf258db8ecb98a979328a1231023a6b62)): ?>
<?php $component = $__componentOriginalf258db8ecb98a979328a1231023a6b62; ?>
<?php unset($__componentOriginalf258db8ecb98a979328a1231023a6b62); ?>
<?php endif; ?><?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/storage/framework/views/c4702e5751a7aa4db1905899b58812c2.blade.php ENDPATH**/ ?>
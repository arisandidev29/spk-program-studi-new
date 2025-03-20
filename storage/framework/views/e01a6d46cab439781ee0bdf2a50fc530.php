<div class="my-4">
    <div class="border border-primary px-4 py-2 rounded-lg shadow-xl text-primary  my-2">
        <p><?php echo e($studiname); ?></p>
        <!--[if BLOCK]><![endif]--><?php if($description): ?>
        <p class="text-black text-sm mt-2"><?php echo e($description); ?></p>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    </div>
    <div x-data="{ selected: null }" class="flex md:w-[70%] mx-auto justify-around gap-4">
        <?php if (isset($component)) { $__componentOriginal687f8550b39ea8069e0c802bc551f446 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal687f8550b39ea8069e0c802bc551f446 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.radio-option','data' => ['value' => '1','label' => '1','description' => 'sangat tertarik','wire:model' => 'selected']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('radio-option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','label' => '1','description' => 'sangat tertarik','wire:model' => 'selected']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal687f8550b39ea8069e0c802bc551f446)): ?>
<?php $attributes = $__attributesOriginal687f8550b39ea8069e0c802bc551f446; ?>
<?php unset($__attributesOriginal687f8550b39ea8069e0c802bc551f446); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal687f8550b39ea8069e0c802bc551f446)): ?>
<?php $component = $__componentOriginal687f8550b39ea8069e0c802bc551f446; ?>
<?php unset($__componentOriginal687f8550b39ea8069e0c802bc551f446); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal687f8550b39ea8069e0c802bc551f446 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal687f8550b39ea8069e0c802bc551f446 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.radio-option','data' => ['value' => '2','label' => '2','description' => 'tertarik','wire:model' => 'selected']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('radio-option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '2','label' => '2','description' => 'tertarik','wire:model' => 'selected']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal687f8550b39ea8069e0c802bc551f446)): ?>
<?php $attributes = $__attributesOriginal687f8550b39ea8069e0c802bc551f446; ?>
<?php unset($__attributesOriginal687f8550b39ea8069e0c802bc551f446); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal687f8550b39ea8069e0c802bc551f446)): ?>
<?php $component = $__componentOriginal687f8550b39ea8069e0c802bc551f446; ?>
<?php unset($__componentOriginal687f8550b39ea8069e0c802bc551f446); ?>
<?php endif; ?>
        <x-radio-option value="3" label="3" description="lumayan" wire:model="selected/>
        <?php if (isset($component)) { $__componentOriginal687f8550b39ea8069e0c802bc551f446 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal687f8550b39ea8069e0c802bc551f446 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.radio-option','data' => ['value' => '4','label' => '4','description' => 'tidak tertarik','wire:model' => 'selected']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('radio-option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '4','label' => '4','description' => 'tidak tertarik','wire:model' => 'selected']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal687f8550b39ea8069e0c802bc551f446)): ?>
<?php $attributes = $__attributesOriginal687f8550b39ea8069e0c802bc551f446; ?>
<?php unset($__attributesOriginal687f8550b39ea8069e0c802bc551f446); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal687f8550b39ea8069e0c802bc551f446)): ?>
<?php $component = $__componentOriginal687f8550b39ea8069e0c802bc551f446; ?>
<?php unset($__componentOriginal687f8550b39ea8069e0c802bc551f446); ?>
<?php endif; ?>
    </div>
</div><?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/livewire/question-choise.blade.php ENDPATH**/ ?>
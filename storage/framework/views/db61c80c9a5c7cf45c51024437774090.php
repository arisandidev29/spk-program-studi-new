<div class="my-4">
    <div
        class="border-primary text-primary mt-2 rounded-lg border px-4 py-2 shadow-xl"
    >
        <p class="text-sm md:text-base"><?php echo e($programStudi); ?></p>
        <!--[if BLOCK]><![endif]--><?php if($description): ?>
            <p class="mt-2 text-sm text-black"><?php echo e($description); ?></p>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>

    <div
        x-data="{ selected: null }"
        class="mx-auto mt-2 flex justify-around gap-4 md:w-[70%]"
    >
        <?php if (isset($component)) { $__componentOriginal687f8550b39ea8069e0c802bc551f446 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal687f8550b39ea8069e0c802bc551f446 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.radio-option','data' => ['value' => '1','label' => '1','description' => 'sangat tertarik']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('radio-option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','label' => '1','description' => 'sangat tertarik']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.radio-option','data' => ['value' => '2','label' => '2','description' => 'tertarik']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('radio-option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '2','label' => '2','description' => 'tertarik']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.radio-option','data' => ['value' => '3','label' => '3','description' => 'lumayan']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('radio-option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '3','label' => '3','description' => 'lumayan']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.radio-option','data' => ['value' => '4','label' => '4','description' => 'tidak tertarik']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('radio-option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '4','label' => '4','description' => 'tidak tertarik']); ?>
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

    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ["selected"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="font-roboto mt-2 text-red-500"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/livewire/program-studi-answer.blade.php ENDPATH**/ ?>
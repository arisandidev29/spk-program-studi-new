<div class="my-4">
    <div
        class="border-primary text-primary mt-2 rounded-lg border px-4 py-2 shadow-xl"
    >
        <p class="text-sm md:text-base"><?php echo e($programStudi->name); ?></p>
        <!--[if BLOCK]><![endif]--><?php if($description): ?>
            <p class="mt-2 text-sm text-black"><?php echo e($description); ?></p>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>

    <div
        x-data="{ selected: null }"
        class="mx-auto mt-2 flex justify-around gap-4 md:w-[70%]"
    >
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $pilihans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal687f8550b39ea8069e0c802bc551f446 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal687f8550b39ea8069e0c802bc551f446 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.radio-option','data' => ['key' => $value->id,'id' => $value->id,'value' => ''.e($value->id).'','name' => $value->id,'label' => ''.e($index + 1).'','description' => ''.e($value->name).'','selected' => $selected]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('radio-option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value->id),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value->id),'value' => ''.e($value->id).'','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value->id),'label' => ''.e($index + 1).'','description' => ''.e($value->name).'','selected' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($selected)]); ?>
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
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
</div><?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/livewire/program-studi-answer.blade.php ENDPATH**/ ?>
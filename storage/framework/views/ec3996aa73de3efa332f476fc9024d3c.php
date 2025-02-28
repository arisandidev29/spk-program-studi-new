<div class="max-w-4xl mx-auto my-4">

    <?php if (isset($component)) { $__componentOriginal49c2ff89931ec24f8a7c07fed8459e6f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49c2ff89931ec24f8a7c07fed8459e6f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.question-head','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('question-head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal49c2ff89931ec24f8a7c07fed8459e6f)): ?>
<?php $attributes = $__attributesOriginal49c2ff89931ec24f8a7c07fed8459e6f; ?>
<?php unset($__attributesOriginal49c2ff89931ec24f8a7c07fed8459e6f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49c2ff89931ec24f8a7c07fed8459e6f)): ?>
<?php $component = $__componentOriginal49c2ff89931ec24f8a7c07fed8459e6f; ?>
<?php unset($__componentOriginal49c2ff89931ec24f8a7c07fed8459e6f); ?>
<?php endif; ?> 
    <div class="flex flex-col gap-2">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('program-studi-answer', ['programStudi' => 'Sistem informasi']);

$__html = app('livewire')->mount($__name, $__params, 'lw-4047740377-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('program-studi-answer', ['programStudi' => 'Komputarisasi Akuntansi']);

$__html = app('livewire')->mount($__name, $__params, 'lw-4047740377-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('program-studi-answer', ['programStudi' => 'Manajemen informatika']);

$__html = app('livewire')->mount($__name, $__params, 'lw-4047740377-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
 
    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'mt-4 bg-secondary text-black ','wire:click' => 'submit()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-4 bg-secondary text-black ','wire:click' => 'submit()']); ?>Submit <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
    
    
 </div><?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/livewire/question.blade.php ENDPATH**/ ?>
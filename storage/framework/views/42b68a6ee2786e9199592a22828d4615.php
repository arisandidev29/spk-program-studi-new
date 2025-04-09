<div>
    <!--[if BLOCK]><![endif]--><?php if($hasmadeChoice): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('user-result', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1803334021-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php else: ?>
    <div class="flex min-h-[80vh] flex-col items-center justify-center gap-2">
        <h1 class="my-2 text-xl md:text-4xl">
            Selamat Datang
            <span class="text-primary"><?php echo e(auth()->user()->name); ?></span>
        </h1>

        <img
            src="/asset/girls-with-tree.svg"
            alt="girls with tree"
            class="my-2 w-[60%] max-w-sm"
        />

        <p class="my-2 w-64 text-center text-sm md:text-xl">
            Yuk Cari tau Rekomendasi Program Studi Untuk Mu !
        </p>

        <a wire:navigate href="<?php echo e(route("question", $firstKriteria->id)); ?>">
            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'bg-secondary flex gap-4 text-sm font-bold text-black md:text-base']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-secondary flex gap-4 text-sm font-bold text-black md:text-base']); ?>
                Mulai
                <img src="/asset/play.svg" alt="play" class="w-3" />
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
        </a>
    </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/livewire/user-dashboard.blade.php ENDPATH**/ ?>
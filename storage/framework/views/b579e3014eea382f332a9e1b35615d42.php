<div class="grid grid-cols-1   xl:grid-cols-2 gap-4 items-center my-4">
    <div class="order-2 xl:order-1">
        <h2 class="text-center  text-md  md:text-2xl">
            <p>
                Oke,
                <span class="text-primary">Kami</span>
                telah menganalisis nya
            </p>
            <p>
                Rekomendasi
                <span class="text-primary">Program Studi</span>
                untuk kamu yaitu !
            </p>
        </h2>

        <div class="bg-secondary text-black p-4 xl:p-6 rounded-xl flex w-max mx-auto my-4 items-center gap-4">
            <img src="/asset/conffenti.svg" alt="conffenti" class="w-8 xl:14">
            <p class=" text-lg xl:text-3xl font-poppins"><?php echo e($rekomendasi->alternative->name); ?></p>
            <img src="/asset/conffenti.svg" alt="conffenti" class="w-8 xl:14">
        </div>

        <div class="flex flex-col gap-4 items-center mt-8">
            <small class="text-center block">Kamu Bisa Mengulagi lagi Pilhan mu !</small>
            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'bg-primary text-white rounded-md ','wire:click' => 'UlangiPilihan']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-primary text-white rounded-md ','wire:click' => 'UlangiPilihan']); ?>
                Ulangi Pilhan
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
        </div>
    </div>

    <div class="order-1 xl:order-2">
        <img src="/asset/result.svg" alt="result image" class=" w-[50%] xl:w-[60%] mx-auto" />
    </div>
</div><?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/livewire/user-result.blade.php ENDPATH**/ ?>
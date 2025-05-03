<div class="my-4 grid grid-cols-1 items-center gap-4 xl:grid-cols-2">
    <div class="order-2 xl:order-1">
        <h2 class="text-md text-center md:text-2xl">
            <p class="dark:text-gray-200">
                Oke,
                <span class="text-primary">Kami</span>
                telah menganalisis nya
            </p>
            <p class="dark:text-gray-200">
                Rekomendasi
                <span class="text-primary">Program Studi</span>
                untuk kamu yaitu !
            </p>
        </h2>

        <div
            class="bg-secondary mx-auto my-4 flex w-max items-center gap-4 rounded-xl p-4 text-black xl:p-6"
        >
            <img src="/asset/conffenti.svg" alt="conffenti" class="xl:14 w-8" />
            <p class="font-poppins text-lg xl:text-3xl">
                <?php echo e($rekomendasi->alternative->name); ?>

            </p>
            <img src="/asset/conffenti.svg" alt="conffenti" class="xl:14 w-8" />
        </div>

        <div class="mt-8 flex flex-col items-center gap-4">
            <small class="block text-center dark:text-gray-200">
                Kamu Bisa Mengulagi lagi Pilhan mu !
            </small>
            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'bg-primary rounded-md text-white','wire:click' => 'UlangiPilihan']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-primary rounded-md text-white','wire:click' => 'UlangiPilihan']); ?>
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
        <img
            src="/asset/result.svg"
            alt="result image"
            class="mx-auto w-[50%] xl:w-[60%]"
        />
    </div>
</div><?php /**PATH /home/arisandi/Documents/skripsi/spk-program-studi-new/resources/views/livewire/user-result.blade.php ENDPATH**/ ?>
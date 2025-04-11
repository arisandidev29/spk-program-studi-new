<form
    wire:submit="register"
    class="relative order-1 mx-auto my-6 max-w-sm rounded-sm border-1 border-solid border-gray-600 px-8 py-10 md:px-10 md:py-14"
>
    
    <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['placeholder' => 'Username','error' => 'username','type' => 'text','wire:model' => 'username']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Username','error' => 'username','type' => 'text','wire:model' => 'username']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['placeholder' => 'Email','error' => 'email','type' => 'Email','wire:model' => 'email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Email','error' => 'email','type' => 'Email','wire:model' => 'email']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal88cfe17a0624537feef452f30f31deda = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88cfe17a0624537feef452f30f31deda = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-password','data' => ['placeholder' => 'Password','error' => 'password','type' => 'password','wire:model' => 'password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Password','error' => 'password','type' => 'password','wire:model' => 'password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal88cfe17a0624537feef452f30f31deda)): ?>
<?php $attributes = $__attributesOriginal88cfe17a0624537feef452f30f31deda; ?>
<?php unset($__attributesOriginal88cfe17a0624537feef452f30f31deda); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88cfe17a0624537feef452f30f31deda)): ?>
<?php $component = $__componentOriginal88cfe17a0624537feef452f30f31deda; ?>
<?php unset($__componentOriginal88cfe17a0624537feef452f30f31deda); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal88cfe17a0624537feef452f30f31deda = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88cfe17a0624537feef452f30f31deda = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-password','data' => ['placeholder' => 'Password Konfirmasi','type' => 'password','error' => 'password_confirm','wire:model' => 'password_confirm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Password Konfirmasi','type' => 'password','error' => 'password_confirm','wire:model' => 'password_confirm']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal88cfe17a0624537feef452f30f31deda)): ?>
<?php $attributes = $__attributesOriginal88cfe17a0624537feef452f30f31deda; ?>
<?php unset($__attributesOriginal88cfe17a0624537feef452f30f31deda); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88cfe17a0624537feef452f30f31deda)): ?>
<?php $component = $__componentOriginal88cfe17a0624537feef452f30f31deda; ?>
<?php unset($__componentOriginal88cfe17a0624537feef452f30f31deda); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['placeholder' => 'Token','error' => 'token','type' => 'text','wire:model' => 'token']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Token','error' => 'token','type' => 'text','wire:model' => 'token']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
    <a
        href=""
        class="text-primary hover:text-dark-primary -mt-2 block text-xs italic underline"
    >
        Cara mendapatkan Token
    </a>

    <?php if (isset($component)) { $__componentOriginal200ad1118261db3bb333f2ce2567184b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal200ad1118261db3bb333f2ce2567184b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-file-upload','data' => ['wire:model' => 'profile_pic','placeholder' => 'Profile Pic','error' => 'profile_pic']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-file-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'profile_pic','placeholder' => 'Profile Pic','error' => 'profile_pic']); ?>
        <div
            class="font-roboto my-1 flex flex-col text-sm text-gray-500 italic"
        >
            <span>Photo profile opsional</span>
            <span>format file : jpeg,jpg,png</span>
            <span>Max file : 2Mb</span>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal200ad1118261db3bb333f2ce2567184b)): ?>
<?php $attributes = $__attributesOriginal200ad1118261db3bb333f2ce2567184b; ?>
<?php unset($__attributesOriginal200ad1118261db3bb333f2ce2567184b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal200ad1118261db3bb333f2ce2567184b)): ?>
<?php $component = $__componentOriginal200ad1118261db3bb333f2ce2567184b; ?>
<?php unset($__componentOriginal200ad1118261db3bb333f2ce2567184b); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['wire:loading.class' => '!cursor-not-allowed !bg-dark-primary','class' => 'bg-primary flex w-full items-center justify-center gap-2 text-white']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:loading.class' => '!cursor-not-allowed !bg-dark-primary','class' => 'bg-primary flex w-full items-center justify-center gap-2 text-white']); ?>
        <svg
            wire:loading
            class="h-5 w-5 animate-spin"
            width="800px"
            height="800px"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                d="M20.0001 12C20.0001 13.3811 19.6425 14.7386 18.9623 15.9405C18.282 17.1424 17.3022 18.1477 16.1182 18.8587C14.9341 19.5696 13.5862 19.9619 12.2056 19.9974C10.825 20.0328 9.45873 19.7103 8.23975 19.0612"
                stroke="#fff"
                stroke-width="3.55556"
                stroke-linecap="round"
            />
        </svg>
        Sing Up
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
    <small class="font-xs text-primary block text-center italic">
        Sudah punya akun ?
        <a href="<?php echo e(route("login")); ?>" class="underline">Login disini</a>
    </small>

    

    <div
        class="bg-primary shadow-primary absolute -bottom-10 -left-14 -z-10 h-20 w-20 rounded-full shadow-[0_0_50px_40px]"
    ></div>
</form><?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/livewire/singup-form.blade.php ENDPATH**/ ?>
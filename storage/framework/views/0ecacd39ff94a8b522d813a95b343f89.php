<form
    class="relative mx-2 my-2 max-w-sm rounded-sm border-1 border-solid border-gray-600 px-8 py-10 md:mx-auto md:my-6 md:px-10 md:py-14"
>
    <!--[if BLOCK]><![endif]--><?php if(session()->has("error")): ?>
        <p
            class="font-roboto mb-2 rounded-lg bg-red-500 p-2 text-center text-sm text-white md:text-base"
        >
            <?php echo e(session()->get("error")); ?>

        </p>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <?php if(session()->has("message")): ?>
        <p
            class="bg-primary font-roboto mb-2 rounded-lg p-2 text-center text-sm text-white md:text-base"
        >
            <?php echo e(session()->get("message")); ?>

        </p>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['placeholder' => 'username','type' => 'text','class' => 'text-sm placeholder:text-sm md:text-base md:placeholder:text-base','icon' => '/asset/user-2.svg','wire:model' => 'username']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'username','type' => 'text','class' => 'text-sm placeholder:text-sm md:text-base md:placeholder:text-base','icon' => '/asset/user-2.svg','wire:model' => 'username']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-password','data' => ['placeholder' => 'password','type' => 'password','class' => 'text-sm placeholder:text-sm md:text-base md:placeholder:text-base','icon' => '/asset/password.svg','wire:model' => 'password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'password','type' => 'password','class' => 'text-sm placeholder:text-sm md:text-base md:placeholder:text-base','icon' => '/asset/password.svg','wire:model' => 'password']); ?>
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

    <div class="my-2 flex items-center justify-between">
        <label for="rememberMe" class="flex items-center gap-2">
            <input
                type="checkbox"
                class="accent-primary"
                wire:model="rememberMe"
            />
            <small class="text-dark-primary">Remember Me</small>
        </label>

        <a href="" class="block">
            <small
                class="font-roboto text-primary text-xs font-extralight italic"
            >
                Lupa password
            </small>
        </a>
    </div>

    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'button','wire:click' => 'login','class' => 'bg-primary w-full text-sm font-bold text-white md:text-base']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','wire:click' => 'login','class' => 'bg-primary w-full text-sm font-bold text-white md:text-base']); ?>
        Login
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
    <small class="text-primary block text-center text-xs italic">
        Belum punya akun ?
        <a href="<?php echo e(route("register")); ?>" class="underline">Register disini</a>
    </small>

    
    <div
        class="bg-primary shadow-primary absolute -right-14 -bottom-10 -z-10 h-20 w-20 rounded-full shadow-[0_0_50px_40px]"
    ></div>
</form><?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/livewire/login-form.blade.php ENDPATH**/ ?>
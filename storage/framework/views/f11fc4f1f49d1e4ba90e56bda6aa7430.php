<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div
        class="order-3 mt-12 grid grid-cols-1 items-center justify-around md:grid-cols-2"
    >
        <div class="font-poppins order-2 md:order-1">
            <h2
                class="text-center text-lg font-bold text-black md:text-left md:text-2xl dark:text-gray-100"
            >
                Bingung Pilih
                <span class="text-primary">Program Studi</span>
                ?
            </h2>
            <h1
                class="my-4 flex items-center justify-center gap-4 text-center text-2xl font-bold text-black md:justify-start md:text-left md:text-5xl dark:text-gray-200"
            >
                <img
                    src="/asset/logo.svg"
                    alt="logo"
                    class="inline-block w-25 md:w-38"
                />
                Jawaban nya
            </h1>

            <small
                class=" text-black dark:text-gray-300 font-roboto mx-auto my-6 block w-[80%] text-center text-xs md:mx-0 md:my-8 md:text-left md:text-sm"
            >
                Discover your path to academic success. We help you plan your
                future by choosing the right
                <span class="text-primary">Study Program</span>
                that matches your interests and potential.
            </small>

            <a href="<?php echo e(route("login")); ?>">
                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'bg-secondary mx-auto block text-xs text-black md:mx-0 md:text-base']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-secondary mx-auto block text-xs text-black md:mx-0 md:text-base']); ?>
                    Mulai Pilihan Mu
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

            <small
                class="my-4 flex items-center justify-center gap-2 md:justify-start text-black dark:text-gray-300"
            >
                A Product From
                <a href="" class="underline">STMIK-TM</a>
                <img src="/asset/stmik logo.png" alt="logo" class="w-8" />
            </small>
        </div>

        <div class="order-1 md:order-2">
            <img
                src="/asset/welcome-image.svg"
                alt="welcome image"
                class="mx-auto my-2 w-[50%] md:w-[70%]"
                id="welcome-image"
            />
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/welcome.blade.php ENDPATH**/ ?>
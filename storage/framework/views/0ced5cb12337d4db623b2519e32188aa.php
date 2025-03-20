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
    <div class="order-3 mt-12 grid grid-cols-1 md:grid-cols-2 items-center justify-around">
        <div class="font-poppins order-2 md:order-1">
            <h2 class=" text-lg text-center md:text-left md:text-2xl  font-bold">
                Bingung Pilih
                <span class="text-primary">Program Studi</span>
                ?
            </h2>
            <h1 class="my-4 flex justify-center md:justify-start items-center gap-4 text-2xl text-center md:text-left md:text-5xl font-bold">
                <img
                    src="/asset/logo.svg"
                    alt="logo"
                    class="inline-block w-25 md:w-38"
                />
                Jawaban nya
            </h1>

            <small class="font-roboto my-2 md:my-8 block w-[80%] mx-auto md:mx-0 text-xs text-center md:text-left md:text-sm">
                Discover your path to academic success. We help you plan your
                future by choosing the right
                <span class="text-primary">Study Program</span>
                that matches your interests and potential.
            </small>

            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'bg-secondary block mx-auto md:mx-0 text-black text-xs md:text-base ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-secondary block mx-auto md:mx-0 text-black text-xs md:text-base ']); ?>
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

            <small class="my-4 flex items-center gap-2 justify-center md:justify-start ">
                A Product From
                <a href="" class="underline">STMIK-TM</a>
                <img src="/asset/stmik logo.png" alt="logo" class="w-8" />
            </small>
        </div>

        <div class="order-1 md:order-2">
            <img
                src="/asset/welcome-image.svg"
                alt="welcome image"
                class=" w-[50%] my-2 md:w-[70%] mx-auto"
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
<?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/welcome.blade.php ENDPATH**/ ?>
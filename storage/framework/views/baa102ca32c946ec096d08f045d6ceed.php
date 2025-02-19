<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['class' => 'grid place-items-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'grid place-items-center']); ?>
    <div class="grid  md:grid-cols-2 gap-4 items-center mt-[12vh]">
        <div class="order-2 md:order-1">
            <h2 class="flex items-center font-poppins gap-4 text-3xl font-bold">Apa itu <img src="/asset/logo.svg" alt="logo" class="w-36"> ?</h2>
            <p class="my-6 text-sm font-roboto leading-8">
                Mypath merupkan salah satu layanan dari Kampus STMIK-TM  yang 
                mempunyai tujuan untuk membantu calon mahasiswa menentukan program studi
                yang akan di pilih berdasarkan minat dan bakat mereka, tidak hanya sebatas
                calon mahasiswa bahkan mahasiswa aktif sekalipun dapat menujang kembali alasan 
                mereka memilih program studi tersebut
            </p>
        </div>
        <div class="order-1 md:order-2">
            <img src="/asset/bird-message.svg" alt="bird-message" class="w-[80%] mx-auto ">
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
<?php endif; ?><?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/about.blade.php ENDPATH**/ ?>
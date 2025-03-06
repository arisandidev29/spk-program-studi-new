<div class="flex flex-col bg-dark-primary min-h-screen p-4 ">
    <img src="/asset/logo.png" alt="logo" class=" mx-auto">
    <ul class="flex flex-col gap-2 mt-8 w-[80%] mx-auto">
        <?php $__currentLoopData = config('custome.sidebar'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li >
              <a href="<?php echo e(url($list['route'])); ?>" class="group flex gap-4 items-center duration-300 hover:bg-white p-3 rounded-lg w-full ">
                    <?php echo $list['icon']; ?>

                    <p class="font-poppins text-md text-white font-bold group-hover:text-primary duration-300"><?php echo e($list['name']); ?></p>
                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <p class="mt-auto text-center text-divider font-poppins">Service from <a href="" class="underline italic font-bold">Stmik-TM</a> 
        <img src="/asset/stmik logo.png" alt="stmik" class="w-8 h-8 inline">
    </p>
</div>
<?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/components/sidebar.blade.php ENDPATH**/ ?>
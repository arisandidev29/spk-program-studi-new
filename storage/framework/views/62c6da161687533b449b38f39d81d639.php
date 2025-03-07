<div class="bg-dark-primary flex min-h-screen flex-col p-4">
    <img src="/asset/logo.png" alt="logo" class="mx-auto" />
    <ul class="mx-auto mt-8 flex w-[80%] flex-col gap-2">
        <?php $__currentLoopData = config("custome.sidebar"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a
                    href="<?php echo e(url($list["route"])); ?>"
                    class="group flex w-full items-center gap-4 rounded-lg p-3 duration-300 hover:bg-white"
                >
                    <?php echo $list["icon"]; ?>

                    <p
                        class="font-poppins text-md group-hover:text-primary font-bold text-white duration-300"
                    >
                        <?php echo e($list["name"]); ?>

                    </p>
                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <p class="text-divider font-poppins mt-auto text-center">
        Service from
        <a href="" class="font-bold italic underline">Stmik-TM</a>
        <img src="/asset/stmik logo.png" alt="stmik" class="inline h-8 w-8" />
    </p>
</div>
<?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/components/sidebar.blade.php ENDPATH**/ ?>
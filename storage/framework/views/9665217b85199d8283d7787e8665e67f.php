<!--[if BLOCK]><![endif]--><?php if (! ($breadcrumbs->isEmpty())): ?>
    <nav class="container mx-auto">
        <ol class="py-4 rounded flex flex-wrap  text-sm text-gray-800 font-poppins">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <!--[if BLOCK]><![endif]--><?php if($breadcrumb->url && !$loop->last): ?>
                    <li>
                        <a href="<?php echo e($breadcrumb->url); ?>" class=" text-gray-600">
                            <?php echo e($breadcrumb->title); ?>

                        </a>
                    </li>
                <?php else: ?>
                    <li >
                        <a href="<?php echo e($breadcrumb->url); ?>" class="text-primary" >
                            <?php echo e($breadcrumb->title); ?>

                        </a>
                    </li>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--><?php if (! ($loop->last)): ?>
                    <li class="text-gray-500 px-2">
                        /
                    </li>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </ol>
    </nav>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH /home/arisandi/Documents/skripsi/spk-program-studi-new/resources/views/vendor/breadcrumbs/tailwind.blade.php ENDPATH**/ ?>
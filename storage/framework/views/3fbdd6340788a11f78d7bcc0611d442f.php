<div
    x-cloak
    x-show="<?php echo e($attributes->get("show")); ?>"
    class="fixed inset-0 grid items-start justify-center bg-[rgba(0,0,0,.4)] pt-[20vh]"
>
    <div
        x-show="<?php echo e($attributes->get("show")); ?>"
        x-transition
        class="relative min-h-40 w-xl rounded-2xl bg-white p-4 opacity-100"
    >
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/components/modal.blade.php ENDPATH**/ ?>
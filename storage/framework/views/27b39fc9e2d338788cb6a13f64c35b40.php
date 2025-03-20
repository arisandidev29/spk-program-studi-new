<div
    role="dialog"
    aria-modal="true"
    x-show="show"
    x-cloak
    <?php echo e($attributes->merge(["class" => "bg-[rgba(0,0,0,.6)] z-50 fixed inset-0 grid place-content-center"])); ?>

    <?php echo e($attributes); ?>

>
    <div
        class="<?php echo e($attributes->get("content-class")); ?> w-[90vw] max-w-2xl rounded-xl bg-white px-8 py-4"
    >
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/components/modal-dialog.blade.php ENDPATH**/ ?>
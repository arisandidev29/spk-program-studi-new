<?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <div class="flex items-center gap-4">
        <div class="bg-primary w-max rounded-xl p-4">
            <img src="/asset/diagnosis.svg" alt="user" class="w-6" />
        </div>
        <p class="dark:text-gray-200">Table Kriteria Jawaban</p>
    </div>

    <div class="overflow-auto">
        <table class="my-2 table-auto dark:text-gray-300">
            <thead>
                <tr class="text-xs md:text-sm">
                    <th>Kode Kriteria</th>
                    <th>Kriteria</th>
                    <th>Bobot (normalisasi)</th>
                    <th>Kategori</th>
                    <th>Jawaban</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $jawabanUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="text-xs sm:text-sm "  >
                    <td><?php echo e($jawaban->kriteria->kode_kriteria); ?></td>
                    <td><?php echo e($jawaban->kriteria->kriteria); ?></td>
                    <td><?php echo e($jawaban->kriteria->bobot->normalisasi); ?></td>
                    <td><?php echo e($jawaban->kriteria->kategori); ?></td>
                    <td><?php echo e($jawaban->PilihanJawaban->name); ?></td>
                    <td><?php echo e($jawaban->PilihanJawaban->nilai); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?><?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/livewire/user-result-jawaban.blade.php ENDPATH**/ ?>
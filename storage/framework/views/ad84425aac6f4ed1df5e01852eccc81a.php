<?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'mx-auto max-w-3xl']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mx-auto max-w-3xl']); ?>
        <a
            wire:navigate
            href="<?php echo e(route("admin.kriteria")); ?>"
            class="my-2 block"
        >
            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'bg-primary text-sm text-white md:text-base']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-primary text-sm text-white md:text-base']); ?>
                Back
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

        <h1 class="text-primary text-xl">Edit Kriteria</h1>


        

        <?php if (isset($component)) { $__componentOriginalaa74a36c765b9eb44868c8de081ee2dc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa74a36c765b9eb44868c8de081ee2dc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert.succesfull','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert.succesfull'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa74a36c765b9eb44868c8de081ee2dc)): ?>
<?php $attributes = $__attributesOriginalaa74a36c765b9eb44868c8de081ee2dc; ?>
<?php unset($__attributesOriginalaa74a36c765b9eb44868c8de081ee2dc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa74a36c765b9eb44868c8de081ee2dc)): ?>
<?php $component = $__componentOriginalaa74a36c765b9eb44868c8de081ee2dc; ?>
<?php unset($__componentOriginalaa74a36c765b9eb44868c8de081ee2dc); ?>
<?php endif; ?>
        
        <form
            wire:submit="update"
            class="my-2 grid grid-cols-2 justify-stretch gap-4"
        >
            <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['placeholder' => 'kriteria','type' => 'text','wire:model' => 'kriteria','value' => $kriteria]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'kriteria','type' => 'text','wire:model' => 'kriteria','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($kriteria)]); ?>
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
            <?php if (isset($component)) { $__componentOriginal0dbfa54f6986b51b03e2500f8899abef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0dbfa54f6986b51b03e2500f8899abef = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-textarea','data' => ['wire:model' => 'desc','placeholder' => 'description','parrentClass' => ' col-span-2 ','error' => 'desc','class' => 'h-40','value' => $desc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'desc','placeholder' => 'description','parrentClass' => ' col-span-2 ','error' => 'desc','class' => 'h-40','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($desc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0dbfa54f6986b51b03e2500f8899abef)): ?>
<?php $attributes = $__attributesOriginal0dbfa54f6986b51b03e2500f8899abef; ?>
<?php unset($__attributesOriginal0dbfa54f6986b51b03e2500f8899abef); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0dbfa54f6986b51b03e2500f8899abef)): ?>
<?php $component = $__componentOriginal0dbfa54f6986b51b03e2500f8899abef; ?>
<?php unset($__componentOriginal0dbfa54f6986b51b03e2500f8899abef); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal0dbfa54f6986b51b03e2500f8899abef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0dbfa54f6986b51b03e2500f8899abef = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-textarea','data' => ['wire:model' => 'note','placeholder' => 'note (optional)','parrentClass' => ' col-span-2 ','class' => 'h-20','value' => $note]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'note','placeholder' => 'note (optional)','parrentClass' => ' col-span-2 ','class' => 'h-20','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($note)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0dbfa54f6986b51b03e2500f8899abef)): ?>
<?php $attributes = $__attributesOriginal0dbfa54f6986b51b03e2500f8899abef; ?>
<?php unset($__attributesOriginal0dbfa54f6986b51b03e2500f8899abef); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0dbfa54f6986b51b03e2500f8899abef)): ?>
<?php $component = $__componentOriginal0dbfa54f6986b51b03e2500f8899abef; ?>
<?php unset($__componentOriginal0dbfa54f6986b51b03e2500f8899abef); ?>
<?php endif; ?>

            
            <?php if (isset($component)) { $__componentOriginal3df0918eef61aaa79605e132760f550e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3df0918eef61aaa79605e132760f550e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-dropdown','data' => ['name' => 'bobot','wire:model' => 'bobot.id','error' => 'bobot.id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'bobot','wire:model' => 'bobot.id','error' => 'bobot.id']); ?>
                <option value="">Pilih Bobot</option>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $bobotOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $options): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option
                        value="<?php echo e($options['id']); ?>"
                        :selected="<?php echo e($options->id == $bobot['id']); ?>"
                    >
                        <?php echo e($options->keterangan); ?>

                        (<?php echo e($options->normalisasi); ?>)
                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3df0918eef61aaa79605e132760f550e)): ?>
<?php $attributes = $__attributesOriginal3df0918eef61aaa79605e132760f550e; ?>
<?php unset($__attributesOriginal3df0918eef61aaa79605e132760f550e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3df0918eef61aaa79605e132760f550e)): ?>
<?php $component = $__componentOriginal3df0918eef61aaa79605e132760f550e; ?>
<?php unset($__componentOriginal3df0918eef61aaa79605e132760f550e); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal3df0918eef61aaa79605e132760f550e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3df0918eef61aaa79605e132760f550e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-dropdown','data' => ['name' => 'kategori','wire:model.live' => 'kategori','error' => 'kategori']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'kategori','wire:model.live' => 'kategori','error' => 'kategori']); ?>
                <option value="Benefit" :selected="$kategori == 'benefit'">
                    Benefit
                </option>
                <option value="Cost" :selected="$kategori == 'cost'">
                    Cost
                </option>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3df0918eef61aaa79605e132760f550e)): ?>
<?php $attributes = $__attributesOriginal3df0918eef61aaa79605e132760f550e; ?>
<?php unset($__attributesOriginal3df0918eef61aaa79605e132760f550e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3df0918eef61aaa79605e132760f550e)): ?>
<?php $component = $__componentOriginal3df0918eef61aaa79605e132760f550e; ?>
<?php unset($__componentOriginal3df0918eef61aaa79605e132760f550e); ?>
<?php endif; ?>

            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $pilihans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex items-center gap-2">
                    <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['placeholder' => 'Pilihan '.e($index + 1).'','error' => 'pilihans.'.e($index).'.name','type' => 'text','wire:model' => 'pilihans.'.e($index).'.name','value' => $pilihans[$index]['name'],'classWrapper' => 'grow']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Pilihan '.e($index + 1).'','error' => 'pilihans.'.e($index).'.name','type' => 'text','wire:model' => 'pilihans.'.e($index).'.name','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pilihans[$index]['name']),'class-wrapper' => 'grow']); ?>
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

                    <p
                        class="bg-primary rounded-lg px-3 py-2 text-xs text-white md:text-base"
                    >
                        Nilai <?php echo e($value["nilai"]); ?>

                    </p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->


            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'bg-secondary hover:bg-dark-primary col-span-2 w-max text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-secondary hover:bg-dark-primary col-span-2 w-max text-black']); ?>
                Edit
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
        </form>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?><?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/livewire/edit-kriteria.blade.php ENDPATH**/ ?>
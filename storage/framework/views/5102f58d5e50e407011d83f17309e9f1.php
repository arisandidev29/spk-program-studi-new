<form wire:submit="save" class="my-2 grid grid-cols-2 justify-stretch gap-4">
    <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['placeholder' => 'Id Kriteria','type' => 'text','value' => 'c1','readonly' => true,'class' => 'text-slate-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Id Kriteria','type' => 'text','value' => 'c1','readonly' => true,'class' => 'text-slate-500']); ?>
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
    <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['placeholder' => 'kriteria','type' => 'text','wire:model' => 'kriteria']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'kriteria','type' => 'text','wire:model' => 'kriteria']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-textarea','data' => ['wire:model' => 'pertanyaan','placeholder' => 'pertanyaan','parrentClass' => ' col-span-2 ','class' => 'h-40']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'pertanyaan','placeholder' => 'pertanyaan','parrentClass' => ' col-span-2 ','class' => 'h-40']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-dropdown','data' => ['name' => 'bobot','wire:model' => 'bobot']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'bobot','wire:model' => 'bobot']); ?>
        <option value="tes">tes</option>
        <option value="tes1">tes1</option>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-dropdown','data' => ['name' => 'kategori','wire:model' => 'kategori']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'kategori','wire:model' => 'kategori']); ?>
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

    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $pilihan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['placeholder' => ''.e($key).'','error' => 'pilihan.'.e($key).'','type' => 'text','wire:model' => 'pilihan.'.e($key).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => ''.e($key).'','error' => 'pilihan.'.e($key).'','type' => 'text','wire:model' => 'pilihan.'.e($key).'']); ?>
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

    <div class="flex gap-2">
        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['wire:click' => 'addPilihan','type' => 'button','class' => 'text-primary flex items-center gap-2 text-sm duration-300 hover:shadow-lg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'addPilihan','type' => 'button','class' => 'text-primary flex items-center gap-2 text-sm duration-300 hover:shadow-lg']); ?>
            Tambah Pilihan

            <svg
                class="h-6 w-6"
                width="52"
                height="52"
                viewBox="0 0 52 52"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g>
                    <rect width="52" height="52" />
                    <path
                        id="Path"
                        d="M9.75 1.625C9.75 0.727545 9.02243 0 8.125 0C7.22757 0 6.5 0.727545 6.5 1.625C6.5 1.625 6.5 6.5 6.5 6.5C6.5 6.5 1.625 6.5 1.625 6.5C0.727545 6.5 0 7.22757 0 8.125C0 9.02243 0.727545 9.75 1.625 9.75C1.625 9.75 6.5 9.75 6.5 9.75C6.5 9.75 6.5 14.625 6.5 14.625C6.5 15.5224 7.22757 16.25 8.125 16.25C9.02243 16.25 9.75 15.5224 9.75 14.625C9.75 14.625 9.75 9.75 9.75 9.75C9.75 9.75 14.625 9.75 14.625 9.75C15.5224 9.75 16.25 9.02243 16.25 8.125C16.25 7.22757 15.5224 6.5 14.625 6.5C14.625 6.5 9.75 6.5 9.75 6.5L9.75 1.625C9.75 1.625 9.75 1.625 9.75 1.625Z"
                        fill="#40A578"
                        transform="translate(17.875 17.875)"
                    />
                    <path
                        id="Shape"
                        d="M23.2917 0C10.428 0 0 10.428 0 23.2917C0 36.1554 10.428 46.5833 23.2917 46.5833C36.1554 46.5833 46.5833 36.1554 46.5833 23.2917C46.5833 10.428 36.1554 0 23.2917 0C23.2917 0 23.2917 0 23.2917 0ZM3.25 23.2917C3.25 12.223 12.223 3.25 23.2917 3.25C34.3603 3.25 43.3333 12.223 43.3333 23.2917C43.3333 34.3603 34.3603 43.3333 23.2917 43.3333C12.223 43.3333 3.25 34.3603 3.25 23.2917C3.25 23.2917 3.25 23.2917 3.25 23.2917Z"
                        fill="#40A578"
                        fill-rule="evenodd"
                        transform="translate(2.709 2.708)"
                    />
                </g>
            </svg>
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
        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['wire:click' => 'removePilihan','type' => 'button','class' => \Illuminate\Support\Arr::toCssClasses([
                ' flex gap-2 items-center  text-sm text-red-500 hover:shadow-lg duration-300',
                'hidden' => count($pilihan) <= 5,
            ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'removePilihan','type' => 'button','class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                ' flex gap-2 items-center  text-sm text-red-500 hover:shadow-lg duration-300',
                'hidden' => count($pilihan) <= 5,
            ]))]); ?>
            Hapus PIlihan
            <svg
                class="h-6 w-6"
                width="49"
                height="49"
                viewBox="0 0 49 49"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g>
                    <rect width="49" height="49" />
                    <path
                        id="Path"
                        d="M13.7812 3.0625C14.6269 3.0625 15.3125 2.37691 15.3125 1.53125C15.3125 0.685593 14.6269 0 13.7812 0C13.7812 0 1.53125 0 1.53125 0C0.68557 0 0 0.685593 0 1.53125C0 2.37691 0.68557 3.0625 1.53125 3.0625C1.53125 3.0625 13.7812 3.0625 13.7812 3.0625C13.7812 3.0625 13.7812 3.0625 13.7812 3.0625Z"
                        fill="#E12D39"
                        transform="translate(16.844 22.969)"
                    />
                    <path
                        id="Shape"
                        d="M21.9479 0C9.82642 0 0 9.82642 0 21.9479C0 34.0695 9.82642 43.8958 21.9479 43.8958C34.0695 43.8958 43.8958 34.0695 43.8958 21.9479C43.8958 9.82642 34.0695 0 21.9479 0C21.9479 0 21.9479 0 21.9479 0ZM3.0625 21.9479C3.0625 11.5178 11.5178 3.0625 21.9479 3.0625C32.378 3.0625 40.8333 11.5178 40.8333 21.9479C40.8333 32.378 32.378 40.8333 21.9479 40.8333C11.5178 40.8333 3.0625 32.378 3.0625 21.9479C3.0625 21.9479 3.0625 21.9479 3.0625 21.9479Z"
                        fill="#E12D39"
                        fill-rule="evenodd"
                        transform="translate(2.552 2.552)"
                    />
                </g>
            </svg>
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
    </div>

    

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
        Save
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
</form><?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/livewire/create-kriteria-form.blade.php ENDPATH**/ ?>
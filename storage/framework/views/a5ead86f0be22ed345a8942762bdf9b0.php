<?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['xData' => '{
    modal: {
        show: false,
        title: \'\',
        content: \'\'
    }
}','class' => 'relative order-2 flex-grow xl:order-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-data' => '{
    modal: {
        show: false,
        title: \'\',
        content: \'\'
    }
}','class' => 'relative order-2 flex-grow xl:order-1']); ?>
    <div class="flex items-center gap-4">
        <div class="bg-primary w-max rounded-xl p-4">
            <img src="/asset/user.svg" alt="user" class="w-6" />
        </div>
        <p>Users</p>
    </div>

    
    <?php if (isset($component)) { $__componentOriginalf45b1c0e8778cb8b2622428c1655559e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf45b1c0e8778cb8b2622428c1655559e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert.danger','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert.danger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf45b1c0e8778cb8b2622428c1655559e)): ?>
<?php $attributes = $__attributesOriginalf45b1c0e8778cb8b2622428c1655559e; ?>
<?php unset($__attributesOriginalf45b1c0e8778cb8b2622428c1655559e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf45b1c0e8778cb8b2622428c1655559e)): ?>
<?php $component = $__componentOriginalf45b1c0e8778cb8b2622428c1655559e; ?>
<?php unset($__componentOriginalf45b1c0e8778cb8b2622428c1655559e); ?>
<?php endif; ?>
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
    

    <div class="my-4 flex items-center justify-between gap-4 md:items-center">
        
        <div
            x-data="{ actionOption: false }"
            x-on:closeOption.window="actionOption = false"
            class="relative"
        >
            <!--[if BLOCK]><![endif]--><?php if(! $selectionMode): ?>
                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['wire:click' => 'toggleSelectionMode','class' => 'text-primary border-primary border bg-transparent px-2! text-sm md:px-2! md:py-1! md:text-base']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'toggleSelectionMode','class' => 'text-primary border-primary border bg-transparent px-2! text-sm md:px-2! md:py-1! md:text-base']); ?>
                    Select
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
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['@click' => 'actionOption = !actionOption','@click.outside' => 'actionOption = false','class' => 'text-primary border-primary relative flex gap-2 border bg-transparent px-2! text-sm md:px-2! md:py-1! md:text-base']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'actionOption = !actionOption','@click.outside' => 'actionOption = false','class' => 'text-primary border-primary relative flex gap-2 border bg-transparent px-2! text-sm md:px-2! md:py-1! md:text-base']); ?>
                    Action
                    <svg
                        class="w-4"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
                            fill="currentColor"
                        />
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
                <div
                    x-show="actionOption"
                    class="border-primary absolute top-[130%] left-0 rounded-lg border bg-white p-2 shadow-lg"
                >
                    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['@click' => '$dispatch(\'modaldeleteselection-open\')','class' => 'w-full bg-red-500 text-xs whitespace-nowrap text-white md:text-sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => '$dispatch(\'modaldeleteselection-open\')','class' => 'w-full bg-red-500 text-xs whitespace-nowrap text-white md:text-sm']); ?>
                        Delete Selection
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['wire:click' => 'toggleSelectionMode','class' => 'bg-primary mt-2 w-full text-xs whitespace-nowrap text-white md:text-sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'toggleSelectionMode','class' => 'bg-primary mt-2 w-full text-xs whitespace-nowrap text-white md:text-sm']); ?>
                        Cencel
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
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        <div class="flex items-center gap-2">
            <div x-data="{ showFilter: false }" class="relative">
                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['@click' => 'showFilter = !showFilter','@click.outside' => 'showFilter = false',':class' => 'showFilter ? \'bg-dark-primary\' : \'!bg-primary\'','class' => 'flex w-max gap-2 rounded-lg px-2! text-sm text-white md:text-base']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'showFilter = !showFilter','@click.outside' => 'showFilter = false',':class' => 'showFilter ? \'bg-dark-primary\' : \'!bg-primary\'','class' => 'flex w-max gap-2 rounded-lg px-2! text-sm text-white md:text-base']); ?>
                    Filter
                    <img src="/asset/filter.svg" alt="filter" />
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
                <div
                    x-show="showFilter"
                    class="bg-primary absolute top-[130%] left-0 flex w-32 flex-col gap-2 rounded-lg p-3 shadow-lg"
                >
                    <button
                        @click="$wire.sort('name','asc')"
                        class="text-primary cursor-pointer rounded-md bg-white px-3 py-1 text-sm hover:bg-gray-100"
                    >
                        Name (asc)
                    </button>
                    <button
                        @click="$wire.sort('name','desc')"
                        class="text-primary cursor-pointer rounded-md bg-white px-3 py-1 text-sm hover:bg-gray-100"
                    >
                        Name (desc)
                    </button>
                    <button
                        @click="$wire.sort('email','asc')"
                        class="text-primary cursor-pointer rounded-md bg-white px-3 py-1 text-sm hover:bg-gray-100"
                    >
                        Email (asc)
                    </button>
                    <button
                        @click="$wire.sort('email','desc')"
                        class="text-primary cursor-pointer rounded-md bg-white px-3 py-1 text-sm hover:bg-gray-100"
                    >
                        Email (desc)
                    </button>
                </div>
            </div>

            <div>
                <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['wire:model.live' => 'search','placeholder' => 'Search','icon' => '/asset/search.svg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'search','placeholder' => 'Search','icon' => '/asset/search.svg']); ?>
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
            </div>
        </div>
    </div>

    <div class="overflow-auto">
        <table class="my-2 table-auto">
            <thead>
                <tr class="text-xs md:text-sm">
                    <!--[if BLOCK]><![endif]--><?php if($selectionMode): ?>
                        <th></th>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>User Type</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-xs sm:text-sm" wire:key="<?php echo e($user->id); ?>">
                        <!--[if BLOCK]><![endif]--><?php if($selectionMode): ?>
                            <td x-data="{ isChecked: null }">
                                <input
                                    type="checkbox"
                                    class="accent-primary"
                                    x-model="isChecked"
                                    @change="
                                    isChecked ? $wire.selectUser(<?php echo e($user->id); ?>) : $wire.unselectUser(<?php echo e($user->id); ?>);"
                                />
                            </td>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                        <td class="whitespace-nowrap"><?php echo e($index + 1); ?></td>
                        <td class="whitespace-nowrap"><?php echo e($user->name); ?></td>
                        <td class="whitespace-nowrap"><?php echo e($user->email); ?></td>
                        <td class="whitespace-nowrap">
                            
                            <!--[if BLOCK]><![endif]--><?php if($user->HasilRekomendasi()->exists()): ?>
                                <span
                                    class="bg-primary inline-block w-max rounded-full px-2 py-1 text-white"
                                >
                                    Sudah Memilih
                                </span>
                            <?php else: ?>
                                <span
                                    class="bg-secondary inline-block w-max rounded-full px-2 py-1 text-black"
                                >
                                    Belum Memilih
                                </span>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </td>
                        <td>
                            <a
                                wire:navigate
                                href="<?php echo e(route("admin.user.result", $user->id)); ?>"
                            >
                                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'bg-dark-primary w-max px-2! text-white '.e($user->hasilRekomendasi()->exists()
                                            ? '' :  ' !text-black !cursor-not-allowed').'','disabled' => !$user->hasilRekomendasi()->exists()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-dark-primary w-max px-2! text-white '.e($user->hasilRekomendasi()->exists()
                                            ? '' :  ' !text-black !cursor-not-allowed').'','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!$user->hasilRekomendasi()->exists())]); ?>
                                    lihat hasil
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
                        </td>
                        <td class="whitespace-nowrap">
                            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['@click' => '$dispatch(\'modaldelete-open\', {
                                 id : \''.e($user->id).'\',
                                 name : `'.e($user->name).'` })','class' => 'w-6 rounded-lg bg-red-500 px-1!']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => '$dispatch(\'modaldelete-open\', {
                                 id : \''.e($user->id).'\',
                                 name : `'.e($user->name).'` })','class' => 'w-6 rounded-lg bg-red-500 px-1!']); ?>
                                <img
                                    src="/asset/trash.svg"
                                    alt="trash"
                                    class="h-6 w-6"
                                />
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
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>
    </div>

    <?php echo e($users->links()); ?>


    

    <?php if (isset($component)) { $__componentOriginal227a88e4577f56072361db363cadef5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal227a88e4577f56072361db363cadef5a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal-dialog','data' => ['xData' => '{show : false, id : \'\', name : \'\'}','xOn:modaldeleteOpen.window' => '
    show = true;
    id = $event.detail.id;
    name = $event.detail.name;
    ','xOn:modaldeleteClose.window' => 'show = false','contentClass' => 'text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal-dialog'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-data' => '{show : false, id : \'\', name : \'\'}','x-on:modaldelete-open.window' => '
    show = true;
    id = $event.detail.id;
    name = $event.detail.name;
    ','x-on:modaldelete-close.window' => 'show = false','content-class' => 'text-center']); ?>
        <h1 class="text-primary my-4 text-2xl">
            Yakin Hapus User
            <span x-text="name"></span>
            ?
        </h1>
        <div class="my-2 flex justify-center gap-4">
            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'bg-red-500 text-white','@click' => '$wire.delete(id)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-red-500 text-white','@click' => '$wire.delete(id)']); ?>
                Ya
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['@click' => '$dispatch(\'modaldelete-close\')','class' => 'bg-primary text-white']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => '$dispatch(\'modaldelete-close\')','class' => 'bg-primary text-white']); ?>
                Tidak
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
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal227a88e4577f56072361db363cadef5a)): ?>
<?php $attributes = $__attributesOriginal227a88e4577f56072361db363cadef5a; ?>
<?php unset($__attributesOriginal227a88e4577f56072361db363cadef5a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal227a88e4577f56072361db363cadef5a)): ?>
<?php $component = $__componentOriginal227a88e4577f56072361db363cadef5a; ?>
<?php unset($__componentOriginal227a88e4577f56072361db363cadef5a); ?>
<?php endif; ?>

    
    <?php if (isset($component)) { $__componentOriginal227a88e4577f56072361db363cadef5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal227a88e4577f56072361db363cadef5a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal-dialog','data' => ['xData' => '{show : false}','xOn:modaldeleteselectionOpen.window' => '
    show = true;
    ','xOn:modaldeleteselectionClose.window' => 'show = false','contentClass' => 'text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal-dialog'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-data' => '{show : false}','x-on:modaldeleteselection-open.window' => '
    show = true;
    ','x-on:modaldeleteselection-close.window' => 'show = false','content-class' => 'text-center']); ?>
        <h1 class="text-primary my-4 text-2xl">
            Yakin Hapus User yang Di Pilih
            <span x-text="name"></span>
            ?
        </h1>
        <div class="my-2 flex justify-center gap-4">
            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'bg-red-500 text-white','@click' => '$wire.deleteSelected()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-red-500 text-white','@click' => '$wire.deleteSelected()']); ?>
                Ya
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['@click' => '$dispatch(\'modaldeleteselection-close\')','class' => 'bg-primary text-white']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => '$dispatch(\'modaldeleteselection-close\')','class' => 'bg-primary text-white']); ?>
                Tidak
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
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal227a88e4577f56072361db363cadef5a)): ?>
<?php $attributes = $__attributesOriginal227a88e4577f56072361db363cadef5a; ?>
<?php unset($__attributesOriginal227a88e4577f56072361db363cadef5a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal227a88e4577f56072361db363cadef5a)): ?>
<?php $component = $__componentOriginal227a88e4577f56072361db363cadef5a; ?>
<?php unset($__componentOriginal227a88e4577f56072361db363cadef5a); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?><?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/livewire/users-table.blade.php ENDPATH**/ ?>
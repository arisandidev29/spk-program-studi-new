<?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'mx-auto max-w-5xl p-3!']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mx-auto max-w-5xl p-3!']); ?>
    <div class="flex items-center gap-4">
        <div class="bg-primary w-max rounded-xl p-4">
            <img src="/asset/kriteria.svg" alt="user" class="w-6" />
        </div>
        <p class="dark:text-gray-200">Kriteria</p>
    </div>

    <a
        wire:navigate
        href="<?php echo e(route("admin.kriteria.create")); ?>"
        class="my-4 inline-block"
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
            Buat Kriteria
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
    

    <div
        x-data="{
            modal: {
                show: false,
            },
        }"
        class="flex flex-col gap-4 p-2 md:p-8"
    >
        
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $kriterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="relative">
                <div
                    class="flex flex-col-reverse items-center justify-between gap-2 md:flex-row"
                >
                    <div class="">
                        <p
                            class="border-primary text-primary inline-block rounded-full border p-2 text-xs"
                        >
                            <?php echo e($kriteria->kode_kriteria); ?>

                        </p>
                        <p
                            class="border-primary text-primary inline-block rounded-full border p-2 text-xs"
                        >
                            <?php echo e($kriteria->kategori); ?>

                        </p>
                        <p
                            class="border-dark-primary text-dark-primary inline-block rounded-full border p-2 text-xs"
                        >
                            Bobot : <?php echo e($kriteria->bobot->normalisasi); ?>

                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <a
                            wire:navigate
                            href="<?php echo e(route("admin.kriteria.edit", $kriteria->id)); ?>"
                        >
                            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'group bg-secondary flex items-center gap-2 px-2! text-sm text-black duration-300 hover:bg-amber-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'group bg-secondary flex items-center gap-2 px-2! text-sm text-black duration-300 hover:bg-amber-500']); ?>
                                Edit
                                <svg
                                    class="w-4"
                                    width="20"
                                    height="19.991"
                                    viewBox="0 0 20 19.991"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g>
                                        <rect width="20" height="19.991" />
                                        <g
                                            id="Complete"
                                            transform="translate(1.667 1.666)"
                                        >
                                            <g id="edit">
                                                <g id="Group">
                                                    <path
                                                        id="Path"
                                                        d="M15 9.99527C15 9.99527 15 13.327 15 13.327C15 14.2471 14.2538 14.9929 13.3333 14.9929C13.3333 14.9929 1.66667 14.9929 1.66667 14.9929C0.746192 14.9929 0 14.2471 0 13.327C0 13.327 0 1.66588 0 1.66588C0 0.745839 0.746192 0 1.66667 0C1.66667 0 5 0 5 0"
                                                        fill="none"
                                                        stroke-width="2"
                                                        stroke="#000000"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        transform="translate(0 1.666)"
                                                    />
                                                    <path
                                                        id="Path"
                                                        d="M3.75 11.4946L11.6667 3.49834L8.16667 0L0.25 7.91292L0 11.6611L3.75 11.4946L3.75 11.4946Z"
                                                        fill="none"
                                                        stroke-width="2"
                                                        stroke="#000000"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        transform="translate(5 0)"
                                                    />
                                                </g>
                                            </g>
                                        </g>
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
                        </a>
                        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['@click' => '$dispatch(\'modaldelete-open\' , 
                            {
                                id : \''.e($kriteria->id).'\',
                                kriteria : \''.e($kriteria->kode_kriteria).'\',
                            } )','class' => 'bg-red-500 p-1! duration-300 hover:bg-red-700']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => '$dispatch(\'modaldelete-open\' , 
                            {
                                id : \''.e($kriteria->id).'\',
                                kriteria : \''.e($kriteria->kode_kriteria).'\',
                            } )','class' => 'bg-red-500 p-1! duration-300 hover:bg-red-700']); ?>
                            <svg
                                class="w-6"
                                width="23"
                                height="22.988"
                                viewBox="0 0 23 22.988"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <g>
                                    <rect width="23" height="22.988" />
                                    <path
                                        id="trash"
                                        d="M16.5312 5.74733C16.5312 5.74733 2.15625 5.74733 2.15625 5.74733C1.7595 5.74733 1.4375 5.4262 1.4375 5.02894C1.4375 4.63238 1.7595 4.31055 2.15625 4.31055C2.15625 4.31055 16.5312 4.31055 16.5312 4.31055C16.928 4.31055 17.25 4.63238 17.25 5.02894C17.25 5.4262 16.928 5.74733 16.5312 5.74733C16.5312 5.74733 16.5312 5.74733 16.5312 5.74733L16.5312 5.74733ZM15.8125 20.1151C15.8125 20.9082 15.1685 21.5519 14.375 21.5519C14.375 21.5519 4.3125 21.5519 4.3125 21.5519C3.519 21.5519 2.875 20.9082 2.875 20.1151C2.875 20.1151 2.875 7.18408 2.875 7.18408L15.8125 7.18408L15.8125 20.1151L15.8125 20.1151C15.8125 20.1151 15.8125 20.1151 15.8125 20.1151ZM7.1875 2.1554C7.1875 1.75814 7.5095 1.43701 7.90625 1.43701C7.90625 1.43701 10.7812 1.43701 10.7812 1.43701C11.178 1.43701 11.5 1.75814 11.5 2.1554C11.5 2.1554 11.5 2.87379 11.5 2.87379L7.1875 2.87379L7.1875 2.1554L7.1875 2.1554C7.1875 2.1554 7.1875 2.1554 7.1875 2.1554ZM17.25 2.87356L12.9375 2.87356C12.9375 2.87356 12.9375 1.43678 12.9375 1.43678C12.9375 0.643675 12.2935 0 11.5 0C11.5 0 7.1875 0 7.1875 0C6.394 0 5.75 0.643675 5.75 1.43678C5.75 1.43678 5.75 2.87356 5.75 2.87356C5.75 2.87356 1.4375 2.87356 1.4375 2.87356C0.643997 2.87356 0 3.51724 0 4.31034C0 4.31034 0 5.74712 0 5.74712C0 6.54023 0.643997 7.1839 1.4375 7.1839C1.4375 7.1839 1.4375 20.1149 1.4375 20.1149C1.4375 21.7019 2.72477 22.9885 4.3125 22.9885C4.3125 22.9885 14.375 22.9885 14.375 22.9885C15.9627 22.9885 17.25 21.7019 17.25 20.1149C17.25 20.1149 17.25 7.1839 17.25 7.1839C18.0435 7.1839 18.6875 6.54023 18.6875 5.74712C18.6875 5.74712 18.6875 4.31034 18.6875 4.31034C18.6875 3.51724 18.0435 2.87356 17.25 2.87356C17.25 2.87356 17.25 2.87356 17.25 2.87356L17.25 2.87356ZM9.34375 20.1151C9.7405 20.1151 10.0625 19.794 10.0625 19.3967C10.0625 19.3967 10.0625 10.776 10.0625 10.776C10.0625 10.3795 9.7405 10.0576 9.34375 10.0576C8.947 10.0576 8.625 10.3795 8.625 10.776C8.625 10.776 8.625 19.3967 8.625 19.3967C8.625 19.794 8.947 20.1151 9.34375 20.1151C9.34375 20.1151 9.34375 20.1151 9.34375 20.1151C9.34375 20.1151 9.34375 20.1151 9.34375 20.1151ZM5.75 20.1151C6.14675 20.1151 6.46875 19.794 6.46875 19.3967C6.46875 19.3967 6.46875 10.776 6.46875 10.776C6.46875 10.3795 6.14675 10.0576 5.75 10.0576C5.35325 10.0576 5.03125 10.3795 5.03125 10.776C5.03125 10.776 5.03125 19.3967 5.03125 19.3967C5.03125 19.794 5.35325 20.1151 5.75 20.1151C5.75 20.1151 5.75 20.1151 5.75 20.1151C5.75 20.1151 5.75 20.1151 5.75 20.1151ZM12.9375 20.1151C13.3343 20.1151 13.6562 19.794 13.6562 19.3967C13.6562 19.3967 13.6562 10.776 13.6562 10.776C13.6562 10.3795 13.3343 10.0576 12.9375 10.0576C12.5407 10.0576 12.2188 10.3795 12.2188 10.776C12.2188 10.776 12.2188 19.3967 12.2188 19.3967C12.2188 19.794 12.5407 20.1151 12.9375 20.1151C12.9375 20.1151 12.9375 20.1151 12.9375 20.1151C12.9375 20.1151 12.9375 20.1151 12.9375 20.1151Z"
                                        fill="#ECECEC"
                                        fill-rule="evenodd"
                                        transform="translate(2.156 0)"
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
                </div>
                <?php if (isset($component)) { $__componentOriginal49c2ff89931ec24f8a7c07fed8459e6f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49c2ff89931ec24f8a7c07fed8459e6f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.question-head','data' => ['number' => $index + 1,'kriteria' => $kriteria->kriteria,'question' => $kriteria->desc,'note' => $kriteria->note]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('question-head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['number' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($index + 1),'kriteria' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($kriteria->kriteria),'question' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($kriteria->desc),'note' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($kriteria->note)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal49c2ff89931ec24f8a7c07fed8459e6f)): ?>
<?php $attributes = $__attributesOriginal49c2ff89931ec24f8a7c07fed8459e6f; ?>
<?php unset($__attributesOriginal49c2ff89931ec24f8a7c07fed8459e6f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49c2ff89931ec24f8a7c07fed8459e6f)): ?>
<?php $component = $__componentOriginal49c2ff89931ec24f8a7c07fed8459e6f; ?>
<?php unset($__componentOriginal49c2ff89931ec24f8a7c07fed8459e6f); ?>
<?php endif; ?>
                <div class="my-6">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $alterantives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alternative): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('program-studi-answer', ['kriteriaId' => ''.e($kriteria->id).'','kriteria_id' => ''.e($kriteria->id).'','programStudi' => $alternative]);

$__html = app('livewire')->mount($__name, $__params, $alternative->id . '-' . $kriteria->id, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
            <hr class="text-divider my-4" />
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

        <?php if (isset($component)) { $__componentOriginal227a88e4577f56072361db363cadef5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal227a88e4577f56072361db363cadef5a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal-dialog','data' => ['xData' => '{
                show : false,
                kriteria : \'\',
                id : \'\'
            }','xShow' => 'show','xOn:modaldeleteOpen.window' => '
            show = true;
            kriteria = $event.detail.kriteria;
            id = $event.detail.id;
            ','xOn:modaldeleteClose.window' => 'show = false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal-dialog'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-data' => '{
                show : false,
                kriteria : \'\',
                id : \'\'
            }','x-show' => 'show','x-on:modaldelete-open.window' => '
            show = true;
            kriteria = $event.detail.kriteria;
            id = $event.detail.id;
            ','x-on:modaldelete-close.window' => 'show = false']); ?>
            <h2 class="text-center text-lg md:text-2xl">
                Yakin hapus Kriteria <span x-text="kriteria"></span> ?
                
            </h2>
            <div class="mt-6 flex justify-center gap-4">
                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'bg-red-500 text-sm text-white md:text-base','@click' => '$wire.deleteKriteria(id)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-red-500 text-sm text-white md:text-base','@click' => '$wire.deleteKriteria(id)']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['@click' => 'show = false','class' => 'bg-primary text-sm text-white md:text-base']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'show = false','class' => 'bg-primary text-sm text-white md:text-base']); ?>
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
<?php endif; ?><?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/livewire/kriteria-list.blade.php ENDPATH**/ ?>
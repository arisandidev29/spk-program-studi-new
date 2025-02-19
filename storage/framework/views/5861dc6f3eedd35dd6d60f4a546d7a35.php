<nav class="flex gap-4 text-4xl text-black font-roboto flex-grow-1 ">
    <li class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'list-none',
        'active-navbar' => request()->routeIs('welcome'),
    ]); ?>"><a href="<?php echo e(Route('welcome')); ?>">HOME</a></li>
    <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(['list-none', 'active-navbar' => request()->routeIs('about')]); ?>" class="list-none"><a href="<?php echo e(Route('about')); ?>">ABOUT</a></li>
</nav>
<?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/components/navbar.blade.php ENDPATH**/ ?>
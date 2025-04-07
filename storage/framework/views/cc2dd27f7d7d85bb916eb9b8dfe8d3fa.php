<nav
    class="font-roboto flex flex-grow-1 items-center justify-center gap-4 text-sm text-black md:justify-start md:text-4xl"
>
    <li
        class="<?php echo \Illuminate\Support\Arr::toCssClasses(["hover:text-primary list-none duration-300", "active-navbar" => request()->routeIs("welcome")]); ?>"
    >
        <a href="<?php echo e(Route("welcome")); ?>">HOME</a>
    </li>
    <li
        class="<?php echo \Illuminate\Support\Arr::toCssClasses(["hover:text-primary list-none duration-300", "active-navbar" => request()->routeIs("about")]); ?>"
        class="list-none"
    >
        <a href="<?php echo e(Route("about")); ?>">ABOUT</a>
    </li>
</nav>
<?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/components/navbar.blade.php ENDPATH**/ ?>
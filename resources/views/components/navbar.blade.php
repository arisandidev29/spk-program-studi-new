<nav
    class="font-roboto flex flex-grow-1 items-center justify-center gap-4 text-sm text-black md:justify-start md:text-4xl"
>
    <li
        @class(["hover:text-primary list-none duration-300", "active-navbar" => request()->routeIs("welcome")])
    >
        <a href="{{ Route("welcome") }}" class="text-black dark:text-white">
            HOME
        </a>
    </li>
    <li
        @class(["hover:text-primary list-none duration-300", "active-navbar" => request()->routeIs("about")])
        class="list-none"
    >
        <a href="{{ Route("about") }}" class="text-black dark:text-white">
            ABOUT
        </a>
    </li>
</nav>

<nav class="font-roboto flex flex-grow-1 gap-4 text-4xl text-black">
    <li
        @class(["list-none", "active-navbar" => request()->routeIs("welcome")])
    >
        <a href="{{ Route("welcome") }}">HOME</a>
    </li>
    <li
        @class(["list-none", "active-navbar" => request()->routeIs("about")])
        class="list-none"
    >
        <a href="{{ Route("about") }}">ABOUT</a>
    </li>
</nav>

<nav class="flex gap-4 text-4xl text-black font-roboto flex-grow-1 ">
    <li @class([
        'list-none',
        'active-navbar' => request()->routeIs('welcome'),
    ])><a href="{{ Route('welcome') }}">HOME</a></li>
    <li @class(['list-none', 'active-navbar' => request()->routeIs('about')]) class="list-none"><a href="{{ Route('about') }}">ABOUT</a></li>
</nav>

<header class="relative flex h-max items-center gap-8 px-4 py-2">
    {{-- logo --}}
    <img src="/asset/logo.svg" alt="logo" class="w-16 md:w-36" />
    <x-navbar />

    <div id="right header" class="flex items-center gap-4">
        <a href="{{ Route("login") }}">
            <x-button class="bg-primary text-sm text-white md:text-base">
                Login
            </x-button>
        </a>

        {{-- user login navbar --}}

        @auth
            <x-user-navbar />
        @endauth
    </div>

    {{-- line --}}
    <div class="bg-divider absolute -bottom-1 left-0 h-0.5 w-full"></div>
</header>

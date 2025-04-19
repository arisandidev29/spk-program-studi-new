<header class="relative flex h-max items-center gap-8 px-4 py-2">
    {{-- logo --}}
    <img src="/asset/logo.svg" alt="logo" class="w-16 md:w-36" />
    <x-navbar />

    <div id="right header" class="flex items-center gap-4">
        <x-toggle-dark-mode />
        @if (! auth()->check())
            <a href="{{ Route("login") }}">
                <x-button
                    class="bg-primary text-xs text-white md:text-base md:text-sm"
                >
                    Login
                </x-button>
            </a>
        @else
            {{-- user login navbar --}}

            <livewire:user-navbar />
        @endif
    </div>

    {{-- line --}}
    <div class="bg-divider absolute -bottom-1 left-0 h-0.5 w-full"></div>
</header>

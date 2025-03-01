<header class=" relative flex items-center gap-8 px-4 py-2 h-max">
    {{-- logo --}}
    <img src="/asset/logo.svg" alt="logo" class="  md:w-36">
    <x-navbar />

    <div id="right header" class="flex items-center gap-4">
        <a href="{{ Route('login') }}"><x-button class="bg-primary text-white ">Login</x-button></a>

        {{-- user login navbar --}}
        <x-user-navbar />
        
    </div>

    {{-- line --}}
    <div class=" absolute left-0 -bottom-1 w-full  h-0.5 bg-divider">
    </div>

</header>

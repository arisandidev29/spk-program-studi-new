<header class=" relative flex items-center gap-8 px-4 py-2 h-max">
    {{-- logo --}}
    <img src="/asset/logo.svg" alt="logo" class="  md:w-36">
    <x-navbar />

    <a href="{{ Route('login') }}"><x-button class="bg-primary text-white ">Login</x-button></a>

    {{-- line --}}
    <div class=" absolute left-0 -bottom-1 w-full  h-0.5 bg-divider">
    </div>

</header>

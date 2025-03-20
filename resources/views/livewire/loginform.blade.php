<?php

use function Livewire\Volt\{state};

//

?>

<form
    class="relative mx-auto my-2 max-w-sm rounded-sm border-1 border-solid border-gray-600 px-8 py-10 md:my-6 md:px-10 md:py-14"
>
    <x-input placeholder="Username" type="text" class="text-sm md:text-base placeholder:text-sm md:placeholder:text-base" />

    <x-input placeholder="Password" type="password" class="text-sm md:text-base placeholder:text-sm md:placeholder:text-base " />

    <a href="" class="-mt-2 mb-2 block">
        <small class="font-roboto text-xs text-primary font-extralight italic">
            Lupa password
        </small>
    </a>

    <x-button class="bg-primary w-full font-bold text-sm md:text-base text-white">Login</x-button>
    <small class="text-xs text-primary block text-center italic">
        Belum punya akun ?
        <a href="{{ route("register") }}" class="underline">Register disini</a>
    </small>

    {{-- circle --}}
    <div
        class="bg-primary shadow-primary absolute -right-14 -bottom-10 -z-10 h-20 w-20 rounded-full shadow-[0_0_50px_40px]"
    ></div>
</form>

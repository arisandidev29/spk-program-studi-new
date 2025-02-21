<?php

use function Livewire\Volt\{state};

//

?>

<form class="relative max-w-sm mx-auto border-1 border-gray-600 border-solid py-10 md:py-14 px-8 md:px-10 my-6 rounded-sm">
    <x-input placeholder="Username" type="text" />

    <x-input placeholder="Password" type="password" class="  " />

    <a href="" class="block -mt-2  mb-2"><small class="font-roboto italic font-xs  font-extralight text-primary ">Lupa
            password</small></a>

    <x-button class="bg-primary w-full text-white font-bold">Login</x-button>
    <small class="text-center block italic font-xs text-primary">Belum punya akun ? <a href="{{ route('register') }}"
            class="underline">Register  disini</a></small>

    {{-- circle --}}
    <div
        class=" absolute -bottom-10 -right-14 w-20 h-20 bg-primary rounded-full shadow-primary shadow-[0_0_50px_40px] -z-10  ">
    </div>
</form>

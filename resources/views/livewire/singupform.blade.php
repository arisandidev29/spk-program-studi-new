<?php

use function Livewire\Volt\{state};

//

?>

<form  class="order-1 relative max-w-sm mx-auto border-1 border-gray-600 border-solid py-10 md:py-14 px-8 md:px-10 my-6 rounded-sm">
    <x-input placeholder="Name" type="text" value="testing"/>
    <x-input placeholder="Username" type="text" />
    <x-input placeholder="Email" type="Email" />
    <x-input placeholder="Password" type="password" />
    <x-input placeholder="Password Confirmasi" type="password" />
    <x-input placeholder="token" type="text" />



    <x-button class="bg-primary text-white w-full" >Sing Up</x-button>
     <small class="text-center block italic font-xs text-primary">Sudah punya akun ? <a href="{{ route('login') }}"
            class="underline">Login disini</a></small>
    



</form>

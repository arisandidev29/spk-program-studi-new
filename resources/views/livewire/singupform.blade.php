<?php
use function Livewire\Volt\{state};
use function Livewire\Volt\{rules};

state([
    "Name" => "",
    "Username" => "",
    "Email" => "",
    "Password" => "",
    "Password_Confirmasi" => "",
    "Token" => "",
]);

rules([
    "Name" => "required",
    "Username" => "required",
    "Email" => "required",
    "Password" => "required",
    "Password_Confirmasi" => "required",
    "Token" => "required",
]);

$register = function () {
    $this->validate();
};
?>

<form
    wire:submit="register"
    class="relative order-1 mx-auto my-6 max-w-sm rounded-sm border-1 border-solid border-gray-600 px-8 py-10 md:px-10 md:py-14"
>
    <x-input placeholder="name" type="text" value="testing" wire:model="Name" />
    <x-input placeholder="Username" type="text" wire:model="Username" />
    <x-input placeholder="Email" type="Email" wire:model="Email" />
    <x-input placeholder="Password" type="password" wire:model="Password" />
    <x-input
        placeholder="Password_Confirmasi"
        type="password"
        wire:model="Password_Confirmasi"
    />
    <x-input placeholder="Token" type="text" wire:model="Token" />
    <a
        href=""
        class="text-primary hover:text-dark-primary -mt-2 block text-xs italic underline"
    >
        Cara mendapatkan Token
    </a>

    <x-input-file-upload>
        <div
            class="font-roboto my-1 flex flex-col text-sm text-gray-500 italic"
        >
            <span>format file : jpeg,jpg,png</span>
            <span>Max file : 2Mb</span>
        </div>
    </x-input-file-upload>

    <x-button class="bg-primary w-full text-white">Sing Up</x-button>
    <small class="font-xs text-primary block text-center italic">
        Sudah punya akun ?
        <a href="{{ route("login") }}" class="underline">Login disini</a>
    </small>

    {{-- circle --}}

    <div
        class="bg-primary shadow-primary absolute -bottom-10 -left-14 -z-10 h-20 w-20 rounded-full shadow-[0_0_50px_40px]"
    ></div>
</form>

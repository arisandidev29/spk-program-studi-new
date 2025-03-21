<form
    wire:submit="register"
    class="relative order-1 mx-auto my-6 max-w-sm rounded-sm border-1 border-solid border-gray-600 px-8 py-10 md:px-10 md:py-14"
>


{{-- @if($errors->any())
@php
    dump($errors)
@endphp
@endif --}}
    <x-input placeholder="Username" error="username" type="text" wire:model="username" />
    <x-input placeholder="Email" error="email" type="Email" wire:model="email" />
    <x-input-password placeholder="Password" error="password" type="password" wire:model="password" />
    <x-input-password
        placeholder="Password Konfirmasi"
        type="password"
        error="password_confirm"
        wire:model="password_confirm"
    />
    <x-input placeholder="Token" error="token" type="text" error="token" wire:model="token" />
    <a
        href=""
        class="text-primary hover:text-dark-primary -mt-2 block text-xs italic underline"
    >
        Cara mendapatkan Token
    </a>

    <x-input-file-upload wire:model="profile_pic" placeholder="Profile Pic" error="profile_pic">
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
<form
    wire:submit="register"
    class="relative order-1 mx-auto my-6 max-w-sm rounded-sm border-1 border-solid border-gray-600 px-8 py-10 md:px-10 md:py-14"
>
    <x-input
        placeholder="Username"
        error="username"
        type="text"
        wire:model="username"
        label-class="dark:bg-gray-800"
    />
    <x-input
        placeholder="Email"
        error="email"
        type="Email"
        wire:model="email"
        label-class="dark:bg-gray-800"
    />
    <x-input-password
        placeholder="Password"
        error="password"
        type="password"
        wire:model="password"
    />
    <x-input-password
        placeholder="Password Konfirmasi"
        type="password"
        error="password_confirm"
        wire:model="password_confirm"
    />
    <x-input
        placeholder="Token"
        error="token"
        type="text"
        error="token"
        wire:model="token"
        label-class="dark:bg-gray-800"
    />
    <a
        href=""
        class="text-primary hover:text-dark-primary -mt-2 block text-xs italic underline"
    >
        Cara mendapatkan Token
    </a>

    <x-input-file-upload
        wire:model="profile_pic"
        placeholder="Profile Pic"
        error="profile_pic"
    >
        <div
            class="font-roboto my-1 flex flex-col text-sm text-gray-500 italic dark:text-gray-300"
        >
            <span>Photo profile opsional</span>
            <span>format file : jpeg,jpg,png</span>
            <span>Max file : 2Mb</span>
        </div>
    </x-input-file-upload>

    <x-button
        wire:loading.class="!cursor-not-allowed !bg-dark-primary"
        class="bg-primary flex w-full items-center justify-center gap-2 text-white"
    >
        <svg
            wire:loading
            class="h-5 w-5 animate-spin"
            width="800px"
            height="800px"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                d="M20.0001 12C20.0001 13.3811 19.6425 14.7386 18.9623 15.9405C18.282 17.1424 17.3022 18.1477 16.1182 18.8587C14.9341 19.5696 13.5862 19.9619 12.2056 19.9974C10.825 20.0328 9.45873 19.7103 8.23975 19.0612"
                stroke="#fff"
                stroke-width="3.55556"
                stroke-linecap="round"
            />
        </svg>
        Sing Up
    </x-button>
    <small class="font-xs text-primary block text-center italic">
        Sudah punya akun ?
        <a href="{{ route("login") }}" class="underline">Login disini</a>
    </small>

    {{-- circle --}}

    <div
        class="bg-primary shadow-primary absolute -bottom-10 -left-14 -z-10 h-20 w-20 rounded-full shadow-[0_0_50px_40px]"
    ></div>
</form>

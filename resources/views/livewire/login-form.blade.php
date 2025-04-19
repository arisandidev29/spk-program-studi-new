<form
    class="relative mx-2 my-2 max-w-sm rounded-sm border-1 border-solid border-gray-600 px-8 py-10 md:mx-auto md:my-6 md:px-10 md:py-14"
>
    @if (session()->has("error"))
        <p
            class="font-roboto mb-2 rounded-lg bg-red-500 p-2 text-center text-sm text-white md:text-base"
        >
            {{ session()->get("error") }}
        </p>
    @endif

    @if (session()->has("message"))
        <p
            class="bg-primary font-roboto mb-2 rounded-lg p-2 text-center text-sm text-white md:text-base"
        >
            {{ session()->get("message") }}
        </p>
    @endif

    <x-input
        placeholder="username"
        type="text"
        class="text-sm placeholder:text-sm md:text-base md:placeholder:text-base"
        label-class="dark:bg-gray-800"
        icon="/asset/user-2.svg"
        wire:model="username"
    />

    <x-input-password
        placeholder="password"
        type="password"
        class="text-sm placeholder:text-sm md:text-base md:placeholder:text-base"
        icon="/asset/password.svg"
        wire:model="password"
    />

    <div class="my-2 flex items-center justify-between">
        <label for="rememberMe" class="flex items-center gap-2">
            <input
                type="checkbox"
                class="accent-primary"
                wire:model="rememberMe"
            />
            <small class="text-dark-primary dark:text-primary">
                Remember Me
            </small>
        </label>

        <a href="" class="block">
            <small
                class="font-roboto text-primary text-xs font-extralight italic"
            >
                Lupa password
            </small>
        </a>
    </div>

    <x-button
        type="button"
        wire:click="login"
        class="bg-primary w-full text-sm font-bold text-white md:text-base"
    >
        Login
    </x-button>
    <small class="text-primary block text-center text-xs italic">
        Belum punya akun ?
        <a href="{{ route("register") }}" class="underline">Register disini</a>
    </small>

    {{-- circle --}}
    <div
        class="bg-primary shadow-primary absolute -right-14 -bottom-10 -z-10 h-20 w-20 rounded-full shadow-[0_0_50px_40px]"
    ></div>
</form>

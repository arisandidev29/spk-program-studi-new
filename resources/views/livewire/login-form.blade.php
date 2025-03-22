<form
    class="relative mx-2  md:mx-auto  my-2  max-w-sm rounded-sm border-1 border-solid border-gray-600 px-8 py-10 md:my-6 md:px-10 md:py-14"
>

    @if(session()->has('error'))
        <p class="bg-red-500 mb-2 text-white p-2 text-sm md:text-base text-center font-roboto rounded-lg">{{session()->get("error")}}</p>
    @endif

    @if(session()->has('message'))
        <p class="bg-primary mb-2 text-white p-2 text-sm md:text-base text-center font-roboto rounded-lg">{{session()->get("message")}}</p>
    @endif
    <x-input placeholder="username" type="text" class="text-sm md:text-base placeholder:text-sm md:placeholder:text-base" icon="/asset/user-2.svg" wire:model="username" />

    {{-- <x-input placeholder="password" type="password" class="text-sm md:text-base placeholder:text-sm md:placeholder:text-base " icon="/asset/password.svg" wire:model="password" /> --}}

    <x-input-password placeholder="password" type="password" class="text-sm md:text-base placeholder:text-sm md:placeholder:text-base " icon="/asset/password.svg" wire:model="password" />

    <div class="flex justify-between items-center my-2 ">
        <label for="rememberMe" class="flex items-center gap-2">
            <input type="checkbox" class="accent-primary" wire:model='rememberMe' >
            <small class="text-dark-primary">Remember Me</small>
        </label>

        <a href="" class=" block">
            <small class="font-roboto text-xs text-primary font-extralight italic">
                Lupa password
            </small>
        </a>
    </div>

    <x-button type="button" wire:click='login' class="bg-primary w-full font-bold text-sm md:text-base text-white">Login</x-button>
    <small class="text-xs text-primary block text-center italic">
        Belum punya akun ?
        <a href="{{ route("register") }}" class="underline">Register disini</a>
    </small>

    {{-- circle --}}
    <div
        class="bg-primary shadow-primary absolute -right-14 -bottom-10 -z-10 h-20 w-20 rounded-full shadow-[0_0_50px_40px]"
    ></div>
</form>
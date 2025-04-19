@props([
    "placeholder" => "",
    "value" => null,
    "icon" => null,
    "type" => "password",
    "error" => null,
])
<div
    x-data="{
        value: '{{ $value }}' ?? @entangle($attributes->wire("model")),
        showPassword: false,
    }"
    class="relative"
>
    <input
        id="{{ $placeholder }}"
        x-ref="{{ "input" . $placeholder }}"
        value="{{ $value }}"
        x-model="value"
        :type="showPassword ? 'text' : '{{ $type }}'"
        {{
            $attributes->class([
                "peer border-primary focus:border-dark-primary my-2 w-full rounded-md border-1 px-6 py-2 pr-7 outline-none dark:text-gray-300",
                "border-red-500!" => $errors->has($placeholder),
            ])
        }}
        {{ $attributes }}
    />

    {{-- icon --}}

    @if ($icon)
        <img
            src="{{ $icon }}"
            alt=""
            class="{{ $attributes->get("icon-class") }} absolute top-5 right-1 mr-2 block w-4"
        />
    @endif

    <label
        for="{{ $placeholder }}"
        :class="{ 'px-2! -top-1! left-2!  text-xs!': value }"
        class="absolute top-4.5 left-5 rounded-lg bg-transparent text-gray-400 transition-all peer-focus:-top-1 peer-focus:left-2 peer-focus:px-2 peer-focus:text-xs"
    >
        {{ $placeholder }}
    </label>

    <button
        type="button"
        for="{{ $placeholder }}"
        @click="showPassword = !showPassword"
        class="flex cursor-pointer items-center gap-2"
    >
        <img
            :src="showPassword ? '/asset/eye-slash.svg' : '/asset/eye.svg'"
            alt="eye"
            class="w-4 dark:invert"
        />
        <span
            class="text-sm text-black dark:text-gray-300"
            x-text="showPassword ? 'Hide Password' : 'Show Password'"
        ></span>
    </button>

    @error($error ?? $placeholder)
        <p class="text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>

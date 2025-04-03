@props([
    "placeholder" => "",
    "type" => "text",
    "value" => null,
    "icon" => null,
    "error" => null,
])
<div
    x-data="{
        value: '{{ $value }}' ?? @entangle($attributes->wire("model")),
    }"
    class="relative {{$attributes->get('class-wrapper')}}"
>
    <input
        id="{{ $placeholder }}"
        x-ref="{{ "input" . $placeholder }}"
        value="{{ $value }}"
        x-model="value"
        type="{{ $type }}"
        {{
            $attributes->class([
                "peer border-primary focus:border-dark-primary my-2 w-full rounded-md border-1 px-6 py-2 pr-7 outline-none",
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
        class="absolute top-4.5 left-5 rounded-lg bg-white text-gray-400 transition-all peer-focus:-top-1 peer-focus:left-2 peer-focus:px-2 peer-focus:text-xs"
    >
        {{ $placeholder }}
    </label>

    {{ $slot }}

    @error($error ?? $placeholder)
        <p class="text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>

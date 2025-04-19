@props([
    "placeholder" => "",
    "value" => "",
    "parrentClass" => "",
    "error" => null,
])
<div x-data="{ value: @js($value) }" class="{{ $parrentClass }} relative">
    <textarea
        id="{{ $placeholder }}"
        x-model="value"
        value="{{ $value }}"
        {{
            $attributes->class([
                "peer border-primary focus:border-dark-primary my-2 w-full rounded-md border-1 px-6 py-2 pr-7 text-sm outline-none md:text-base dark:text-gray-300",
                "border-red-500!" => $errors->has($placeholder),
            ])
        }}
        {{ $attributes }}
    ></textarea>

    <label
        for="{{ $placeholder }}"
        :class="{ 'px-2! -top-1! left-2!  text-xs!': value }"
        class="absolute top-4.5 left-5 rounded-lg bg-white text-gray-400 transition-all peer-focus:-top-1 peer-focus:left-2 peer-focus:px-2 peer-focus:text-xs dark:bg-gray-700"
    >
        {{ $placeholder }}
    </label>

    @error($error ?? $placeholder)
        <p class="text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>

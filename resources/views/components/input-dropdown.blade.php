@props([
    "name" => "",
])
<div>
    <select
        {{
            $attributes->class([
                "peer border-primary focus:border-dark-primary my-2 w-full rounded-md border-1 px-6 py-2 pr-7 outline-none",
                "border-red-500!" => $errors->has($name),
            ])
        }}
        {{ $attributes }}
    >
        @if ($slot)
            <option value="">{{ $name }}</option>
            {{ $slot }}
        @else
            <option value="">Dropdown</option>
        @endif
    </select>
    @error($name)
        <p class="text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>

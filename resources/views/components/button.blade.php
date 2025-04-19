@props([
    "disabled" => false,
])
<button
    {{ $attributes->merge(["class" => "px-6 py-2 rounded-md cursor-pointer "]) }}
    @if ($disabled)
        disabled
    @endif
    {{ $attributes }}
>
    {{ $slot }}
</button>

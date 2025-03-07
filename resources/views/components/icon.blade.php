@props([
    "svg",
])
<span {{ $attributes->merge(["class" => "w-2 h-6"]) }}>
    {!! $svg !!}
</span>

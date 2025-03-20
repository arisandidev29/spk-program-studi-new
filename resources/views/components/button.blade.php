<button
    {{ $attributes->merge(["class" => "px-6 py-2 rounded-md cursor-pointer"]) }}
    {{ $attributes }}
>
    {{ $slot }}
</button>

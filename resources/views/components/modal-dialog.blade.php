<div
    role="dialog"
    aria-modal="true"
    x-show="show"
    x-cloak
    {{ $attributes->merge(["class" => "bg-[rgba(0,0,0,.6)] z-50 fixed inset-0 grid place-content-center"]) }}
    {{ $attributes }}
>
    <div
        class="{{ $attributes->get("content-class") }} w-[90vw] max-w-2xl rounded-xl bg-white px-8 py-4 dark:bg-gray-700"
    >
        {{ $slot }}
    </div>
</div>

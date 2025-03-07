<div
    x-cloak
    x-show="{{ $attributes->get("show") }}"
    class="fixed inset-0 grid items-start justify-center bg-[rgba(0,0,0,.4)] pt-[20vh]"
>
    <div
        x-show="{{ $attributes->get("show") }}"
        x-transition
        class="relative min-h-40 w-xl rounded-2xl bg-white p-4 opacity-100"
    >
        {{ $slot }}
    </div>
</div>

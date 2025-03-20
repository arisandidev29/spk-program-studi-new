<div
    x-cloak
    x-show="isVisible"
    @keydown.escape="isVisible = false"
    class="fixed inset-0 z-50 flex items-start justify-center bg-black/40 pt-[15vh]"
    x-data="{ isVisible: {{ $show ? "true" : "false" }} }"
    x-on:close="$dispatch('close')"
>
    <div
        x-show="isVisible"
        x-transition:enter="transition duration-300 ease-out"
        x-transition:enter-start="scale-95 opacity-0"
        x-transition:enter-end="scale-100 opacity-100"
        x-transition:leave="transition duration-200 ease-in"
        x-transition:leave-start="scale-100 opacity-100"
        x-transition:leave-end="scale-95 opacity-0"
        class="{{ $maxWidth ?? "max-w-md" }} relative mx-4 w-full rounded-xl bg-white p-4 shadow-lg"
        @click.outside="isVisible = false; $dispatch('close')"
    >
        <!-- Header (opsional) -->
        @if ($title)
            <div class="mb-4 border-b pb-2 text-lg font-semibold text-gray-800">
                {{ $title }}
            </div>
        @endif

        <!-- Content -->
        <div>
            {{ $slot }}
        </div>
    </div>
</div>

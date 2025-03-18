<div
    x-cloak
    x-show="isVisible"
    @keydown.escape="isVisible = false"
    class="fixed inset-0 z-50 flex items-start justify-center bg-black/40 pt-[15vh]"
    x-data="{ isVisible: {{ $show ? 'true' : 'false' }} }"
    x-on:close="$dispatch('close')"
>
    <div
        x-show="isVisible"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="relative bg-white rounded-xl shadow-lg p-4 {{ $maxWidth ?? 'max-w-md' }} w-full mx-4"
        @click.outside="isVisible = false; $dispatch('close')"
    >
        <!-- Header (opsional) -->
        @if ($title)
            <div class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">
                {{ $title }}
            </div>
        @endif

        <!-- Content -->
        <div>
            {{ $slot }}
        </div>
    </div>
</div>
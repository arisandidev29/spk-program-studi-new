<div>
    @if ($hasmadeChoice)
        <livewire:user-result />
    @else
        <div
            class="flex min-h-[80vh] flex-col items-center justify-center gap-2"
        >
            <h1 class="my-2 text-xl md:text-4xl dark:text-gray-200">
                Selamat Datang
                <span class="text-primary">{{ auth()->user()->name }}</span>
            </h1>

            <img
                src="/asset/girls-with-tree.svg"
                alt="girls with tree"
                class="my-2 w-[60%] max-w-sm"
            />

            <p
                class="my-2 w-64 text-center text-sm md:text-xl dark:text-gray-200"
            >
                Yuk Cari tau Rekomendasi Program Studi Untuk Mu !
            </p>

            <a
                wire:navigate
                href="{{ route("question", $firstKriteria->id) }}"
            >
                <x-button
                    class="bg-secondary flex gap-4 text-sm font-bold text-black md:text-base"
                >
                    Mulai
                    <img src="/asset/play.svg" alt="play" class="w-3" />
                </x-button>
            </a>
        </div>
    @endif
</div>

<x-layout>
    <div class="flex min-h-[80vh] flex-col items-center justify-center gap-2">
        <h1 class="my-2 text-xl md:text-4xl">
            Selamat Datang
            <span class="text-primary">{{auth()->user()->name}}</span>
        </h1>

        <img
            src="/asset/girls-with-tree.svg"
            alt="girls with tree"
            class="my-2 w-[60%] max-w-sm "
        />

        <p class="my-2 w-64 text-sm text-center md:text-xl">
            Yuk Cari tau Rekomendasi Program Studi Untuk Mu !
        </p>

        <x-button class="bg-secondary flex gap-4 text-sm md:text-base font-bold text-black">
            Mulai
            <img src="/asset/play.svg" alt="play" class="w-3" />
        </x-button>
    </div>
</x-layout>

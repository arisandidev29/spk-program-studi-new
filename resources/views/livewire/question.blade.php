<div class="mx-auto my-4 max-w-4xl">
    <x-question-head />
    <div class="flex flex-col gap-2">
        <livewire:program-studi-answer programStudi="Sistem informasi" />
        <livewire:program-studi-answer programStudi="Komputarisasi Akuntansi" />
        <livewire:program-studi-answer programStudi="Manajemen informatika" />
    </div>

    <x-button
        class="bg-secondary mt-4 text-sm font-bold text-black md:text-base"
        wire:click="submit()"
    >
        Submit
    </x-button>
</div>

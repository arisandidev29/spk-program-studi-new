<div class="mx-auto my-2 max-w-4xl md:my-4">
    <x-question-head
        :kriteria="$kriteria->kriteria"
        :question="$kriteria->desc"
        :note="$kriteria->note"
        :number="$number"
    />
    <div class="flex flex-col gap-2">
        @foreach ($alternatives as $alternative)
            <livewire:program-studi-answer
                :key="$alternative->id . $kriteria->id"
                :kriteria_id="$kriteria->id"
                :programStudi="$alternative"
            />
        @endforeach
    </div>

    <div class="flex items-center justify-between gap-4">
        @if (! $isFirstKriteria)
            <x-button wire:click="back" class="bg-primary font-bold text-white">
                Back
            </x-button>
        @endif

        @if ($isLastKriteria)
            <x-button
                class="bg-secondary font-bold text-black"
                @click="$dispatch('open')"
            >
                Selesai
            </x-button>
        @else
            <x-button
                class="bg-secondary text-sm font-bold text-black md:text-base"
                wire:click="submit()"
            >
                Next
            </x-button>
        @endif
    </div>

    {{-- modal konfirmasi --}}

    <x-modal-dialog
        x-data="{show : false}"
        x-on:close="show = false"
        x-on:open.window="show = true"
    >
        <h2 class="font-poppins text-center text-2xl dark:text-gray-100">
            Yakin Udah Selesai 🤔 ??
        </h2>
        <p
            class="mx-auto my-2 max-w-md text-center text-sm text-gray-500 dark:text-gray-300"
        >
            Pastikan semua jawaban sudah terisi dengan benar Kamu dapat kembali
            untuk ganti jawaban kamu
        </p>
        <div class="mt-4 flex justify-center gap-4">
            <x-button
                class="bg-primary font-bold text-white"
                @click="show = false"
            >
                Kembali
            </x-button>
            <x-button
                class="bg-secondary font-bold text-black"
                wire:click="submit()"
            >
                Ya, Sudah Selesai !
            </x-button>
        </div>
    </x-modal-dialog>
</div>

<div class="mx-auto my-4 max-w-4xl">
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
            <x-button wire:click="back" class="bg-primary font-bold text-white">Back</x-button>
        @endif

        @if ($isLastKriteria)
            
            <x-button class="bg-secondary text-black font-bold" @click="$dispatch('open')">Selesai</x-button>
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

    <x-modal-dialog x-data="{show : false}" x-on:close="show = false" x-on:open.window="show = true">
        <h2 class="text-2xl text-center font-poppins">Yakin Udah  Selesai 🤔 ??</h2>
        <p class="text-center text-sm text-gray-500 my-2 max-w-md mx-auto">
            Pastikan semua jawaban sudah terisi dengan benar
            Kamu dapat kembali untuk ganti jawaban kamu 
        </p>
        <div class="flex gap-4 justify-center mt-4">
            <x-button class="bg-primary text-white font-bold" @click="show = false">
                Kembali
            </x-button>
            <x-button class="bg-secondary text-black font-bold" wire:click="submit()">
                Ya, Sudah Selesai !
            </x-button>
        </div>

    </x-modal-dialog>
</div>

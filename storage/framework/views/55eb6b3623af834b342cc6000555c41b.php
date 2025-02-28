<div class="my-4">
    <p class="border border-primary px-4 py-2 rounded-lg shadow-xl text-primary  my-2">Sistem Informasi</p>
    <div x-data="{ selected: null }" class="flex justify-around gap-4">
        <label class="flex items-center flex-col cursor-pointer">
            <input type="radio" class="" name="radio" x-ref="radio1"
                @change=" selected = $refs.radio1.checked ? 1 : null" />
            <p :class="{ 'bg-primary text-white! ': selected === 1 }"
                class="w-12 h-12 grid place-content-center transition duration-300 border border-primary text-primary rounded-full">
                1</p>
            <small>tidak tertarik</small>
        </label>
        <label class="flex items-center flex-col cursor-pointer">
            <input type="radio" class="" name="radio" x-ref="radio2"
                @change=" selected = $refs.radio2.checked ? 2 : null" />
            <p :class="{ 'bg-primary text-white! ': selected === 2 }"
                class="w-12 h-12 grid place-content-center transition duration-300 border border-primary text-primary rounded-full">
                1</p>
            <small>tidak tertarik</small>
        </label>

    </div>
</div><?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/livewire/answer-choise.blade.php ENDPATH**/ ?>
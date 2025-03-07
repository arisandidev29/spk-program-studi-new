<div class="my-2">
    <div
        class="border-primary text-primary mt-2 rounded-lg border px-4 py-2 shadow-xl"
    >
        <p>{{ $programStudi }}</p>
        @if ($description)
            <p class="mt-2 text-sm text-black">{{ $description }}</p>
        @endif
    </div>

    <div
        x-data="{ selected: null }"
        class="mx-auto mt-2 flex justify-around gap-4 md:w-[70%]"
    >
        <x-radio-option value="1" label="1" description="sangat tertarik" />
        <x-radio-option value="2" label="2" description="tertarik" />
        <x-radio-option value="3" label="3" description="lumayan" />
        <x-radio-option value="4" label="4" description="tidak tertarik" />
    </div>

    @error("selected")
        <p class="font-roboto mt-2 text-red-500">{{ $message }}</p>
    @enderror
</div>

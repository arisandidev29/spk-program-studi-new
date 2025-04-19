<div class="my-4">
    <div
        class="border-primary text-primary mt-2 rounded-lg border px-4 py-2 shadow-xl"
    >
        <p class="text-sm md:text-base">{{ $programStudi->name }}</p>
        @if ($description)
            <p class="mt-2 text-sm text-black">{{ $description }}</p>
        @endif
    </div>

    <div
        x-data="{ selected: null }"
        class="mx-auto mt-2 flex justify-around gap-4 md:w-[70%]"
    >
        @foreach ($pilihans as $index => $value)
            <x-radio-option
                :key="$value->id"
                :id="$value->id"
                value="{{$value->id}}"
                :name="$value->id"
                label="{{$index + 1 }}"
                description="{{$value->name}}"
                :selected="$selected"
            />
        @endforeach
    </div>

    @error("selected")
        <p class="font-roboto mt-2 text-red-500">{{ $message }}</p>
    @enderror
</div>

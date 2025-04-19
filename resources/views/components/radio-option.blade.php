@props([
    "name" => "radio",
    "value" => "value",
    "label",
    "description",
    "id",
    "selected",
])
<label class="flex flex-1 cursor-pointer flex-col items-center">
    <input
        type="radio"
        class="hidden"
        name="{{ $name }}"
        x-ref="radio{{ $value }}"
        @change="
        selected = $refs.radio{{ $value }}.checked ? {{ $value }} : null;
        "
        wire:click="setSelectedValue({{ $id }})"
        value="{{ $value }}"
    />
    <p
        :class="{ 'bg-dark-primary text-white! hover:bg-dark-primary! ' : {{ $selected == $value }} }"
        class="border-primary text-primary hover:bg-primary grid h-8 w-8 place-content-center rounded-full border text-center text-sm transition duration-300 hover:text-white md:h-12 md:w-12 md:text-base"
    >
        {{ $label }}
    </p>
    <small class="text-center text-xs dark:text-gray-300">
        {{ $description }}
    </small>
</label>

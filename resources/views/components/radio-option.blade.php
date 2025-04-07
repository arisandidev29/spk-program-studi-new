@props([
    "name" => "radio",
    "value" => "value",
    "label",
    "description",
    'id',
    'selected' 
])
<label  class="flex cursor-pointer flex-col flex-1 items-center">
    <input
        type="radio"
        class="hidden"
        name="{{ $name }}"
        x-ref="radio{{ $value }}"
        @change="
        selected = $refs.radio{{ $value }}.checked ? {{ $value }} : null;
        "
        wire:click="setSelectedValue({{ $id}})"
        value="{{ $value }}"
        />
    <p
        :class="{ 'bg-dark-primary text-white! hover:bg-dark-primary! ' : {{ $selected == $value }} }"
        class="border-primary text-primary text-center hover:bg-primary grid h-8 w-8 place-content-center rounded-full border text-sm transition duration-300 hover:text-white md:h-12 md:w-12 md:text-base"
    >
        {{ $label }}
    </p>
    <small class="text-xs  text-center">{{ $description }}</small>
</label>

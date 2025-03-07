@props([
    "name" => "radio",
    "value" => "value",
    "label",
    "description",
])
<label class="flex cursor-pointer flex-col items-center">
    <input
        type="radio"
        class="hidden"
        name="{{ $name }}"
        x-ref="radio{{ $value }}"
        @change=" selected = $refs.radio{{ $value }}.checked ? {{ $value }} : null"
        wire:click="setSelectedValue({{ $value }})"
        {{ $attributes }}
    />
    <p
        :class="{ 'bg-dark-primary text-white! hover:bg-dark-primary! ': selected === {{ $value }} }"
        class="border-primary text-primary hover:bg-primary grid h-12 w-12 place-content-center rounded-full border transition duration-300 hover:text-white"
    >
        {{ $label }}
    </p>
    <small>{{ $description }}</small>
</label>

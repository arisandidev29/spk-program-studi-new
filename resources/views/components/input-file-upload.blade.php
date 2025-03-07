@props([
    "id" => "id",
])
<label x-data="{ fileName: '' }" class="my-2 block">
    <input
        type="file"
        x-ref="input"
        id="{{ $id }}"
        {{ $attributes }}
        class="hidden"
        @change="fileName = $refs.input.files[0].name"
    />
    <div
        class="border-primary flex items-center gap-4 overflow-x-auto rounded-md border p-2"
    >
        <x-button type="button" class="bg-secondary min-w-max p-1! text-xs">
            Upload File
        </x-button>
        <span
            class="line-clamp-1 text-sm"
            x-text="fileName ? fileName : 'No File Chosen'"
        ></span>
    </div>

    {{ $slot }}
</label>

@props([
    'id' => 'id'
])
<label x-data="{fileName : ''} "  class="block my-2">
    <input type="file" x-ref='input' id="{{$id}}" {{$attributes}} class="hidden" @change="fileName = $refs.input.files[0].name">
    <div class="flex gap-4 items-center  border border-primary rounded-md p-2 overflow-x-auto ">
        <x-button type="button" class=" min-w-max bg-secondary text-xs p-1! "   >Upload File</x-button>
        <span class=" text-sm  line-clamp-1 " x-text="fileName ? fileName :   'No File Chosen' " ></span>
    </div>

    {{$slot}}

</label>
@props([
    'placeholder' => '',
    'type' => 'text',
    'value' => '',
])
<div x-data="{ value : @js($value) }" class="relative" ">

        <input id="{{ $placeholder }}" x-model="value" type="{{ $type }}" value="{{ $value }}"
            {{ $attributes->class(['peer border-1 border-primary px-6 py-2 w-full rounded-md  my-2 focus:border-dark-primary outline-none',
            'border-red-500!' => $errors->has($placeholder)]) }}
            {{ $attributes }} ">
        
        <label 
            for="{{ $placeholder }}" 
            :class="{ 'px-2! -top-1! left-2!  text-xs!' : value}"  class="absolute left-5 top-4.5 text-gray-400 transition-all bg-white peer-focus:px-2 peer-focus:-top-1 peer-focus:left-2 peer-focus:text-xs rounded-lg ">
            {{ $placeholder }}
        </label>

        @error($placeholder)
            <p class="text-red-500 text-sm ">{{$message}}</p>
        @enderror
            

</div>



@props([
    'placeholder' => '',
    'type' => 'text',
])
    <input type="{{$type}}" placeholder="{{$placeholder}}"
    {{ $attributes->class(['border-1 border-primary px-6 py-2 w-full rounded-md  my-2 ']) }} {{$attributes}} ">
    


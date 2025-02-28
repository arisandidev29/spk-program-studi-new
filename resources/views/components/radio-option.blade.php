 @props([
    'name' => 'radio',
    'value' => 'value',
    'label',
    'description'
 ])
 <label class="flex items-center flex-col cursor-pointer">
     <input type="radio" class="hidden" name="{{$name}}" x-ref="radio{{$value}}"
         @change=" selected = $refs.radio{{$value}}.checked ? {{$value}} : null" wire:click="setSelectedValue({{$value}})" {{$attributes}}/>
     <p :class="{ 'bg-dark-primary text-white! hover:bg-dark-primary! ': selected === {{$value}} }"
         class="w-12 h-12 grid place-content-center transition duration-300 border border-primary text-primary rounded-full hover:bg-primary hover:text-white">{{$label}}</p>
     <small>{{$description}}</small>
 </label>

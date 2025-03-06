<div  x-cloak x-show="{{$attributes->get('show')}}" 
class=" fixed inset-0 bg-[rgba(0,0,0,.4)] grid justify-center items-start pt-[20vh]">

<div 
x-show="{{$attributes->get('show')}}"
x-transition
 class="relative opacity-100  w-xl min-h-40 bg-white rounded-2xl p-4 ">
    {{$slot}}
</div>
</div>
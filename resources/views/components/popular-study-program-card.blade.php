@props([
    'programStudy' => 'Sistem Informasi',
    'percentage' => '50',
])
<div class="flex gap-4 items-center my-3">
    <p
        class="text-primary  w-12 h-12 border border-primary rounded-full grid place-content-center  ">{{$percentage }}</p>
    <div>
        <span class="text-sm my-1 block">{{$programStudy}}</span>
        <p class="h-2  bg-primary " style="width: {{$percentage}}"></p>
    </div>
</div>
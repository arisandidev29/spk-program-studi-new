@props(
    [
        'kriteria' => 'Kriteria name',
        'question' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt iste, sapiente, labore facilis molestias alias blanditiis, error assumenda non aliquam expedita ullam consequatur. Ullam impedit sapiente quidem quia atque quibusdam.',
        'note' => 'tes',
        'number' => '1'
    ]
)
<div class="relative bg-white shadow-xl p-8 rounded-xl">
    <h1 class="font-poppins font-bold ">{{$kriteria}}</h1>
    <p class="font-roboto text-sm text-gray-600 ">{{$question}}</p>

    @if($note)
        <hr class="my-4  border-divider">
        <span class=" bg-primary text-white text-sm px-2 py-2 rounded-2xl">Note !</span>
        <p class="my-2 text-sm">{{$note}}</p>
    @endif

    <span class="absolute top-5 -left-12 flex justify-center items-center w-8 h-8   bg-primary text-white rounded-full" >{{$number}}</span>
</div>
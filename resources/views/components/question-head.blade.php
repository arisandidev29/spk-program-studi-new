@props([
    "kriteria" => "Kriteria name",
    "question" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt iste, sapiente, labore facilis molestias alias blanditiis, error assumenda non aliquam expedita ullam consequatur. Ullam impedit sapiente quidem quia atque quibusdam.",
    "note" => "tes",
    "number" => "1",
])
<div class="relative rounded-xl bg-white p-4 shadow-xl md:p-8">
    <h1 class="font-poppins font-bold">{{ $kriteria }}</h1>
    <p class="font-roboto text-xs leading-6 text-gray-600 md:text-sm">
        {{ $question }}
    </p>

    @if ($note)
        <hr class="border-divider my-4" />
        <span class="bg-primary rounded-2xl px-2 py-2 text-sm text-white">
            Note !
        </span>
        <p class="my-2 text-xs md:text-sm">{{ $note }}</p>
    @endif

    <span
        class="bg-primary absolute -top-3 -left-4 flex h-8 w-8 items-center justify-center rounded-full text-white md:top-5 md:-left-12"
    >
        {{ $number }}
    </span>
</div>

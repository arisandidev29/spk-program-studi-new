@props([
    "programStudy" => "Sistem Informasi",
    "percentage" => "50",
])
<div class="my-3 flex w-full items-center gap-4">
    <p
        class="text-primary border-primary grid h-12 w-12 place-content-center rounded-full border"
    >
        {{ $percentage }}
    </p>
    <div class="flex-grow">
        <span class="my-1 block text-sm dark:text-gray-200">
            {{ $programStudy }}
        </span>
        <p class="bg-primary h-2" style="width: {{ $percentage }}"></p>
    </div>
</div>

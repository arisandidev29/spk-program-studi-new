@props([
    "title",
    "breadcrumbs",
])
<header
    class="shadow- flex justify-between rounded-2xl bg-white px-4 py-4 shadow-xl dark:bg-gray-700"
>
    <div>
        <h1 class="font-poppins text-primary text-2xl">{{ $title }}</h1>
        {{ Breadcrumbs::render($breadcrumbs) }}
    </div>

    <div class="flex items-center gap-2">
        <x-toggle-dark-mode />
        <livewire:user-navbar />
    </div>
</header>

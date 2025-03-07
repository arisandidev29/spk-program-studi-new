@props([
    "title" => "dashboard",
    "breadcrumbs" => "dashboard",
])
<x-layout
    :header="false"
    :footer="false"
    class="grid max-w-full! grid-cols-[345px_1fr] p-0!"
>
    <x-sidebar />
    <div class="p-3">
        <x-admin-header :title="$title" :breadcrumbs="$breadcrumbs" />

        <div class="py-4">
            {{ $slot }}
        </div>
    </div>
</x-layout>

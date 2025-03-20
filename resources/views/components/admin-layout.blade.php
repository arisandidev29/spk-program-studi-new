@props([
    "title" => "dashboard",
    "breadcrumbs" => "dashboard",
])
<x-layout
    x-data="{ sidebar: false, isMobile: window.innerWidth < 768 }"
    x-init="window.addEventListener('resize', () => { isMobile = window.innerWidth < 768 })"
    :header="false"
    :footer="false"
    class="grid max-w-full! grid-cols-1 bg-gray-100 p-0! md:grid-cols-[345px_1fr]"
>
    <x-sidebar />
    <div class="p-3">
        <x-admin-header :title="$title" :breadcrumbs="$breadcrumbs" />

        <div class="py-4">
            {{ $slot }}
        </div>
    </div>
</x-layout>

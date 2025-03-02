@props([
    'title' => 'dashboard'
])
<x-layout :header="false" :footer="false" class=" grid grid-cols-[345px_1fr] max-w-full! p-0!" >
    <x-sidebar />
    <div class="p-2">
        <x-admin-header :title="$title"  />

        <div class="p-4">
            {{ $slot }}
        </div>
    </div>
</x-layout>
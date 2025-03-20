<x-admin-layout title="Users" breadcrumbs="users">
    <div class="flex flex-col-reverse gap-4 xl:flex-row">
        <livewire:users-table />

        <x-card
            class="order-2 flex w-full flex-col items-center gap-4 self-start xl:order-1 xl:w-64"
        >
            <p>User Register Token</p>
            <h2 class="text-dark-secondary font-poppins text-4xl font-bold">
                fjdkfjd
            </h2>
            <x-button class="bg-primary flex items-center gap-2 text-white">
                Refresh
                <img src="/asset/reload.png" alt="reload" class="w-6" />
            </x-button>
        </x-card>
    </div>
</x-admin-layout>

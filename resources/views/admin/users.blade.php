<x-admin-layout title="Users" breadcrumbs="users">
    <div class="flex flex-col xl:flex-row gap-4">

       <livewire:users-table />

        <x-card class="self-start order-2 xl:order-1 w-full xl:w-64 flex flex-col items-center gap-4">
            <p>User Register Token</p>
            <h2 class="text-dark-secondary text-4xl font-poppins font-bold ">fjdkfjd</h2>
            <x-button class="bg-primary text-white flex gap-2 items-center">
                Refresh
                <img src="/asset/reload.png" alt="reload" class="w-6 ">
            </x-button>
        </x-card>

        
       
    </div>
</x-admin-layout>

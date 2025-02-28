
<div class="max-w-4xl mx-auto my-4">

    <x-question-head  /> 
    <div class="flex flex-col gap-2">
        <livewire:program-studi-answer programStudi="Sistem informasi"  />
        <livewire:program-studi-answer programStudi="Komputarisasi Akuntansi"  />
        <livewire:program-studi-answer programStudi="Manajemen informatika"  />
    </div>
 
    <x-button class="mt-4 bg-secondary text-black " wire:click='submit()'>Submit</x-button>
    
    
 </div>
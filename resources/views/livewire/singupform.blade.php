<?php
use function Livewire\Volt\{state};
use function Livewire\Volt\{rules};


state([
    'Name' => '',
    'Username' => '',
    'Email' => '',
    'Password' => '',
    'Password_Confirmasi' => '',
    'Token' => ''
]);

rules([
    'Name' => "required",
    'Username' => 'required',
    'Email' => 'required',
    'Password' => 'required',
    'Password_Confirmasi' => 'required',
    'Token' => 'required'
]);

$register = function() {
    $this->validate();
}
?>

<form wire:submit='register'  class="order-1 relative max-w-sm mx-auto border-1 border-gray-600 border-solid py-10 md:py-14 px-8 md:px-10 my-6 rounded-sm">
    <x-input placeholder="name" type="text" value="testing" wire:model='Name'/>
    <x-input placeholder="Username" type="text" wire:model='Username' />
    <x-input placeholder="Email" type="Email" wire:model='Email' />
    <x-input placeholder="Password" type="password" wire:model='Password'/>
    <x-input placeholder="Password_Confirmasi" type="password" wire:model='Password_Confirmasi'  />
    <x-input placeholder="Token" type="text" wire:model='Token' />
    <a href="" class="block text-xs text-primary italic underline -mt-2 hover:text-dark-primary">Cara mendapatkan Token </a>

   <x-input-file-upload >
    <div class="flex flex-col text-sm italic text-gray-500 font-roboto my-1">
        <span>format file : jpeg,jpg,png</span>
        <span>Max file : 2Mb</span>
    </div>
   </x-input-file-upload>



    <x-button class="bg-primary text-white w-full" >Sing Up</x-button>
     <small class="text-center block italic font-xs text-primary">Sudah punya akun ? <a href="{{ route('login') }}"
            class="underline">Login disini</a></small>
    



</form>

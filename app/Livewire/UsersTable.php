<?php

namespace App\Livewire;

use App\Models\User;
use App\Service\UserServiceInterface;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    public $search;

    public function delete(UserServiceInterface $userService, $id) {
        $userService->deleteUser($id);
        $this->dispatch('modaldelete-close');
        $this->dispatch('alert-success', message : "success Delete User !!");
    }
    public function render(UserServiceInterface $userService)
    {
        if($this->search) {
            $users = $userService->getUserByConditionUsePagination('name',"%{$this->search}%",'like', 5);
        }else {
            $users = $userService->getUsersByPegination(5);
        }

        return view('livewire.users-table', [
            'users' => $users 
        ]);
    }
}

<?php

namespace App\Livewire;

use App\Models\User;
use App\Service\HasilRekomendasiServiceInterface;
use App\Service\UserServiceInterface;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    public $search;
    public $selectionMode = false;

    public $sortBy = 'name';
    public $sortDirection = 'asc';
    
    public $totalUsers;


    public $UserSelection = [];

    public function mount() {
        $this->totalUsers = User::where('role', 'users')->count();
    }

    public function delete(UserServiceInterface $userService, $id)
    {
        $userService->deleteUser($id);
        $this->dispatch('modaldelete-close');
        $this->dispatch('alert-danger', message: "success Delete User !!");
    }

    public function deleteSelected(UserServiceInterface $userService)
    {
        foreach ($this->UserSelection as $user) {
            $userService->deleteUser($user);
        }
        $this->dispatch('modaldeleteselection-close');

        $this->dispatch('alert-danger', message: "success Delete User !!");

        $this->UserSelection = [];
    }



    public function selectUser($user_id)
    {
        $this->UserSelection[] = $user_id;
    }

    public function createPdf()
    {
        $this->dispatch('showmodalpdf');
        $this->dispatch('exportPdf');
    }



    public function unselectUser($user)
    {
        $key = array_search($user, $this->UserSelection);
        unset($this->UserSelection[$key]);
    }

    public function toggleSelectionMode()
    {
        $this->selectionMode = !$this->selectionMode;
    }


    public function sort($column, $direction = 'asc')
    {
        $this->sortBy = $column;
        $this->sortDirection = $direction;
    }


    public function render(UserServiceInterface $userService)
    {
        if ($this->search) {
            $users = $userService->getUserByConditionUsePagination('name', "%{$this->search}%", 'like', 5);
        } else {
            $users = $userService->getUsersByPegination(20, $this->sortBy, $this->sortDirection);
        }

        return view('livewire.users-table', [
            'users' => $users
        ]);
    }
}

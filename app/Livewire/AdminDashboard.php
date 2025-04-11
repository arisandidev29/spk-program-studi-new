<?php

namespace App\Livewire;

use App\Models\Alternative;
use App\Models\HasilRekomendasi;
use App\Models\Kriteria;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminDashboard extends Component
{
    public $users;
    public $alternativesCount;
    public $kriteriasCount;
    public $presentaseProgramStudi;
    public $distribution;
    public $userRegistrationData;

    public function mount()
    {
        $this->users = User::where('role', 'users')->get();
        $this->alternativesCount = Alternative::count();
        $this->kriteriasCount = Kriteria::count();

        $this->calculateUserDestribution();

        $this->userRegistrationData = User::select(DB::raw('MONTH(created_at) as bulan, COUNT(*) as jumlah'))
            ->groupBy('bulan')
            ->get()->toArray();
    }

    public function calculateUserDestribution()
    {
        $Userdistribution = HasilRekomendasi::where('ranking', 1)
            ->select('alternative_id', DB::raw('count(*) as total'))
            ->groupBy('alternative_id')
            ->with('alternative') // jika ingin nama program studi
            ->get();

        $this->distribution = $Userdistribution->map(function ($item) {
            return [
                'programStudi' => $item->alternative->name,
                'total' => $item->total,
            ];
        })->toArray();


        $presentase = $Userdistribution->map(function ($item) {
            $value = ($item->total / $this->users->count()) * 100;
            return [
                'programStudi' => $item->alternative->name,
                'presentase' => $value,
            ];
        });

        $this->presentaseProgramStudi = $presentase;
    }
    public function render()
    {
        return view('livewire.admin-dashboard');
    }
}

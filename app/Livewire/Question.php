<?php

namespace App\Livewire;

use App\Models\Alternative;
use App\Models\Kriteria;
use App\Models\UserJawaban;
use App\Service\KriteriaSeriveInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use function Livewire\Volt\protect;

class Question extends Component
{
    #[Layout("components.layout")]


    public $kriteria;
    public $number;
    public $alternatives;
    public $pilihanJawabans = [];

    public $isFirstKriteria = true;
    public $isLastKriteria = false;

    public $id;

    public function mount()
    {

        $this->kriteria = Kriteria::findOrFail($this->id);

        if ($this->kriteria->id !== Kriteria::first()->id) {
            $this->isFirstKriteria = false;
        }



        foreach (Kriteria::all() as $index => $kriteria) {
            if ($kriteria->id == $this->kriteria->id) {
                $this->number = $index + 1;
                $this->isLastKriteria = ($index + 1) == Kriteria::all()->count();
            }
        }

        // // get all Alternatives
        $this->alternatives = Alternative::all();
    }

    public function back()
    {
        $previousKriteria = Kriteria::where('id', '<', $this->kriteria->id)->orderBy('id', 'desc')->first();
        return $this->redirect(route('question', $previousKriteria->id), true);
    }


    public function submit()
    {
        $this->dispatch('send');
    }

    #[On('validation-passed')]
    public function handleValidationPassed($programStudi, $pilihanJawaban)
    {
        $this->pilihanJawabans["$programStudi[id]"] =  $pilihanJawaban;
        $totalProgramStudi = $this->alternatives->count();


        if (count($this->pilihanJawabans) == $totalProgramStudi) {
            // get all kriteria
            $allKriteria = Kriteria::all();
            $currentIndex = null;
            foreach (Kriteria::all() as $index => $kriteria) {
                if ($kriteria->id == $this->kriteria->id) {
                    $currentIndex = $index;
                    break;
                }
            }

            if ($currentIndex !== null && isset($allKriteria[$currentIndex + 1])) {
                $nextKriteria = $allKriteria[$currentIndex + 1];
                $this->saveAnswer();
                return $this->redirect(route('question', $nextKriteria->id), true);
            } else {
                // return redirect()->route('dashboard');
                $this->saveAnswer();
                dd('kriteria sudah habis');
            }
        }
    }


    public function saveAnswer()
    {

        $user = Auth::user();
        $kriteriaId = $this->kriteria->id;

        // Cek apakah user sudah mengisi kriteria ini
        if ($user->UserJawaban()->where('kriteria_id', $kriteriaId)->exists()) {
            // Jika sudah ada, update entri yang ada
            foreach ($this->pilihanJawabans as $alternativeId => $pilihanJawabanId) {
                $existingAnswer = $user->UserJawaban()
                    ->where('kriteria_id', $kriteriaId)
                    ->where('alternative_id', $alternativeId)
                    ->first();

                if ($existingAnswer) {
                    // Update entri yang sudah ada
                    $existingAnswer->update([
                        'pilihan_jawaban_id' => $pilihanJawabanId
                    ]);
                } else {
                    // Jika entri tidak ada untuk alternative_id ini, buat baru
                    $user->UserJawaban()->create([
                        'kriteria_id' => $kriteriaId,
                        'alternative_id' => $alternativeId,
                        'pilihan_jawaban_id' => $pilihanJawabanId
                    ]);
                }
            }
        } else {
            // Jika belum ada sama sekali, buat entri baru
            foreach ($this->pilihanJawabans as $alternativeId => $pilihanJawabanId) {
                $user->UserJawaban()->create([
                    'kriteria_id' => $kriteriaId,
                    'alternative_id' => $alternativeId,
                    'pilihan_jawaban_id' => $pilihanJawabanId
                ]);
            }
        }
    }



    public function render()

    {
        return view('livewire.question');
    }
}

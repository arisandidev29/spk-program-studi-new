<?php

namespace App\Livewire;

use App\Models\HasilRekomendasi;
use App\Models\User;
use App\Service\HasilRekomendasiServiceInterface;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Sleep;
use Livewire\Component;
use Livewire\Attributes\On;

class PdfExportPopup extends Component
{
    public $pdfUrl;
    public $isPdfUrlGenerated = false;




    #[On('exportPdfAllUser')]
    public function exportPdfAllUser(HasilRekomendasiServiceInterface $hasilRekomendasiService)
    {
        $user = User::select('*', DB::raw('YEAR(created_at) as year'))
            ->where('role', 'users')
            ->get()
            ->groupBy('year')->sortKeys();




        $pdf = Pdf::loadView('pdf.user', [
            'usersData' => $user,
            'rekomendasiService' => $hasilRekomendasiService
        ])->save('users.pdf', 'public');

        $pdfUrl = asset('storage/users.pdf');

        $this->pdfUrl = $pdfUrl;
        $this->isPdfUrlGenerated = true;
    }

    #[On('exportPdfOnlyThisYear')]
    public function exportPdfOnlyThisYear(HasilRekomendasiServiceInterface $rekomendasiService)
    {
        $users = User::where('role', 'users')
            ->where('created_at', '>=', now()->year())
            ->get();


        $pdf = Pdf::loadView('pdf.UserOnlyThisYear', [
            'users' => $users,
            'rekomendasiService' => $rekomendasiService
        ])->save('pdfExport.pdf', 'public');

        $pdfUrl = asset('storage/pdfExport.pdf');


        $this->pdfUrl = $pdfUrl;

        $this->isPdfUrlGenerated = true;
    }


    #[On('exportPdfUserOnlyHasChoise')]
    public function exportPdfUserOnlyHasChoise(HasilRekomendasiServiceInterface $rekomendasiService)
    {
        $users = User::join('hasil_rekomendasis', 'users.id', '=', 'hasil_rekomendasis.user_id')
            ->where('role', 'users')
            ->select('users.*')
            ->distinct()
            ->get();

        $pdf = Pdf::loadView('pdf.UserOnlyThisYear', [
            'users' => $users,
            'rekomendasiService' => $rekomendasiService
        ])->save('pdfExport.pdf', 'public');

        $pdfUrl = asset('storage/pdfExport.pdf');


        $this->pdfUrl = $pdfUrl;

        $this->isPdfUrlGenerated = true;
    }

    #[On('exportPdfUserResult')]
    public function exportPdfUserResult(HasilRekomendasiServiceInterface $hasilRekomendasiService, $user)
    {
        $user = User::find($user['id']);

        $hasilRekomendasi = $hasilRekomendasiService->getHasilRekomendasi($user->id);
        $pdf = Pdf::loadView('pdf.UserRekomendation', [
            'hasilRekomendasi' => $hasilRekomendasi,
            'userJawaban' => $user->UserJawaban,
            'user' => $user
        ])->save('pdfExport.pdf', 'public');

        $pdfUrl = asset('storage/pdfExport.pdf');


        $this->pdfUrl = $pdfUrl;

        $this->isPdfUrlGenerated = true;
    }


    public function render()
    {
        return view('livewire.pdf-export-popup');
    }
}

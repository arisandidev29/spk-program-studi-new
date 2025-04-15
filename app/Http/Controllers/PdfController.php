<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\HasilRekomendasiServiceInterface;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function view(HasilRekomendasiServiceInterface $hasilRekomendasiService) {
       $users = User::where('role','users')->get();
    //    dd($hasilRekomendasiService->getHasilRekomendasi());

    //    return  Pdf::loadView('pdf.user', [
    //     'users' => $users
    //    ])->download('test.pdf');

    return view('pdf.user',[
        'users' => $users,
        'rekomendasiService' => $hasilRekomendasiService
    ]);
    }
}

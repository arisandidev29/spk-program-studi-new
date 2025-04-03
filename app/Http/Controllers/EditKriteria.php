<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditKriteria extends Controller
{
    public function view($id) {
        return view('admin.kriteria_edit', [
            "id" => $id
        ]);
    }
}

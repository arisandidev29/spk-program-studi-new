<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditAlternative extends Controller
{
    public function view($id) {
        return view('admin.alternative_edit',['id' => $id]);
    }
}

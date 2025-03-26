<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditBobot extends Controller
{
    public function view($id) {
        return view('admin.bobot_edit',['id' => $id]);
    }
}

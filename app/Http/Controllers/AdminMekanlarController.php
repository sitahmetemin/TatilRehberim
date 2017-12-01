<?php

namespace App\Http\Controllers;

use App\Mekanlar;
use Illuminate\Http\Request;

class AdminMekanlarController extends Controller
{
    public function listView() {
        return view('backend.mekanlar', [
            'oteller' => Mekanlar::all()
        ]);
    }
}

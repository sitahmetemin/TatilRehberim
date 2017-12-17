<?php

namespace App\Http\Controllers;

use App\Oteller;
use App\Iller;
use Illuminate\Http\Request;

class ThemeHomeController extends Controller
{
    public function view() {
        return view('theme.home', [
            'oteller' => Oteller::where('yildiz', 5)->take(4)->get()
        ]);
    }

}

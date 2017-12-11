<?php

namespace App\Http\Controllers;

use App\Mekanlar;
use App\Oteller;
use App\Yemekler;
use Illuminate\Http\Request;

class ThemeMekanController extends Controller
{
    public function view(Request $request) {

        return view('theme.tatil-mekan', [
            'oteller' => Oteller::where('il_id', $request->il_id)->get(),
            'mekanlar' => Mekanlar::where('il_id', $request->il_id)->get(),
            'yemekler' => Yemekler::where('il_id', $request->il_id)->get()
        ]);
    }
}

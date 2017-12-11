<?php

namespace App\Http\Controllers;

use App\Oteller;
use Illuminate\Http\Request;

class ThemeOtellerController extends Controller
{
    public function view(Request $request)
    {
        return view('theme.oteller', [
            'oteller' => Oteller::where('il_id', $request->il_id)->where('fiyat', '<', $request->fiyat)->where('yildiz', '<', $request->yildiz)->get()
        ]);
    }
}

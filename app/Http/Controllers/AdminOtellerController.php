<?php

namespace App\Http\Controllers;

use App\Oteller;
use App\Iller;
use Illuminate\Http\Request;

class AdminOtellerController extends Controller
{
    public function listView()
    {
        return view('backend.oteller', [
            'oteller' => Oteller::all()
        ]);
    }

    public function createView()
    {
        return view('backend.ekle.ekle-otel', [
            'iller' => Iller::all()
        ]);
    }

    public function create(Request $request)
    {
        $ekle = Oteller::create($request->all());

        if ($ekle) {
            $statu = 'Başarılı';
            return redirect('/admin/oteller')->with('basari', $statu);
        }

        $statu = 'İşlem Başarısız!!';
        return redirect('/admin/oteller')->with('hata', $statu);
    }

}

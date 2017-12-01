<?php

namespace App\Http\Controllers;

use App\Yemekler;
use App\Iller;
use Illuminate\Http\Request;

class AdminYemeklerController extends Controller
{
    public function listView() {
        return view('backend.yemekler', [
            'yemekler' => Yemekler::all()
        ]);
    }

    public function createView() {
        return view('backend.ekle.ekle-yemek', [
            'iller' => Iller::all()
        ]);
    }

    public function create(Request $request) {
        $ekle = Yemekler::create($request->all());

        if ($ekle) {
            $statu = 'Başarılı';
            return redirect('/admin/yemekler')->with('basari', $statu);
        }

        $statu = 'İşlem Başarısız!!';
        return redirect('/admin/yemekler')->with('hata', $statu);
    }

    public function updateView($id) {
        return view('backend.guncelle.guncelle-yemek', [
            'iller' => Iller::all(),
            'yemek' => Yemekler::find($id)
        ]);
    }

    public  function update(Request $request, $id) {
        $update = Yemekler::find($id)->update($request->except('_token'));

        if ($update) {
            $basari = 'Başarılı';
            return redirect('admin/yemekler')->with('basari', $basari);
        }

        $hata = 'İşlem Başarısız!!';
        return redirect('admin/yemekler')->with('basari', $hata);
    }
}

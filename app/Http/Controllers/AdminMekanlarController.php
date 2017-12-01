<?php

namespace App\Http\Controllers;

use App\Mekanlar;
use App\Iller;
use Illuminate\Http\Request;

class AdminMekanlarController extends Controller
{
    public function listView() {
        return view('backend.mekanlar', [
            'mekanlar' => Mekanlar::all()
        ]);
    }

    public function createView() {
        return view('backend.ekle.ekle-mekan', [
            'iller' => Iller::all()
        ]);
    }

    public function create (Request $request) {
        $create = Mekanlar::create($request->all());

        if ($create) {
            $basari = 'Başarılı';
            return redirect('admin/mekanlar')->with('basari', $basari);
        }

        $hata = 'İşlem Başarısız!!';
        return redirect('admin/mekanlar')->with('basari', $hata);
    }

    public function updateView($id) {
        return view('backend.guncelle.guncelle-mekan', [
            'iller' => Iller::all(),
            'mekan' => Mekanlar::find($id)
        ]);
    }

    public function update(Request $request, $id) {
        $update = Mekanlar::find($id)->update($request->except('_token'));

        if ($update) {
            $basari = 'Başarılı';
            return redirect('admin/mekanlar')->with('basari', $basari);
        }

        $hata = 'İşlem Başarısız!!';
        return redirect('admin/mekanlar')->with('basari', $hata);
    }

    public function delete($id) {
        $delete = Mekanlar::find($id)->delete();

        if ($delete) {
            $statu = 'Başarılı';
            return redirect('/admin/mekanlar')->with('basari', $statu);
        }

        $statu = 'İşlem Başarısız!!';
        return redirect('/admin/mekanlar')->with('hata', $statu);
    }
}

<?php

namespace App\Http\Controllers;

use App\Oteller;
use App\Iller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $tarih = str_slug(Carbon::now());
        $slug = str_slug($request->ad) . '-' . $tarih;

        $resim = $request->file('resimIcerik');
        $resimUzanti = $resim->getClientOriginalExtension();

        if (!empty($resim)) {

            //Resim Yükleme İşlemi
            Storage::disk('uploads')->put('images/oteller/'.$slug.'.'.$resimUzanti, file_get_contents($resim));
            $request->merge(['resim_yol'=>'/uploads/images/oteller/'.$slug.'.'.$resimUzanti]);
        }

        $ekle = Oteller::create($request->all());

        if ($ekle) {
            $statu = 'Başarılı';
            return redirect('/admin/oteller')->with('basari', $statu);
        }

        $statu = 'İşlem Başarısız!!';
        return redirect('/admin/oteller')->with('hata', $statu);
    }

    public function updateView($id)
    {
        return view('backend.guncelle.guncelle-otel', [
            'otel' => Oteller::find($id),
            'iller' => Iller::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $ekle = Oteller::find($id)->update($request->except('_token'));

        if ($ekle) {
            $statu = 'Başarılı';
            return redirect('/admin/oteller')->with('basari', $statu);
        }

        $statu = 'İşlem Başarısız!!';
        return redirect('/admin/oteller')->with('hata', $statu);
    }

    public function delete($id)
    {
        $delete = Oteller::find($id)->delete();

        if ($delete) {
            $statu = 'Başarılı';
            return redirect('/admin/oteller')->with('basari', $statu);
        }

        $statu = 'İşlem Başarısız!!';
        return redirect('/admin/oteller')->with('hata', $statu);
    }

}

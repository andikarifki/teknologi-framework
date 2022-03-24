<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;

use App\Models\Penerbit;

class BukuController extends Controller
{
    public function index()
    {
        $brs = Buku::all();
        return view("/buku/index", ['brs' => $brs]);

    }

    public function create()
    {   
        $brs = Penerbit::all();
        return view("/buku/create", ['brs' => $brs]);
        
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'tahun_terbit' => 'required',
            'id_penerbit' => 'required',
            'pengarang' => 'required',
            'jumlah_hal' => 'required',
            'sampul' => 'required',
            ]);
            $abrs = Buku::create($request->all());
            return redirect()->route('buku.index');
        }

    public function cari(Request $request)
    {
        $cari = $request->search;
        $brs = Buku::select('buku.*')->Where('penerbit.alamat','LIKE','%'.$cari.'%')
        ->join('penerbit', 'buku.id_penerbit', '=', 'penerbit.id');
        dd($brs);
        return view('/buku/index', ['brs' => $brs]);
    }

}

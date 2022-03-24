<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brs = Penerbit::all();
        echo "
        <a href='/penerbit/create' class='btn btn-default'>Tambah Penerbit</a></br></br>
        <table border='1'><tr><th>Id</th>
            <th>Penerbit</th>
            <th>Alamat</th>
            <th>Telpon</th>
            <th>Email</th>
            </tr>";
        foreach ($brs as $abrs)
        {
            echo "<tr><td>".$abrs->id."</td><td>"
                 .$abrs->penerbit."</td><td>"
                 .$abrs->alamat."</td><td>"
                 .$abrs->telepon."</td><td>"
                 .$abrs->e_mail."</td></tr>";
        }
        echo "</table>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/penerbit/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'penerbit' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'e_mail' => 'required',
            ]);
            $abrs = Penerbit::create($request->all());
            return redirect()->route('penerbit.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function show(Penerbit $penerbit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penerbit $penerbit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penerbit $penerbit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerbit $penerbit)
    {
        //
    }
}

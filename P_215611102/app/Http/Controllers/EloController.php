<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\models\Kota;


class EloController extends Controller
{
    public function bacaAll()
    {
        $brs = Kota::all();
        echo "<table border='1'><tr><th>Id</th>
            <th>Nama Kota</th></tr>";
        foreach ($brs as $abrs)
        {
            echo "<tr><td>$abrs->id</td><td>
                 $abrs->nama_kota</td></tr>";
        }
        echo "</table>";
    }   

    public function bacaAllRelasi()
    {
        $brs = \App\Models\models\Kota::all();
        echo "<table border='1'><tr><th>Id</th><th>Nama
        Kota</th><th>Propinsi</th></tr>";
        foreach ($brs as $abrs) {
            echo "<tr><td>".$abrs->id."</td>";
            echo "<td>".$abrs->nama_kota."</td>";
            echo "<td>".$abrs->getPropinsi->propinsi."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}


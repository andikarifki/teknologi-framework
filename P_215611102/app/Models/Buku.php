<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = ['judul','tahun_terbit','id_penerbit','pengarang','jumlah_hal','sampul'];

    public function getPenerbit()
    {
    return $this->belongsTo('App\Models\Penerbit','id_penerbit');
    }
}

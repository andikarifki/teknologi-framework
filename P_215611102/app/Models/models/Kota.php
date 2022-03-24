<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kota';
    protected $primaryKey = 'id';
    protected $fillable = ['id','id_propinsi','nama_kota'];

    public function getPropinsi()
    {
    return $this->belongsTo('App\Models\models\Propinsi','propinsi_id');
    }
    
}

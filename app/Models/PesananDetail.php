<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    protected $table="pesanan_detail";

    public function shopping(){
        return $this->belongsTo('App\Models\Shopping', 'id', 'id');
    }

    public function pesanan(){
        return $this->belongsTo('App\Models\Pesanan', 'id', 'id');
    }
}

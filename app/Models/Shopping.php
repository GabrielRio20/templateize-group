<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    protected $table="shopping";

    public function pesanan_detail(){
        return $this->hasMany(PesananDetail::class, 'barang_id', 'id');
    }
}

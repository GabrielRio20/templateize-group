<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Console\Concerns\InteractsWithIO;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shopping extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $table="shopping";
    protected $fillable = ['document'];

    public function pesanan_detail(){
        return $this->hasMany(PesananDetail::class, 'barang_id', 'id');
    }
}

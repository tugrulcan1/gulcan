<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bolme extends Model
{
    use HasFactory;

    public function sutun(){
        return $this->hasOne(Sutun::class);
    }
    public function uruns()
    {
        return $this->hasMany(Urun::class, "bolme_id", "id");
    }
    protected $table = 'bolmes'; // Modeli 'blogs' tablosuyla ilişkilendir

    protected $fillable = ['name', 'stock', 'capacity', 'empty_space','product_number', 'sutun_id',];
}

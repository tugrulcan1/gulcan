<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    use HasFactory;
    public function raf()
    {
        return $this->hasOne(Raf::class, "id", "raf_id");
    }
    public function sutun()
    {
        return $this->hasOne(Sutun::class, "id", "sutun_id");
    }
    public function bolum()
    {
        return $this->hasOne(Bolme::class, "id", "bolme_id");
    }
    protected $table = 'uruns'; // Modeli 'blogs' tablosuyla ilişkilendir

    protected $fillable = ['name', 'stock', 'number_unit', 'raf_id','sutun_id','bolme_id','user_id',];
}

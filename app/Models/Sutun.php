<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sutun extends Model
{
    use HasFactory;

    public function bolmes()
    {
        return $this->hasMany(Bolme::class, "sutun_id", "id");
    }

    public function uruns()
    {
        return $this->hasMany(UrunPlace::class, "sutun_id", "id");
    }
    protected $table = 'sutuns'; // Modeli 'blogs' tablosuyla ilişkilendir

    protected $fillable = ['name', 'stock', 'capacity', 'empty_space', 'section_number', 'raf_id',];
}

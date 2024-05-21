<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raf extends Model
{
    use HasFactory;

    public function sutuns()
{
    return $this->hasMany(Sutun::class, "raf_id", "id");
}
public function uruns()
{
    return $this->hasMany(Urun::class, "raf_id", "id");
}

    protected $table = 'rafs'; // Modeli 'blogs' tablosuyla ilişkilendir

    protected $fillable = ['name', 'stock', 'capacity', 'empty_space','column_number',];
}

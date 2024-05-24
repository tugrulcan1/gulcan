<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
    use HasFactory;

    protected $table = 'personels'; // Modeli 'blogs' tablosuyla ilişkilendir

    protected $fillable = ['username', 'title'];
}

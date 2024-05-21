<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs'; // Modeli 'blogs' tablosuyla ilişkilendir

    protected $fillable = ['title', 'content', 'short_content', 'image'];

    
   
}

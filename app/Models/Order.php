<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function urun()
    {
        return $this->hasOne(Urun::class, "id", "product_id");
    }

    use HasFactory;
}

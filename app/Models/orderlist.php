<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderlist extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function profit()
    {
        return $this->hasOne(profitcalculation::class, 'order_id');
    }
}
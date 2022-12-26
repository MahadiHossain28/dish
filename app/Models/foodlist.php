<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foodlist extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'foodlists';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'price', 'category_id', 'image'];
    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
}
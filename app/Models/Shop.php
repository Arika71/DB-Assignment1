<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = ['shop_id', 'shop_name', 'suser_id'];

    public function user(){
        return $this->belongsTo(ShopUser::class, 'suser_id');
    }
}

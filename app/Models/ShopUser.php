<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopUser extends Model
{
    use HasFactory;

    protected $fillable = ['suser_id', 'name','address','phone_no', 'shop_id'];

    public function Shop(){
        return $this->hasOne(Shop::class );
    }
}

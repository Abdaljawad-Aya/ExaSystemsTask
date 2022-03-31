<?php

namespace App\Models;

use Database\Seeders\Orders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExaUsers extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'id';

    public function merchants()
    {
        return $this->hasMany(Merchants::class);
    }

    public function orders() 
    {
        return $this->hasMany(Order::class);
    }

    public function products() 
    {
        return $this->hasManyThrough(
            Product::class,
            Merchants::class,
            'merchant_id',
            'admin_id'
        );
    }

    public function orderItem() 
    {
        return $this->belongsToMany(Order_item::class);
    }
}

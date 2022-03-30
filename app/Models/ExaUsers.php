<?php

namespace App\Models;

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
}

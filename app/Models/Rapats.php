<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapats extends Model
{
    use HasFactory;

    public function strahan()
    {
        return $this->hasMany(Strahan::class, 'tempat');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talaba extends Model
{
    use HasFactory;
    protected $table = 'Talaba';

    public function yonalish()
    {
        return $this->belongsTo(Yonalish::class, 'Yonalishi_id', 'id');
    }
}

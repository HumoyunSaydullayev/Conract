<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    protected $table = 'Contract';

    public function yonalish()
    {
        return $this->belongsTo(Yonalish::class, 'Yonalishi_id');
    }
}

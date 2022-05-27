<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shartnoma extends Model
{
    use HasFactory;
    protected $table = 'Shartnoma';

    public function shartnoma()
    {
        return $this->belongsTo(Talaba::class, 'Talaba_id', 'id');
    }
}

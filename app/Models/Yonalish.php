<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yonalish extends Model
{
    use HasFactory;
    protected $table = 'Yonalish';

    public function talabalar()
    {
        return $this->hasMany(Talaba::class, 'Yonalishi_id');
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class, 'Yonalishi_id');
    }

    public function contract()
    {
        $year = Carbon::now()->format('Y');
        $month = Carbon::now()->format('m');
        if ($month < 8) $year = $year - 1;
        return $this->hasOne(Contract::class, 'Yonalishi_id')->where('Oquv_yili', $year);
    }
}

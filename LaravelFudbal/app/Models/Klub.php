<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FudbalskaLiga;
use App\Models\Igrac;

class Klub extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'grad',
        'email',
        'website',
        'predsednik',
        'liga_id'
    ];

    public function liga(){
        return $this->belongsTo(FudbalskaLiga::class);
    }

    public function igraci(){
        return $this->hasMany(Igrac::class);
    }

}

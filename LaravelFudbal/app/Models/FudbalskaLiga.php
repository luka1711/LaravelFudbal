<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Klub;

class FudbalskaLiga extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'website',
        'nivo',
        'drzava'
    ];

    public function klubovi(){
        return $this->hasMany(Klub::class);
    }

}

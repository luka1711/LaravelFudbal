<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Klub;

class Igrac extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'email',
	    'broj_na_dresu',
        'klub_id'
    ];

    public function klub(){
        return $this->belongsTo(Klub::class);
    }

}

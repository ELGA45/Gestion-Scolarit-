<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;
    protected $fillable = [
        'incription',
        'mensualite',
    ];
    public function classes()
    {
        return $this->hasMany(Classe::class);
    }
}

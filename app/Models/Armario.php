<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armario extends Model
{
    use HasFactory;

    protected $fillable = [
        "numero",
        "estado",
    ];

    public static function estados(){
        return [
            'Emprestado',
            'Disponível'
        ];
    }
}

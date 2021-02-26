<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    // a continuación estamos habilitando la asignación masiva, aqui le indicamos en el array
    // cuales son los campos que se pueden introducir por asignación masiva
    protected $fillable = ['name', 'descripcion'];
}

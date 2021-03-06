<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    use HasFactory;
    protected $fillable = [
        'Cedula',
        'FechaDeNacimineto',
        'name',
        'Apellido',
        'Direccion',
        'Telefono',
        'Departamento',
        'Municipio',
        'Fotografia',
        'email',
        'password',
    ];
}

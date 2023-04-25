<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosPersonal extends Model
{
    use HasFactory;
    protected $table = 'datos_personal';
    protected $fillable =
        ['nombre', 'cedula', 'celular', 'uen', 'region', 'cargo','usuario_libra'];
    public $timestamps = false;

}

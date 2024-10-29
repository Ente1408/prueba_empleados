<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NivelEducacion extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'ds_niveleducacion';

    // Campos que se pueden asignar masivamente
    protected $fillable = ['descripcion'];

    // Relación con el modelo Empleado
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_niveleducacion');
    }
}

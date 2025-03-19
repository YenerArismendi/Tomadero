<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personal';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'apellido',
        'tipo_documento',
        'numero_documento',
        'telefono',
        'correo',
        'cargo',
        'tipo_pago',
        'cuenta_bancaria',
        'estado',
    ];

    public function getEstadoTextAttribute()
    {
        switch ($this->estado) {
            case 1:
                return 'Activo';
            case 2:
                return 'Inactivo';
            default:
                return 'Por definir';
        }
    }
}

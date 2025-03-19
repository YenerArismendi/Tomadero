<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagoServicios extends Model
{
    protected $table = 'pago_servicios';
    protected $primaryKey = 'id';
    protected $fillable = ['fecha', 'tipo_servicio', 'monto', 'descripcion'];
}

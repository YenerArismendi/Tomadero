<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagoArriendo extends Model
{
    protected $table = 'pago_arriendo';
    protected $primaryKey = 'id';
    protected $fillable = ['id_arriendo', 'monto', 'fecha_pago'];
}

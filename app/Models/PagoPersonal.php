<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagoPersonal extends Model
{
    protected $table = 'pago_personal';
    protected $primaryKey = 'id';
    protected $fillable = ['personal_id', 'forma_pago', 'total', 'descripcion'];

    public function personal()
    {
        return $this->belongsTo(Personal::class, 'personal_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = "ticket";
    protected $primarykey = "id";

    protected $fillable = [
        'id_user',
        'servicio_primario',
        'unyellow',
        'tint',
        'tint_descripcion',
        'klin',
        'protector',
        'estatus',
        'rack',
        'id_descripcion',
        'id_fixer',
        'id_direccion',
        'id_venta',
    ];

    public function Client()
    {
        return $this->belongsTo(Client::class, 'id_user');
    }

    public function DescripcionTicket()
    {
        return $this->hasOne(DescripcionTicket::class, 'id_ticket');
    }

    public function Fixer()
    {
        return $this->hasOne(Fixer::class, 'id_ticket');
    }

    public function Direccion()
    {
        return $this->belongsTo(Direccion::class, 'id_direccion');
    }

    public function Venta()
    {
        return $this->belongsTo(Venta::class, 'id_venta');
    }

}

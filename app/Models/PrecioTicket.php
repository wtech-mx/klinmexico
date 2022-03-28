<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrecioTicket extends Model
{
    use HasFactory;
    protected $table = "precio_ticket";
    protected $primarykey = "id";

    protected $fillable = [
        'id_ticket',
        'promocion',
        'recoleccion',
        'pago',
        'por_pagar',
        'id_descripcion',
    ];

    public function Ticket()
    {
        return $this->belongsTo(Ticket::class, 'id_ticket');
    }

    public function DescripcionTicket()
    {
        return $this->belongsTo(DescripcionTicket::class, 'id_descripcion');
    }
}

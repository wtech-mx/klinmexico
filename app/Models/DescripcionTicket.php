<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescripcionTicket extends Model
{
    use HasFactory;

    protected $table = "descripcion_ticket";
    protected $primarykey = "id";

    protected $fillable = [
        'id_ticket',
        'marca',
        'modelo',
        'color1',
        'color2',
        'talla',
        'categoria',
        'observacion',
        'tipo_servicio',
    ];

    public function Ticket()
    {
        return $this->belongsTo(Ticket::class, 'id_ticket');
    }
}

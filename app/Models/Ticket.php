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
        'factura',
        'estatus',
        'rack',
    ];

    public function Client()
    {
        return $this->belongsTo(Client::class, 'id_user');
    }
}

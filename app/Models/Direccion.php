<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $table = "direccion";
    protected $primarykey = "id";

    protected $fillable = [
        'id_user',
        'calle',
        'colonia',
        'alcaldia',
        'estado',
        'cp',
    ];

    public function User()
    {
        return $this->belongsTo(Clients::class, 'id_user');
    }
}

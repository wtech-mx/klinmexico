<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table = "nueva_venta";
    protected $primarykey = "id";

    protected $fillable = [
        'id_user',
    ];

    public function Client()
    {
        return $this->belongsTo(Client::class, 'id_user');
    }
}

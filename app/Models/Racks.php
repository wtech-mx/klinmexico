<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Racks extends Model
{
    use HasFactory;
    protected $table = "racks";
    protected $primarykey = "id";

    protected $fillable = [
        'id_ticket',
        'num_ticket',

    ];

    public function Ticket()
    {
        return $this->belongsTo(Ticket::class, 'id_ticket');
    }
}

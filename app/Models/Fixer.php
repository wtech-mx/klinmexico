<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixer extends Model
{
    use HasFactory;

    protected $table = "fixer";
    protected $primarykey = "id";

    protected $fillable = [
        'id_ticket',
        'glue',
        'sew',
        'sole',
        'patch',
        'invisible',
        'personalizado',
    ];

}

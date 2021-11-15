<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];
    /* se agrego el crear el factory de Roles para que corra el seeders */
    use HasFactory;
}

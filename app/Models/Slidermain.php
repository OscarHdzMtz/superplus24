<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slidermain extends Model
{
    /* use HasFactory; */
    /* protected table; */
    protected $fillable = ['user_id', 'name', 'description'.'image', 'fechaInicio', 'fechaFin', 'pagina'];
       /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'pagina' => 'array',
    ];
}

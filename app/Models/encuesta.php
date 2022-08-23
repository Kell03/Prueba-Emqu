<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encuesta extends Model
{
    use HasFactory;

    protected $table = "encuesta";

    protected $hidden = ['created_at', 'updated_at'];
}

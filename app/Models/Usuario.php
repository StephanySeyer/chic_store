<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //HECHO EL  MARTES REP.OS
    use HasFactory;

    protected $table = "usuarios";

    protected $fillable = ['name', 'email', 'password', 'role'];

    protected $primaryKey = 'id';

}

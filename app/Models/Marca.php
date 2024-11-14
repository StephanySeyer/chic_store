<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marca extends Model
{
    //HECHO9 EL Mierc REP.OS
    use HasFactory;

    protected $table = "marcas";

    protected $fillable = ['nombre', 'origen','disponible'];

    protected $primaryKey = 'id';
}

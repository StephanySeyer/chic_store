<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;

    protected $table = "productos";

    protected $fillable = ['name', 'description', 'price', 'stock', 'category'];

    protected $primaryKey = 'id';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCarro extends Model
{
    protected $table='carro';
    public $fillable=['marca', 'carro', 'cor'];
}

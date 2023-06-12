<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table='services';
    protected $fillable=['name ','category','details','image'];
    use HasFactory;
}

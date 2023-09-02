<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteriorProduct extends Model
{
    protected $table='interiorproducts';
    protected $fillable=['project_name','details','thumbnail','image'];
    use HasFactory;
}

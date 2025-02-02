<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteriorDesigning extends Model
{
    use HasFactory;
    protected $table='interiordesignings';
    protected $fillable=['project_name','details','thumbnail','image'];
  
    public function setFilenamesAttribute($value)
    {
        $this->attributes['image'] = json_encode($value);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Architecture extends Model
{
  
   
   
    use HasFactory;
    protected $table='architectures';
    protected $fillable=['project_name','details','image'];
  
    public function setFilenamesAttribute($value)
    {
        $this->attributes['image'] = json_encode($value);
    }
}

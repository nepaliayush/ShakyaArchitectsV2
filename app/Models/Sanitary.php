<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanitary extends Model
{
    use HasFactory;
    protected $table='sanitarys';
    protected $fillable=['project_name','details','image'];
  
    public function setFilenamesAttribute($value)
    {
        $this->attributes['image'] = json_encode($value);
    }
}

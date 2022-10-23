<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    public function chiens(){
        return $this->hasMany(Chien::class);
    }
    protected $fillable = [ "name", "image", "description" ,"rarety" , "species" , "hunt_period" ];
}

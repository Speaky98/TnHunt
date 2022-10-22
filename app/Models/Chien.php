<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chien extends Model
{
    use HasFactory;
   // public function animals(){
     //   return $this->hasMany(Animal::class);
    //}
public function animal(){
    return $this->belongsTo(Animal::class);
}
    protected $fillable = [ "name", "image", "description" ,"animal_id" , "breed" ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'dateS','dateE'];



    public function Adress()
    {
        return $this->hasMany('App\Models\Address');
    }
}

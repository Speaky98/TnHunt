<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    protected $primaryKey = 'id';
    protected $fillable = ['name','address_id'];



    public function Events()
    {
        return $this->belongsTo('App\Models\Event');
    }


}

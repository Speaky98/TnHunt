<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function getone(){
        return "Code: ".$this->code.", Libelle: ".$this->libelle;
    }
    public function checkrayon($id){
        $list=Product::all();
        for ($i=0;$i<sizeof($list); $i++)
            if($list[$i]['rayon_id']==$id)
                return true;
        return false;
    }
}

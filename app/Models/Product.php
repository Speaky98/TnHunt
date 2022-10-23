<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }

    public function getrayon($id): string
    {
        $rayon=Rayon::find($id);
      return "Code: ".$rayon->code.", Libelle: ".$rayon->libelle;
    }
}

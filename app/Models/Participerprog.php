<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participerprog extends Model
{
    use HasFactory;
    protected $table = 'participerprog';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'prenom', 'age','email', 'progchasse_id'];

    public function getprogchasse($id): string
    {
        $progchasse=ProgChasse::find($id);
      return "location: ".$progchasse->location;
    }
}

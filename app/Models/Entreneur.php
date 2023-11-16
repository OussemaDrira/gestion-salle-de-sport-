<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreneur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','prenom','adresse','telephone','sepecialite'

        ];
    
        public function courentrenement(){
            return $this->belongsTo(CourEntrenement::class);
        }

        

}

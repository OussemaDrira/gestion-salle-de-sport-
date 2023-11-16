<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourEntrenement extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomCour','duree','description'

        ];
        public function entreneur(){
            return $this->belongsTo(Entreneur::class);
        }
}

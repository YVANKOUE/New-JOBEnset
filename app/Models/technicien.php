<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class technicien extends Model
{
    protected $fillable = [
        'name',
        'prenom',
        'email',
        'mot de passe',
        'matricule'
    ];
    use HasFactory;
    public function annonces(){
        return $this->belongsToMany(Annonce::class);

    }
    public function sousdomains(){
        return $this->belongsToMany(Sousdomain::class);

    }
}

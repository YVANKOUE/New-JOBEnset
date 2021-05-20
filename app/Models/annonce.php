<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class annonce extends Model
{
    use Notifiable;
    protected $fillable = [
        'title','client_id', 'description', 'domaine', 'sous_domaine'
    ];
    use HasFactory;
    public function techniciens(){
        return $this->belongsToMany(Technicien::class);

    }

    public function Client(){
        return $this->belongsTo(Client::class);
    }
}

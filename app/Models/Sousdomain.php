<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sousdomain extends Model
{
    protected $fillable = [
        'name','domain_id'
    ];
    public function domian(){
        return $this->belongsTo(domain::class);

    }
    use HasFactory;
}

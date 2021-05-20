<?php

namespace App\Models;

use App\Models\Sousdomain;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class domain extends Model
{
    protected $fillable = [
        'name'
    ];
    public function sousdomians(){
        return $this->belongsToMany(Sousdomain::class);

    }
    use HasFactory;
}

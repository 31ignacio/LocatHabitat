<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function entreprise(){

        return $this->belongsTo(Entreprise::class, 'entreprise_id');
    }
}

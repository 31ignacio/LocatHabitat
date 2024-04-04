<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable = ['marque', 'prix', 'chauffeur','caburation', 'climatiseur', 'entreprise_id', 'images'];


    public function entreprise(){

        return $this->belongsTo(Entreprise::class, 'entreprise_id');
    }
}

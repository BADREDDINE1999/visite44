<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;



    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function produitsdmd()
    {
        return $this->belongsToMany(Produitdmd::class);
    }

    public function produitsprp()
    {
        return $this->belongsToMany(Produitprp::class);
    }

    public function visite()
    {
        return $this->belongsTo(Produit::class);
    }


    protected $fillable = [
        'visite_id',

        'nom_client',
        'date_de_visite',
        'heure_entrée',
        'heure_sortie',
        'product_id',
        'statut'
    ];
}

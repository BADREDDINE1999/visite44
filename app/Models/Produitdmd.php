<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produitdmd extends Model
{
    use HasFactory;
    public function visites()
    {
        return $this->belongsTo(Visite::class);
    }

    public function rapports() {
        return $this->belongsToMany(Rapport::class);
    }
    public function produits()
    {
        return $this->belongsTo(Produit::class);
    }
    protected $fillable = [
        'product_id',
        'statut',
    ];
}



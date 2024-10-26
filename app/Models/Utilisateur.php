<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prenom', 'dateNaissance', 'adresse', 'genre', 'telephone', 'email'
    ];

    public function profil()
    {
        return $this->hasOne(Profil::class);
    }
    public function rendezVous()
    {
        return $this->hasMany(RendezVous::class);
    }

    public function antecedentsMedicaux()
    {
        return $this->hasMany(AntecedentMedical::class);
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }
}

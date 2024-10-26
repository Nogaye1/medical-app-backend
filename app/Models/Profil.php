<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = ['utilisateur_id', 'role_id'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }    
}
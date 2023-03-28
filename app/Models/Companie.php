<?php

namespace App\Models;
use App\Models\Addresse;
use App\Models\Companie_rate;
use App\Models\Companie_has_activities;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Companie extends Model
{
    use HasFactory, SoftDeletes;

    public function activities() {
        return $this->belongsToMany(Activite::class, 'companies_has_activities', 'companies_id', 'activities_id');
    }

    public function addresses() {
        return $this->hasMany(Addresse::class, 'companies_id');
    }

    public function companies_rate() {
        return $this->belongsTo(Companie_rate::class, 'companies_id');
    }
}

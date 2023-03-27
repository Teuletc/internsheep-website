<?php

namespace App\Models;
use App\Models\Addresse;
use App\Models\Companie_rate;
use App\Models\Companies_has_activities;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    use HasFactory;
    public function address()
    {
        return $this->hasOne('App\Models\Addresse', 'companies_id');
    }
    public function companieactivity()
    {
        return $this->hasOne('App\Models\Companies_has_activities', 'companies_id');
    }
    public function companierate()
    {
        return $this->hasOne('App\Models\Companie_rate', 'companies_id');
    }
}

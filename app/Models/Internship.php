<?php

namespace App\Models;
use Companie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;
    public function company()
    {
        return $this->belongsTo('App\Models\Companie', 'companies_id');
    }
}
 

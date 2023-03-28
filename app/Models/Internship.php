<?php

namespace App\Models;
use Companie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Internship extends Model
{
    use HasFactory, SoftDeletes;
    public function company() 
    {
        return $this->hasMany(Companie::class);
    }

    public function getNbrStudentsPlaces()
    {
        if(is_null($this->nbr_students_places)){
            return 0;
        }
        return $this->nbr_students_places;
    }

}
 

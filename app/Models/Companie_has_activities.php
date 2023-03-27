<?php

namespace App\Models;

use App\Models\Activite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies_has_activities extends Model
{
    use HasFactory;
    public function activity()
    {
        return $this->belongsToMany('App\Models\Activite', 'activities_id');
    }
}

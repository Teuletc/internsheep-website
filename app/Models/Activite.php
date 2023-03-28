<?php

namespace App\Models;
use App\Models\Companies_has_Activities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    
    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'activities';

    public function companies() {
        return $this->belongsToMany(Companie::class, 'companies_has_activities', 'activities_id', 'companies_id');
    }
}

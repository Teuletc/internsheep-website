<?php

namespace App\Models;

use App\Models\Companie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Addresse extends Model
{
    use HasFactory;

    public function company() {
        return $this->belongsTo(Companie::class);
    }

    protected $fillable = ['rue','addresse2','codepostal','ville','pays'];
}

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

    protected $fillable = ['countries','city','zip_code','name_street','num_way','additional_addresses'];
}

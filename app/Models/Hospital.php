<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    public function visions()
    {
        return $this->hasMany(vision::class, "id_hospital");
    }
    public function missions()
    {
        return $this->hasMany(mission::class, "id_hospital");
    }
}

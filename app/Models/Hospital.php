<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    public function visions()
    {
        return $this->hasMany(Vision::class, "id_hospital");
    }
    public function missions()
    {
        return $this->hasMany(Mission::class, "id_hospital");
    }

    public function social_accounts()
    {
        return $this->hasMany(Social_account::class, "id_hospital");
    }
}

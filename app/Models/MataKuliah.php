<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    public function tutor()
    {
        return $this->hasOne(Tutor::class);
    }
    public function tutors()
    {
        return $this->hasMany(Tutor::class);
    }
}

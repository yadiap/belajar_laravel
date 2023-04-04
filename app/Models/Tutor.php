<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'kode_tutor',
        'gender',
        'email',
        'bidang',
    ];

    public function mata_kuliah()
    {
        return $this->belongsTo(MataKuliah::class);
    }
    public function mata_kuliahs()
    {
        return $this->belongsToMany(MataKuliah::class, 'mata_kuliah_tutors');
    }
}

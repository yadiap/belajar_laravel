<?php

namespace App\Models;


class Tutor 
{
   
    private static $list_tutor = [
        [
            'id' => 1,
            'nama' => 'Musiran',
            'kode_tutor' => '45001',
            'gender' => 0,
            'email' => 'musiranp@ecampus.ut.ac.id',
            'bidang' => 'Bahasa Indonesia',
        ],
        [
            'id' => 2,
            'nama' => 'Kus Anjarwati ',
            'kode_tutor' => '45002',
            'gender' => 1,
            'email' => 'kus@ecampus.ut.ac.id',
            'bidang' => 'Pancasila',
        ],
        [
            'id' => 3,
            'nama' => 'Martono',
            'kode_tutor' => '45003',
            'gender' => 0,
            'email' => 'martono@ecampus.ut.ac.id',
            'bidang' => 'PPKN',
        ],
        [
            'id' => 4,
            'nama' => 'Dyah Paminta',
            'kode_tutor' => '45004',
            'gender' => 1,
            'email' => 'dyahp@ecampus.ut.ac.id',
            'bidang' => 'Matematika',
        ],
        [
            'id' => 5,
            'nama' => 'Wartomo',
            'kode_tutor' => '45005',
            'gender' => 0,
            'email' => 'wartomo@ecampus.ut.ac.id',
            'bidang' => 'IPS',
        ],
  
    ];

    public static function all()
    {
        return collect(self::$list_tutor);
    }

    public static function find($id) 
    {
        $list_tutor = self::all();
        return $list_tutor->firstWhere('id', $id);
    }
}

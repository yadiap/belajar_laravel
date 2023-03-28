<?php

namespace App\Models;

class Mahasiswa
{
    // use HasFactory;
    private static $list_mahasiswa = [
        [
            'id' => 1,
            'nama' => 'Yadi',
            'nim' => '04512345',
            'nilai' => 95,
            'personal' => [
                'alamat' => 'Bogor',
                'gender' => 0,
                'usia' => 18,
            ],
        ],
        [
            'id' => 2,
            'nama' => 'Rafika Ayun',
            'nim' => '04522222',
            'nilai' => 85,
            'personal' => [
                'alamat' => 'Yogya',
                'gender' => 1,
                'usia' => 17,
            ],
        ],
        [
            'id' => 3,
            'nama' => 'Menanda Fuad',
            'nim' => '04533333',
            'nilai' => 70,
            'personal' => [
                'alamat' => 'Sleman',
                'gender' => 0,
                'usia' => 18,
            ],
        ],
        [
            'id' => 4,
            'nama' => 'Fery',
            'nim' => '04544444',
            'nilai' => 70,
            'personal' => [
                'alamat' => 'Gamping',
                'gender' => 0,
                'usia' => 17,
            ],
        ],
        [   
            'id' => 5,
            'nama' => 'Evi',
            'nim' => '0455555',
            'nilai' => 85,
            'personal' => [
                'alamat' => 'Bantul',
                'gender' => 1,
                'usia' => 18,
            ],
        ],
    ];

    public static function all()
    {
        return collect(self::$list_mahasiswa);
    }

    public static function find($id) 
    {
        $list_mahasiswa = self::all();
        return $list_mahasiswa->firstWhere('id', $id);
    }
}

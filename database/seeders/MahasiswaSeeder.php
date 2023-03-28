<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::insert([[
            'nama' => 'Yadi',
            'nim' => '04512345',
            'nilai' => 95,
            'alamat' => 'Bogor',
            'gender' => 0,
            'usia' => 18,
        ],
        [
            'nama' => 'Rafika Ayun',
            'nim' => '04522222',
            'nilai' => 85,
            'alamat' => 'Yogya',
            'gender' => 1,
            'usia' => 17,
        ],
        [
            'nama' => 'Menanda Fuad',
            'nim' => '04533333',
            'nilai' => 70,
            'alamat' => 'Sleman',
            'gender' => 0,
            'usia' => 18,
        ],
        [
            'nama' => 'Fery',
            'nim' => '04544444',
            'nilai' => 70,
            'alamat' => 'Gamping',
            'gender' => 0,
            'usia' => 17,
        ],
        [   
            'nama' => 'Evi',
            'nim' => '0455555',
            'nilai' => 85,
            'alamat' => 'Bantul',
            'gender' => 1,
            'usia' => 18,
        ],    
    ]);
    }
}

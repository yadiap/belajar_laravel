<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataKuliah::insert([[
            'nama' => 'Pendidikan Pancasila',
            'kode' => 'MKWU4001',
        ], [
            'nama' => 'Bahasa Indonesia',
            'kode' => 'MKWU4002',
        ], [
            'nama' => 'Bahasa Inggris',
            'kode' => 'MKWU4003',
        ],[
            'nama' => 'Matematika',
            'kode' => 'MATA4001',
        ],[
            'nama' => 'Pengantar Ekonomi',
            'kode' => 'EKMA4001',
        ],
        ]);
    }
}

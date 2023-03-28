<?php

namespace Database\Seeders;

use App\Models\Tutor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tutor::insert([
            [
                'nama' => 'Musiran',
                'kode_tutor' => '45001',
                'gender' => 'Laki-laki',
                'email' => 'musiranp@ecampus.ut.ac.id',
                'bidang' => 'Bahasa Indonesia',
            ],
            [
                'nama' => 'Kus Anjarwati ',
                'kode_tutor' => '45002',
                'gender' => 'Perempuan',
                'email' => 'kus@ecampus.ut.ac.id',
                'bidang' => 'Pancasila',
            ],
            [
                'nama' => 'Martono',
                'kode_tutor' => '45003',
                'gender' => 'Laki-laki',
                'email' => 'martono@ecampus.ut.ac.id',
                'bidang' => 'PPKN',
            ],
            [
                'nama' => 'Dyah Paminta',
                'kode_tutor' => '45004',
                'gender' => 'Perempuan',
                'email' => 'dyahp@ecampus.ut.ac.id',
                'bidang' => 'Matematika',
            ],
            [
                'nama' => 'Wartomo',
                'kode_tutor' => '45005',
                'gender' => 'Laki-laki',
                'email' => 'wartomo@ecampus.ut.ac.id',
                'bidang' => 'IPS',
            ],
    ]);
    }
}

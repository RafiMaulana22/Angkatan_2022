<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username' => 'Ranma',
                'nama_lengkap' => 'Rafi Nur Maulana',
                'email' => 'rafi@angkatan.ac.id',
                'password' => bcrypt('rafi123')
            ]
        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }
    }
}

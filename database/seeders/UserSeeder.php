<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'admin',
            'alamat' => 'Jl. Dieng No. 123',
            'telepon' => '1122334455',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin123'),
            'jenis' => 'admin',
        ]);
    }
}

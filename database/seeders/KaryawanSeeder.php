<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Riza Nurfat Risyam",
            'email' => "risyam23riza@gmail.com",
            'password' => Hash::make("password"),
            'role' => "karyawan"
        ]);

        $this->command->info("User karyawan berhasil diinsert");
    }
}

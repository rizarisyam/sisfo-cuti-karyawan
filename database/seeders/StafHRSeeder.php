<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class StafHRSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Staf HR 001",
            'email' => "stafhr001@localhost.test",
            'password' => Hash::make("password"),
            'role' => "staf hr",
        ]);

        $this->command->info("User Staf HR berhasil diinsert");
    }
}

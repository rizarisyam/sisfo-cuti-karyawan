<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Administrator",
            'email' => "administrator@localhost.test",
            'password' => Hash::make("password"),
            'role' => "super admin",
        ]);

        $this->command->info("User Admin berhasil diinsert");
    }
}

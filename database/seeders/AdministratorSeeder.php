<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\Models\User;
        $administrator->username = "admin";
        $administrator->name = "Administrator";
        $administrator->email = "padcyber@gmail.com";
        $administrator->roles = json_encode (["ADMIN"]);
        $administrator->password = \Hash::make("rahasia");
        $administrator->avatar = "tidak-ada-file.png";
        $administrator->address = "Sarmili, Depok Bogor UTara";

        $administrator->save();

        $this->command->info("user admin success insert");


    }
}

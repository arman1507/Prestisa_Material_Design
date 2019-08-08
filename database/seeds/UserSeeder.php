<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->password = Hash::make("gigimaju");
        $user->api_token = str_random(100);
        $user->save();
    }
}

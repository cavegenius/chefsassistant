<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \App\Models\User::insert([
            'name' => 'Wyatt Morgan',
            'email' => 'wmorganaz25@yahoo.com',
            'email_verified_at' => NULL,
            'password' => '$2y$10$dAfCbNWwuws2W/lJlyzm1u.RkxambT9z9DBJ.KOW8H..0KheALElW',
            'remember_token' => NULL,
            'created_at' => '2019-04-06 11:55:04',
            'updated_at' => '2019-04-06 11:55:04'
        ]);
    }
}

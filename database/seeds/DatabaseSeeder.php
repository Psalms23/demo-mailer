<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Superuser',
            'email' => 'creeped12'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => '2',
            'remember_token' => str_random(10),
            'api_token' => str_random(20),
            'status' => 1,
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create([
            'name' => 'Ayange Felix Aondonengen',
            'email' => 'ayangefelix8@gmail.com',
            'password' => bcrypt('felix123')
        ]);
    }
}

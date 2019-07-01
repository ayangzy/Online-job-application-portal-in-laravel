<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Position::create([
            'position' => 'Driver'
        ]);

        App\Position::create([
            'position' => 'Customer care'
        ]);

        App\Position::create([
            'position' => 'Store Keeper'
        ]);

        App\Position::create([
            'position' => 'Sales Manager'
        ]);
    }
}

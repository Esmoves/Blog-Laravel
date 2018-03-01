<?php

use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name' => 'Owner',
    	'email' => 'email@example.com',
    	'password' => bcrypt('miauw'),
    	'owner' => 1,
    	]);
    }
}
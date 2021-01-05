<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'test',
        
            'email' => 'test@gmail.com',
        
            'password' => app('hash')->make('test'),
        
            ]);
    }
}

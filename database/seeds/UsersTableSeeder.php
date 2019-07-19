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
        DB::table('users')->insert([
            'name' => 'aep',
            'email' => 'aep@gmail.com',
            'password' => bcrypt('aep'),
            'level' => 'admin'
        ]);
    }
}

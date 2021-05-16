<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'firstname' => 'Admin',
            'lastname' => 'Politeknik LP3I Bandung',
            'adress' => 'jl. Pahlawan No 59, Bandung, Jawa Barat',
            'profile_pic' => null,
            'email' => 'it1@plb.ac.id',
            'password' => bcrypt('just4admin'),
            'email_verified_at' => date('Y-m-d H:i:s'),
            'role' => 1
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($index = 0; $index < 101; $index++) {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'lastname' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => password_hash(Str::random(10), PASSWORD_DEFAULT),
                'username' => Str::random(10),
                'password' => Str::random(10).$index,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Task extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($index = 0; $index < 101; $index++) {
            DB::table('task')->insert([
                'user_id' => rand(1,100),
                'task' => Str::random(10),
                'description' => Str::random(10),
                'status' => rand(0,1),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
               
            ]);
        }
    }
}

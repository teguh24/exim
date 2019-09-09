<?php

use Illuminate\Database\Seeder;

class OriginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('origins')->insert([
            'origin' => 'Jepang',            
        ]);
        DB::table('origins')->insert([
            'origin' => 'Thailand',            
        ]);
        DB::table('origins')->insert([
            'origin' => 'China',            
        ]);
        DB::table('origins')->insert([
            'origin' => 'Singapore',            
        ]);
    }
}

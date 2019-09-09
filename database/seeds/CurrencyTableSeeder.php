<?php

use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'currency' => 'IDR',            
        ]);
        DB::table('currencies')->insert([
            'currency' => 'USD',            
        ]);
        DB::table('currencies')->insert([
            'currency' => 'JPY',            
        ]);
        DB::table('currencies')->insert([
            'currency' => 'THB',            
        ]);
    }
}

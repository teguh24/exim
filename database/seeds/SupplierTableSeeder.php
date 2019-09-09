<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'supplier' => 'Aisin Seiki',            
        ]);
        DB::table('suppliers')->insert([
            'supplier' => 'Aisin Asia',            
        ]);
        DB::table('suppliers')->insert([
            'supplier' => 'Nippo',            
        ]);
        DB::table('suppliers')->insert([
            'supplier' => 'Sato',            
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class PpjkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ppjks')->insert([
            'nama' => 'Puninar',
            'pimpinan' => 'Riyanto',
            'npwp' => '1.300.326.4-046.000',
            'alamat' => 'Jl. RAYA CAKUNG CILINCING KM 1.5 JAKARTA 13910',
            'tel_fax' => '( 021 ) 46827777 / ( 021 ) 46835887',            
        ]);
    }
}

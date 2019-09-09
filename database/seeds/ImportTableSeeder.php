<?php

use Illuminate\Database\Seeder;

class ImportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imports')->insert([
            'shipment' => 'AUTO PART',
            'comodity' => 'CKD',
            'no_invoice' => '11909D100055',
            'amount_inv' => '2217669159',
            'currency_id' => '1',
            'supplier_id' => '1',            
            'origin_id' => '1',
            'hbl_awb' => 'COAU7185156580',
            'ppjk_id' => '1',
            'vessel' => 'OOCL GUANGZHOU V.114S',
            'jumlah_kem' => '20 PALLET',
            'ship_by' => 'SEA',
            'etd' => '2019/09/05',
            'eta' => '2019/09/17',
            'eta_aiia' => '2019/09/20',
            'pib' => '2019/09/17',
            'cc' => '2019/09/17',            
        ]);
        DB::table('imports')->insert([
            'shipment' => 'AUTO PART',
            'comodity' => 'CKD',
            'no_invoice' => '11909D100100',
            'amount_inv' => '2217669459',
            'currency_id' => '2',
            'supplier_id' => '2',            
            'origin_id' => '2',
            'hbl_awb' => 'COAU7185156580',
            'ppjk_id' => '2',
            'vessel' => 'OOCL GUANGZHOU V.114S',
            'jumlah_kem' => '20 PALLET',
            'ship_by' => 'SEA',
            'etd' => '2019/09/05',
            'eta' => '2019/09/17',
            'eta_aiia' => '2019/09/20',
            'pib' => '2019/09/17',
            'cc' => '2019/09/17',            
        ]);
    }
}

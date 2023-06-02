<?php

namespace Database\Seeders;

use App\Models\BusinessDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businessDetailsRecords = [
            'id' => 1,
            'vendor_id' => 1,
            'shop_name' => 'Mwampamba shop',
            'shop_address' => 'Kigamboni, Dar',
            'shop_town' => 'Dar es Salaam',
            'shop_email' => 'info@mwampambashop.co.tz',
            'shop_contact' => '0684710771',
            'shop_tin_number' => '1234567890',
            'shop_business_license' => 'Business-license',
            'shop_website' => 'mwampamba.co.tz',
            'shop_proof_image' => 'image'
        ];

        BusinessDetails::insert($businessDetailsRecords);
    }
}

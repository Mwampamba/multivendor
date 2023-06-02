<?php

namespace Database\Seeders;

use App\Models\BankDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bankDetailsRecords = [
            'id' => 1,
            'vendor_id' => 1,
            'account_holder_name' => 'Beno Mwampamba',
            'bank_name' => 'CRDB Bank',
            'account_number' => '1234567890'
        ];

        BankDetails::insert($bankDetailsRecords);
    }
}

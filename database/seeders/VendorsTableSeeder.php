<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendorsRecords = [
            'id' => '1',
            'name' => 'Vendor Vendor',
            'email' => 'vendor@multivendor.com',
            'contact' => '0656077828',
            'town' => 'Dar es Salaam',
            'profile' => 'image',
            'status' => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ];
        
        Vendor::insert($vendorsRecords);
    }
}

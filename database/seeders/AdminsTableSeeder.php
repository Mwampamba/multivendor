<?php

namespace Database\Seeders; 
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            'id' => '2',
            'name' => 'Vendor Vendor',
            'email' => 'vendor@multivendor.com',
            'type' => '2',
            'vendor_id' => '1',
            'profile' => 'image',
            'status' => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ];
        
        Admin::insert($adminRecords);
    }
}

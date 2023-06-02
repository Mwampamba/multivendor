<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessDetails extends Model
{
    use HasFactory;
    protected $table = 'business_details';
    protected $fillable = [
        'vendor_id',
        'shop_name',
        'shop_address',
        'shop_town', 
        'shop_email',
        'shop_contact',
        'shop_tin_number',
        'shop_business_license', 
        'shop_website',
        'shop_proof_image'
    ];
}

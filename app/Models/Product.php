<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\RecordsActivity;

class Product extends Model
{
    use HasFactory;
    use RecordsActivity;
    
    protected $fillable=[
        'Product_name',
        'Product_dec',
        'Product_cost',
        'default',
        'taxable',
        'tax',
        'shipping',
        'shipping_rate',
        'discount',
        'discount_rate',
        'services_inc'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Bavix\Wallet\Traits\HasWallet;
use Bavix\Wallet\Interfaces\Customer;
use Bavix\Wallet\Interfaces\Product;



class services extends Model implements Product
{
    use HasFactory, HasWallet;

    public function canBuy(Customer $customer, int $quantity = 1, bool $force = false): bool
    {
        /**
         * If the service can be purchased once, then
         *  return !$customer->paid($this);
         */
        return true; 
    }
    
    public function getAmountProduct(Customer $customer)
    {
        return ($this->cost);
    }

    public function getMetaProduct(): ?array
    {
        return [
            'id' => $this->id,
            'title' => $this->Name, 
            'description' => 'Purchase of Product #' . $this->catagory ." | Cost Rs".$this->cost ,
        ];
    }
    
    protected $fillable = [
        'Name',
        'catagory',
        'essentail',
        'image',
        'cost'
    ];
}
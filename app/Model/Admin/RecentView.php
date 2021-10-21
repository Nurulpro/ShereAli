<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Stripe\Product;

class RecentView extends Model
{
   public function product(){
       return $this->bolongsTo(Product::class);
   }
}
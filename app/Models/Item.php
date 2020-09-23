<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

	public function categories(){
        return $this->belongsToMany('App\Models\Category', 'category_item');
    }


    protected $fillable = [
    	'name',
    	'purchase_price',
    	'retail_price',
    	'quantity',
    	'vat',
    	'description',
    ];
}

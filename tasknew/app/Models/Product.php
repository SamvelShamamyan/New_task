<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';
    protected $guarded = false;

    public function category()
    {
    	return $this->belongsTo(Category::class, 'category_id', 'id');
    }

     public function putProductFile()
    {
    	return $this->hasOne(ProductFile::class, 'product_id', 'id');
    }
}

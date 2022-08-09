<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendorcategory extends Model
{
    use HasFactory;
    
    protected $table = 'vendorcategory';
    public function subcategories()
    {
        return $this->hasMany('App\Models\vendorsubcategory','category_id');
    }
    
}

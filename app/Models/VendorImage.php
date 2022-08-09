<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendorimage extends Model
{
    protected $table = 'vendor_images';
    use HasFactory;
    protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        $image_path = public_path('images/Vendorimages'  . '/' . $this->product_image);
        return $image_path;
    }
    public function gallery_images()
    {
        return $this->hasMany('App\Models\VendorImagesGallerie','product_image_id');
    }
}

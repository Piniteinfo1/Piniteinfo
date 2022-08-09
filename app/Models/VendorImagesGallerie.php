<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorImagesGallerie extends Model
{
    protected  $table = 'vendor_images_galleries';
    use HasFactory;
     protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        $image_path = public_path('images/VendorimagesGallery' . '/' . $this->galleries);
        // dd($image_path);
        return $image_path;

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class InteriorDesignerImage extends Model
{
    use HasFactory;
    protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        $image_path = public_path('images/InteriorImages'  . '/' . $this->product_image);
        // dd($image_path);
        return $image_path;

    }

    public function gallery_images()
    {
        return $this->hasMany('App\Models\InteriorDesignerGallerie','Interior_designer_id');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteriorDesignerGallerie extends Model
{
    use HasFactory;
    protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        $image_path = env('IMAGE_URL') . '/designer/images/Interiordesignsgallery' . '/' . $this->galleries;
        // dd($image_path);
        return $image_path;

    }
}
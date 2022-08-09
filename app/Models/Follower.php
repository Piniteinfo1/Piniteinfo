<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InteriorDesignerImage;
use App\Models\InteriorDesignerGallerie;

class Follower extends Model
{
    public function followings()
    {
        return  $this->hasManyThrough(InteriorDesignerImage::class, InteriorDesignerGallerie::class, 'user_id', 'user_id');
    } 
    // public function gallery_images()
    // {
    //     return $this->hasMany('App\Models\InteriorDesignerGallerie','Interior_designer_id');
    // }
    
}

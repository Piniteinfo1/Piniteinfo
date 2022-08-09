<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Savedesign extends Model
{
    public function Saveddesigns()
    {
        return $this->hasMany('App\Models\InteriorDesignerImage', 'id', 'design_id');
    }
    public function gallery_images()
    {
        return $this->hasMany('App\Models\InteriorDesignerGallerie','Interior_designer_id', 'design_id');
    }
}

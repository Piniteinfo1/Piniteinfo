<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dailyproductupdate extends Model
{
    use HasFactory;
    protected $appends = ['image_path'];
    protected $table = 'dailyproductupdate';
    public function getImagePathAttribute()
    {
         $image_path = env('IMAGE_URL') . '/productstatus/dailyupdate' . '/' . $this->photo;
            // dd($image_path);
            return $image_path;
    }
}

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
        // dd(env('DB_DATABASE'));
        $image_path = env('IMAGE_URL') . '/designer/images/Interiordesigns'  . '/' . $this->product_image;
        return $image_path;
    }
    public function gallery_images()
    {
        return $this->hasMany('App\Models\InteriorDesignerGallerie','Interior_designer_id');
    }
    public function followings()
    {
        return $this->hasMany('App\Models\Follower', 'Follower_id');
    } 
   //  public function posts(){
   //    return $this->hasMany(InteriorDesignerImage::class);
   // }

   // public function followers(){
   //    return $this->belongsToMany(User::class, 'followers', 'user_id', 'Follower_id');
   // }
   // public function following()
   //  {
   //      return $this->belongsToMany('App\Models\User', 'followers', 'Follower_id', 'user_id')->withTimestamps();
   //  }
    // public function followers()
    // {
    //     return $this->hasMany('App\Models\Follower','user_id');
    // }
    // public function following() {
    //     return $this->belongsToMany(Follower::class,  'follower_id');
    // }
    // public function followers() 
    // {
    //     return $this->belongsToMany(User::class, 'followers', 'following_id', 'follower_id');
    // }
    // public function article() 
    // {
    //     return $this->belongsTo('App\Models\InteriorDesignerGallerie','type');
    // }
}

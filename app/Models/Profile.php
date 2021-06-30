<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profileImage()
    {
        $image = ($this->image) ?  $this->image : 'profile/BhL5cajLevhd0ju0jEuPhCQuNLjGQVG3WOb8d5Vd.png';
        return '/storage/' . $image;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    //this will make the mass assignment(fillable property of mass assignment). It's ok, do not gaurd  anything

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
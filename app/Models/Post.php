<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'featured_image',
        'body'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
   /* public function getFeaturedImageAttribute($value)
    {
        return asset('/media/'.$value);
    }*/
}

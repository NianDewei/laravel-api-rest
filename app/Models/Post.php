<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const BORRADOR  = 1,
          PUBLICADO = 2;

    //! Inverse one-to-many relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //! many-to-many relationship
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //! Polymorphic one-to-many relationship
    public function images(){
        return $this->morphMany(Image::class,'imageable');
    }
}

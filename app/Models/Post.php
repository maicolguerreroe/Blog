<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id', 'created_at', 'update_at'];

    use HasFactory;
    //realcion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //relación muchos a muchos

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    //relación uno  a uno polimorfica
    public function image(){
        return $this->MorphOne(Image::class, 'imageable');
    }

}

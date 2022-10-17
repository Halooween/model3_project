<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='post';
    protected $timestamp=false;
    protected $fillable=[
        'title',
        'status',
        'description'
    ];


    public function category(){
        return $this->belongsToMany(Category::class);
    }
}

// protected $table='category';
// protected $timestamp=false;
// protected $fillable=[
//     'category'
// ];


// public function post(){
//     return $this->belongsToMany(Post::class);
// }

<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;
    protected $table ='categories';

    public function getpost()
    {
        return $this->hasMany(Post::class,'category_id');
    }
}

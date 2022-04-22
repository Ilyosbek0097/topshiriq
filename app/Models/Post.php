<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;
    protected $table="posts";

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

}

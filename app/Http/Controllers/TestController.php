<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class TestController extends Controller
{
    public function news()
    {
        // $category =  Category::leftJoin();
        $arrDb = [ 'DB'=>[

            'Category'=> [
                'name'=>'nomi',
                'slug'=>'urli',
            ],
            'Posts'=>[
                'name' => 'Test',
                'id' => 123,
            ],
        ] ];

        return Post::select('category_id','description','slug')->with('category')->get();
    }
}

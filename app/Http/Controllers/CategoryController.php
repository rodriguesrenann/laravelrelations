<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        echo '<b>Categoria: </b></br>'.$category->name;
        echo '<h1>Posts com essa categoria: </h1>';

        $posts = $category->posts()->get();

        foreach ($posts as $post) {
            echo $post->title.'<br>'.$post->body.'</br>';
        }
    }
}

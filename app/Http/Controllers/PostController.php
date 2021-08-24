<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $user = $post->user()->first();

        echo '<h1>Informaçoes do post: </h1>';
        echo '<b>Titulo: </b>'.$post->title.'<b>Texto: </b>'.$post->body;

        echo '<h1>Informaçoes do usuário: </h1>';
        echo '<b>Nome: </b> '.$user->name.' <b>E-mail: </b> '.$user->email;

        $categories = $post->categories()->get();

        echo '<h1>Categorias do post: </h1>';

        foreach ($categories as $category) {
            echo $category->name.'</br>';
        }
        
        
    }
}

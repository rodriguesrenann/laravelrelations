<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);

        if ($user) {
            echo '<h1>Informaçoes do usuário: </h1>';
            echo $user->name.'</br>';
            echo $user->email.'</br>';

            $address = $user->address()->first();

            echo '<h1>Endereço do usuário: </h1>';
            echo 'Cidade:'.$address->city.'/'.$address->state;

            $posts = $user->posts()->get();

            echo '<h1>Posts do usuário: </h1>';

            foreach ($posts as $post) {
                echo 'Titulo: '.$post->title.'</br>';
                echo $post->body.'</br>';
            }
        }
    }
}

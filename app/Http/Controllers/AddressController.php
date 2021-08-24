<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

use App\Models\Address;

class AddressController extends Controller
{
    public function show(Address $address)
    {
        echo '<h1>Informações de endereço</h1>';
        echo $address->city.'/'.$address->state;

        $user = $address->user()->first();

        echo '<h1>Informações do usuario</h1>';
        echo $user->name.'</br>';
        echo $user->email;
    }
}

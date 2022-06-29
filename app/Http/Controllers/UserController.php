<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'nomes' => [
                'José Lira',
                'Daniel Pinheiro'
            ]
        ];
        //dump e die no users
        //vai le somente ate aqui
        dd($users);
    }

    public function show($id)
    {
        $idUser = $id;

        \dd('Id do usuário é ' . $id);
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser(){
     
 //       echo "<h1>Listagem de usuário</h1>";
       $user = User::where('id','=',1)->first();
        //dump and die
        //dd($user);
        return view('listUser',['userList'=>$user]);
       // return view(view:'listUser',["userList" => $user]);
    }
    public function addUser(){
       $user = new User();
        $user->name = 'Usuario Teste';
        $user->email = 'teste@upinside.com.br';
        $user->password = Hash::make(value:'321');
        $user->save();
        return view('listUser',['userList'=>$user]);
       // return view(view:'listUser',["userList" => $user]);
    }
}

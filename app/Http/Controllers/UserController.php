<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        if($user){
            echo "<h1>Dados do Usuário</h1>";
            echo "<p>Nome: {$user->name}  E-mail: {$user->email}. </p>";
        }
        $address = $user->address()->first();
        // dd($user);
        if($address){
            echo "<h2>Endereço do Usuário</h2>";
            echo "<p>Endereço completo: {$address->street}, {$address->number} {$address->city}/{$address->state}. </p>";
        }

        $posts = $user->posts()->get();
        if($posts){
            echo "<h3>Posts do Usuário</h3>";
            foreach($posts as $post){
                echo "<p>#{$post->id}: title:{$post->title}, subtitle:{$post->subtitle} slug:{$post->slug}/content:{$post->content}. </p>";
            }
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

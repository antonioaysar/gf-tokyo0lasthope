<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Chat;
use App\District;
use App\Http\Requests\ChatsRequest;

class ChatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//     	$chats = Chat::all();
    	$chats = Chat::paginate(5);
    	 
    	return view('chats.chats', compact('chats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$districts = District::all();
    	
    	$districts_arr = [];
    	
    	foreach($districts as $district){
    		$districts_arr[$district->id] = $district->nome;
    	}
    	
        return view('chats.create', compact('districts_arr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChatsRequest $request)
    {
        $chat = new Chat;
    	$chat->name = $request->name;
    	$chat->district_id = $request->district_id;
    	
    	$chat->save();
    	
        return redirect('/gestione/chats')->with('success', 'Chat creata con successo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$chat = Chat::find($id);
    	
    	$districts = District::all();
    	 
    	$districts_arr = [];
    	 
    	foreach($districts as $district){
    		$districts_arr[$district->id] = $district->nome;
    	}
    	 
    	return view('chats.edit',compact('chat', 'districts_arr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChatsRequest $request, $id)
    {
    	Chat::find($id)->update($request->all());
    	
    	return redirect('/gestione/chats')
    	->with('success','Chat aggiornata con successo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chat::destroy($id);
    	
    	return redirect('/gestione/chats')->with('success', 'Chat eliminata con successo!');
    }
}

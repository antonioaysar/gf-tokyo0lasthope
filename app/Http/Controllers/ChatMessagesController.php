<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Chat;
use App\District;
use App\Skill;
use App\ChatMessage;
use App\Events\ChatMessageWasReceived;
use App\Personaggio;

class ChatMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($district, $chat)
    {
    	
    	
        $tmp_chat = Chat::where('name', $chat)->first();
    	$tmp_district = District::where('nome', $district)->first();
    	
    	$skills = Skill::all();
    	 
    	$skills_arr = [];
    	 
    	foreach($skills as $skill){
    		$skills_arr[$skill->id] = $skill->name;
    	}
    	
    	$chat_messages = ChatMessage::where('chat_id', $tmp_chat->id)->orderBy('created_at', 'desc')->take(10)->get();
    	
    	$chat_page = $tmp_chat->page;
    
    	return view('pages.chatroom', compact('tmp_chat', 'tmp_district', 'skills_arr', 'chat_page', 'chat_messages'));
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
    	$user = Auth::user();
    	
  		$message_type = $request->type;
  		$message = $request->message;
  		
  		$pattern = '/<(.*?)>/';
  		
  		$message = str_replace("<","&laquo;", $message);
  		$message = str_replace(">","&raquo;", $message);
  		$message = str_replace("&laquo;","<span class='rpg-sentence'>&laquo;", $message);
  		$message = str_replace("&raquo;","&raquo;</span>", $message);
  		
//   		if($message_type == 'P'){
//   			$message = '<span style="color: red;"> [' . $message->recipient . '] </span> ' . $message;
//   		}
  		
    	ChatMessage::create([
    			'user_id' => $user->id,
    			'personaggio_id' => $user->personaggio_id,
    			'chat_id' => $request->chat_id,
    			'message' => $message,
//     			'images' => $request->images,
    			'recipient' => $request->recipient,
    			'type' => $request->type
    	]);
    	
//     	event(new ChatMessageWasReceived($message, $user));
    	
    	return 'ok';
    	
//     	return redirect()->action(
//     			'ChatMessagesController@index', ['district' => 'minato', 'chat' => 'piazza']);
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
        //
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
    
    public function loadMessagesView($chat_id){
    	
    	$chat_messages = ChatMessage::where('chat_id', $chat_id)->orderBy('created_at', 'desc')->take(10)->get();
    	
    	return view('chats.board', compact('chat_messages'));
    }
}

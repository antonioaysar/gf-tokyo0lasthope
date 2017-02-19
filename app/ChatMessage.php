<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected $table = "chat_messages";
    
    public $fillable = [
    		'user_id', 
    		'chat_id', 
    		'images',
    		'personaggio_id',
    		'recipient',
    		'type',
    		'message'
    ];
    
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    
    public function personaggio()
    {
    	return $this->belongsTo('App\Personaggio');
    }
    
    public function chat()
    {
    	return $this->belongsTo('App\Chat');
    }
}

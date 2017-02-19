<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
	
	protected $table = "chats";
	
	protected $fillable = [
			'name',
			'district_id'
	];
	
	public function district()
    {
        return $this->belongsTo('App\District');
    }
    
    public function chatMessages()
    {
    	return $this->hasMany('App\ChatMessage', 'chat_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personaggio extends Model
{
	protected $table = "personaggio";

    /**
	 * Fillable fields for a Personaggio
	 * @var array
	 */
	protected $fillable = [
		'nome',
		'cognome',
		'sesso',
		'birthplace',
		'birthdate',
		'id_razza',
		'discendenza_id',
		'car0',
		'car1',
		'car2',
		'car3',
		'car4',
		'car5',
		'pass',
		'ultimo_cambiopass',
		'data_iscrizione',
		'salute',
		'salute_max',
		'soldi',
		'esperienza',
		'age',
		'social_class'
	];
	
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	public function chatMessages()
	{
		return $this->hasMany('App\ChatMessage', 'personaggio_id');
	}
	
	public function discendenza()
	{
		return $this->hasOne('App\Discendenza', 'discendenza_id');
	}
}

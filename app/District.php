<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = "districts";

	protected $fillable = [
		'nome',
		'descrizione',
		'position',
		'stato',
		'pagina',
		'chat',
		'immagine',
		'stanza_apparente',
		'id_mappa',
		'link_immagine',
		'link_immagine_hover',
		'id_mappa_collegata',
		'x_cord',
		'y_cord',
		'invitati',
		'privata',
		'proprietario',
		'ora_prenotazione',
		'scadenza',
		'costo'
	];
	
	public function chats()
	{
		return $this->hasMany('App\Chat', 'district_id');
	}
}

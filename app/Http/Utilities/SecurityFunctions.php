<?php


namespace App\Http\Utilities;

class SecurityFunctions {

	protected static $pass = '';

	protected static $encript_str = '';

	/**
	 * Genera una password casuale, esclusivamente alfabetica con lettere maiuscole
	 * @return una stringa casuale lunga 8 caratteri
	 */
	public static function gdrcd_genera_pass()
	{


		for ($i=0; $i<8; ++$i){
			static::$pass.= chr(mt_rand(0, 24) + ord("A"));
		}

		return static::$pass;
	}

	/**
	 * Funzione di hashing delle password. Decide la modalità in base alle spefiche in config.inc.php. Attualmente solo MD5 e SHA-1 sono supportate
	 * @param string $str: la password o stringa di cui calcolare l'hash
	 * @return l'hash calcolato a partire da $str con l'algoritmo specificato nella configurazione
	 */
	public static function gdrcd_encript($str)
	{
		static $encript_str = '';

		$encript_algorithm = 'MD5';

		switch ($encript_algorithm)
		{
			case 'MD5':		static::$encript_str = md5($str);		break;
			case 'SHA-1':	static::$encript_str = sha1($str);		break;
		}

		return static::$encript_str;
	}
}

?>


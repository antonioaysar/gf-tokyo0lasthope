<?php

namespace App\Http\Utilities;

use App\Discendenza;
use App\News;
use App\Quest;
use Carbon\Carbon;

class Utilities {

	protected static $skill_points = [
			'0' => 0,
			'1' => 1,
			'2' => 2,
			'3' => 3,
			'4' => 4,
			'5' => 5,
			'6' => 6,
			'7' => 7,
			'8' => 8,
			'9' => 9,
			'10' => 10,
	];
	
	protected static $stats_matching = [
			'0' => 'Forza', 
			'1' => 'Robustezza', 
			'2' => 'Destrezza', 
			'3' => 'Intelligenza', 
			'4' => 'Saggezza', 
			'5' => 'Percezioni'
	];
	
	protected static $social_classes = [
			'0' => 'Dimenticato',
			'1' => 'Sorvegliato',
			'2' => 'Artiere',
			'3' => 'Elite',
			'4' => 'Insigne'
	];
	
	protected static $races_matching = [
			'-1' => 'Non riservata',
			'1000' => 'Umani'
	];

	public static function all()
	{
		return static::$skill_points;
	}
	
	public static function stat_matching($key)
	{
		return static::$stats_matching[$key];
	}
	
	public static function race_matching($key)
	{
		return static::$races_matching[$key];
	}
	
	public static function discendenze()
	{
		$discendenze = Discendenza::all();
		
		return $discendenze;
	}
	
	public static function socialClasses()
	{
		return static::$social_classes;
	}
	
	public static function socialClassesRegistration()
	{
		array_pop(self::$social_classes);
		
		return static::$social_classes;
	}
	
	public static function lastMonthNews(){
		
		$lastMonthNews = News::where('created_at', '>=', Carbon::now()->startOfMonth())->get();
		
		return $lastMonthNews;
	}
	
	public static function lastMonthQuests(){
	
		$lastMonthQuests = Quest::where('created_at', '>=', Carbon::now()->startOfMonth())->get();
	
		return $lastMonthQuests;
	}

}

?>
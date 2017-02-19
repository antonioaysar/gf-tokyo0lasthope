<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@welcome');

Route::get('/regolamento', 'PagesController@rulebook');

Route::get('/ambientazione', 'PagesController@world');

Auth::routes();

Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

Route::get('/home', 'HomeController@index');
Route::get('/mappa', 'HomeController@index');

//administration menu

Route::get('/gestione', 'PagesController@administration');

Route::get('/gestione/news', 'NewsController@index');

Route::get('/gestione/quests', 'QuestsController@index');

Route::get('/gestione/skills', 'SkillsController@index');

Route::get('/gestione/districts', 'DistrictsController@index');

Route::get('/gestione/chats', 'ChatsController@index');

//character

Route::get('/personaggio', 'CharactersController@index');

//resources

Route::resource('news', 'NewsController');

Route::resource('quests', 'QuestsController');

Route::resource('skills', 'SkillsController');

Route::resource('districts', 'DistrictsController');

Route::resource('chats', 'ChatsController');

Route::resource('chatMessages', 'ChatMessagesController');

Route::resource('characters', 'CharactersController');


//TODO: make dynamic routes

Route::get('/mappa/{district}/{chat}', 'ChatMessagesController@index');

Route::get('/chatroom/{chat_id}', 'ChatMessagesController@loadMessagesView');

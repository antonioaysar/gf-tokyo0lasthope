@extends('layouts.game')

@section('content')
            <h1 class="page-header">Gestione</h1>
            
            <ul class="nav nav-sidebar">
            	<li><a href="{{ url('gestione/news') }}">Gestione News</a></li>
            	<li><a href="{{ url('gestione/quests') }}">Gestione Quests</a></li>
            	<li><a href="{{ url('gestione/skills') }}">Gestione Abilità</a></li>
            	<li><a href="{{ url('gestione/districts') }}">Gestione Distretti</a></li>
            	<li><a href="{{ url('gestione/chats') }}">Gestione Chat</a></li>
            </ul>
            
           
@endsection